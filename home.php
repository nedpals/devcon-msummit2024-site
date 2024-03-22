<?php

/**
 * The home page template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header();

$page_sections = [
   'upper' => ['overview'],
   'lower' => ['agenda', 'speakers', 'tickets', 'testimonials', 'sponsors-cta', 'faqs', 'countdown', 'social-feed', 'sponsors', 'cta']
];

function load_section(string $name): void {
    global $page_sections;

     if (!array_key_exists($name, $page_sections)) {
         return;
     }

    foreach ($page_sections[$name] as $section) {
        $is_enabled = devcon_msummit2024_get_theme_mod('section_' . $section . '_enabled');
        if (!$is_enabled) {
            continue;
        }
        get_template_part('template-parts/landing-page/' . $section);
    }
}
?>

<div class="devcon-default-bg -mt-16">
    <?php get_template_part('template-parts/landing-page/hero', args: [
	    'event_location' => devcon_msummit2024_render_text('event_location', return: true),
	    'event_date' => devcon_msummit2024_render_text('event_date', return: true),
	    'event_time' => devcon_msummit2024_render_text('event_time', return: true),
        'alternating_texts' => devcon_msummit2024_get_theme_mod('hero_alternating_texts', ''),
	    'cta_button_text' => devcon_msummit2024_render_text('cta_button_text', return: true),
	    'cta_button_url' => devcon_msummit2024_get_theme_mod('cta_button_url', ''),
    ]); ?>
	<?php load_section('upper'); ?>
</div>

<div class="devcon-default-bg">
	<?php load_section('lower'); ?>
</div>
<?php get_footer(); ?>

