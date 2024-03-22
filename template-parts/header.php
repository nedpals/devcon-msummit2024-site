<?php
/**
 * Title: Header
 * Slug: header
 * Categories: header
 * Block Types: core/template-parts/header
 */
$contact_us_link = devcon_msummit2024_get_theme_mod('contact_us_link', '');


?>

<header class="z-50 fixed top-0 inset-x-0 py-4 px-4 shadow-lg backdrop-blur bg-[#18073F]/40">
    <div class="max-w-7xl mx-auto flex items-center">
        <a href="<?php echo home_url(); ?>" class="no-underline">
            <img src="<?php echo get_template_directory_uri() ?>/resources/assets/devcon_logo.png"
                 alt="<?php echo get_bloginfo('name') ?>" />
        </a>

        <div class="ml-auto flex items-center space-x-4">
            <?php get_template_part('template-parts/navigation/social-links'); ?>

            <a href="<?php echo devcon_msummit2024_get_theme_mod('cta_button_url', '/#tickets') ?>" class="btn btn-primary text-sm space-x-4 flex items-center">
                Get Tickets
            </a>

            <?php if (isset($contact_us_link)) { ?>
                <a href="<?php echo $contact_us_link ?>" class="btn btn-primary is-outline text-sm space-x-4 flex items-center">
                    Support the summit
                </a>
            <?php } ?>
        </div>
    </div>
</header>
