<?php
/**
 * Title: Header
 */

get_template_part('template-parts/head');
?>

<div id="page" class="site devcon-default-bg mt-16">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', '_s' ); ?></a>

	<?php get_template_part('template-parts/header'); ?>