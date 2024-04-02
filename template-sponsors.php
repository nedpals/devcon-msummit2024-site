<?php
/* Template Name: Sponsors Page */

get_header();

$page_sections = [
    'lower' => ['landing-page/testimonials', 'landing-page/faqs', 'landing-page/countdown', 'common/sponsors', 'landing-page/social_feed']
];
?>

<div class="devcon-default-bg">
    <div class="relative -mt-16">
        <div style="background-image: url(<?php devcon_msummit2024_get_asset_url('testimonials_bg.png') ?>)"
             class="absolute top-0 inset-x-0 bg-no-repeat bg-cover bg-left h-full w-full"></div>

        <div class="container border-b border-white/25">
		    <?php get_template_part('template-parts/landing-page/hero', args: [
			    'title' => devcon_msummit2024_get_theme_mod('sponsors_page_hero_title', 'Sponsors'),
			    'content' => devcon_msummit2024_get_theme_mod('sponsors_page_hero_description', ''),
                'background_waves' => false,
			    'container_width_class' => 'relative',
			    'divider' => false,
			    'inner_container_padding' => 'pt-24',
		    ]) ?>

		    <?php get_template_part('template-parts/sponsor-page/sponsorship_packages', args: [
			    'header' => false,
			    'container_width_class' => 'relative',
			    'container_padding' => '-mx-4'
		    ]) ?>
        </div>
    </div>

    <?php devcon_msummit2024_load_page_sections($page_sections,'lower', 'sponsor-page'); ?>
</div>

<?php get_footer(); ?>