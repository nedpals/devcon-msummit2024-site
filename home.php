<?php

/**
 * The home page template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header();

$page_sections = [
   'upper' => ['hero', 'overview'],
   'lower' => ['agenda', 'speakers', 'tickets', 'testimonials', 'sponsorship_packages', 'faqs', 'countdown', 'social-feed', 'sponsors']
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
	<?php load_section('upper'); ?>
</div>

<div class="devcon-default-bg">
	<?php load_section('lower'); ?>
</div>
<?php get_footer(); ?>

