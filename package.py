# Theme Package Script
# This script will create a zip file of the theme excluding the files listed in the files_to_exclude list
# The zip file will be created in the root of the theme directory
import zipfile
import glob
import fnmatch
import os

__dir__ = os.path.dirname(os.path.realpath(__file__))

# modify inc/auto-updater.php if GH_USERNAME and GH_REPO are defined
if 'GH_USERNAME' in os.environ and 'GH_REPO' in os.environ:
    with open(os.path.join(__dir__, 'inc', 'auto-updater.php'), 'r+') as file:
        data = file.read()
        data = data.replace('GH_USERNAME', os.environ['GH_USERNAME'])
        data = data.replace('GH_REPO', os.environ['GH_REPO'])
        file.seek(0)
        file.write(data)
        file.truncate()

    # include the auto-updater.php inside functions.php
    with open(os.path.join(__dir__, 'functions.php'), 'a') as file:
        file.write("\nrequire get_template_directory() . '/inc/auto-updater.php';\n")

# modify style.css if THEME_VERSION is defined
if 'THEME_VERSION' in os.environ:
    with open(os.path.join(__dir__, 'style.css'), 'r+') as file:
        data = file.read()
        data = data.replace('Version: 1.0.0', f"Version: {os.environ['THEME_VERSION']}")
        file.seek(0)
        file.write(data)
        file.truncate()

# Package the theme
theme_name = os.path.basename(os.path.normpath(__dir__))
files_to_exclude = ['.git/**/*', '.github/**/*', 'package.py', 'theme.zip', '.idea/**/*', 'phpcs.xml.dist', 'node_modules/**/*', 'package.json', 'package-lock.json']
files_to_exclude = list(map(lambda x: os.path.join(__dir__, x.replace("/", os.sep)), files_to_exclude))
files = glob.glob(os.path.join(__dir__, '**', '*'), recursive=True)

with zipfile.ZipFile('theme.zip', 'w') as themeZip:
    for file in files:
        excluded = False
        rel = os.path.relpath(file, __dir__)
        
        for exclude in files_to_exclude:
            if fnmatch.fnmatch(file, exclude):
                excluded = True
                break
            
        if excluded:
            print('Excluded: ' + rel)
            continue
        
        print('Added: ' + rel)
        themeZip.write(file, os.path.join(theme_name, rel))
