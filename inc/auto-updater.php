<?php
// Automatic updates from GitHub
// Modified and taken from: https://gist.github.com/slfrsn/a75b2b9ef7074e22ce3b

function automatic_gh_updates($data) {
	// Theme information
	$theme   = get_stylesheet(); // Folder name of the current theme
	$current = wp_get_theme()->get('Version'); // Get the version of the current theme

	// GitHub information
	$user = '{{GH-USERNAME}}'; // The GitHub username hosting the repository
	$repo = '{{GH-REPO-NAME}}'; // Repository name as it appears in the URL

	// Get the latest release tag from the repository. The User-Agent header must be sent, as per
	// GitHub's API documentation: https://developer.github.com/v3/#user-agent-required
	$file = @json_decode(@file_get_contents('https://api.github.com/repos/'.$user.'/'.$repo.'/releases/latest', false,
		stream_context_create(['http' => ['header' => "User-Agent: ".$user."\r\n"]])
	));

	if($file) {
		// Strip the version number of any non-numerical characters
		$update = preg_replace('/release-/', '', $file->tag_name);
		// Only return a response if the new version number is higher than the current version
		if((int) $update > (int) $current) {
			$data->response[$theme] = array(
				'theme'       => $theme,
				'new_version' => $update,
				'url'         => 'https://github.com/'.$user.'/'.$repo,
				'package'     => $file->assets[0]->browser_download_url,
			);
		}
	}
	return $data;
}

add_filter('pre_set_site_transient_update_themes', 'automatic_gh_updates', 100, 1);