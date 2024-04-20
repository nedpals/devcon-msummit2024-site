<?php

/**
 * The home page template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header();

$page_sections = [
   'upper' => ['overview', 'preevents'],
   'lower' => ['agenda', 'speakers', 'tickets', 'testimonials', 'sponsors-cta', 'faqs', 'countdown', 'social_feed', 'common/sponsors', 'common/cta']
];
?>

<div class="devcon-default-bg -mt-16">
    <?php get_template_part('template-parts/landing-page/hero', args: [
	    'event_location' => devcon_msummit2024_render_text('event_location', return: true),
	    'event_date' => devcon_msummit2024_render_text('event_date', return: true),
	    'event_time' => devcon_msummit2024_render_text('event_time', return: true),
        'alternating_texts' => devcon_msummit2024_get_theme_mod('hero_alternating_texts', ''),
	    'cta_button_text' => devcon_msummit2024_render_text('cta_button_text', return: true),
	    'cta_button_url' => devcon_msummit2024_get_theme_mod('cta_button_url', ''),
	    'inner_container_padding' => 'py-16 md:py-32 h-[93vh] md:h-auto',
    ]); ?>
	<?php devcon_msummit2024_load_page_sections($page_sections,'upper', 'landing-page'); ?>
</div>

<div>
	<?php devcon_msummit2024_load_page_sections($page_sections,'lower', 'landing-page'); ?>
</div>
<?php get_footer(); ?>

