# Theme Package Script
# This script will create a zip file of the theme excluding the files listed in the files_to_exclude list
# The zip file will be created in the root of the theme directory
import zipfile
import glob
import fnmatch
import os

__dir__ = os.path.dirname(os.path.realpath(__file__))

themeZip = zipfile.ZipFile('theme.zip', 'w')

files_to_exclude = ['.git/**/*', '.github/**/*', 'package.py', 'theme.zip', '.idea/**/*', 'phpcs.xml.dist', 'node_modules/**/*', 'package.json', 'package-lock.json']
files_to_exclude = list(map(lambda x: os.path.join(__dir__, x.replace("/", os.sep)), files_to_exclude))

files = glob.glob(os.path.join(__dir__, '**', '*'), recursive=True)
theme_name = os.path.basename(os.path.normpath(__dir__))

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
    
themeZip.close()
