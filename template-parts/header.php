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

            <?php if (isset($contact_us_link)) { ?>
                <a href="<?php echo $contact_us_link ?>" class="devcon-gradient p-0.5 rounded-full uppercase tracking-wide font-semibold">
                    <span class="bg-[#1C133E] px-6 py-1.5 text-white rounded-full space-x-4 flex items-center">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.125 18C15.3889 18 13.6703 17.625 11.9692 16.875C10.2681 16.125 8.72278 15.0556 7.33333 13.6667C5.94444 12.2778 4.875 10.7361 4.125 9.04167C3.375 7.34722 3 5.625 3 3.875V3H7.91667L8.6875 7.1875L6.3125 9.58333C6.61806 10.125 6.95833 10.6389 7.33333 11.125C7.70833 11.6111 8.11111 12.0625 8.54167 12.4792C8.94444 12.8819 9.38556 13.2675 9.865 13.6358C10.3444 14.0042 10.8617 14.3478 11.4167 14.6667L13.8333 12.25L18 13.1042V18H17.125Z" fill="white"/>
                        </svg>

                        <span class="text-sm">Contact Us</span>
                    </span>
                </a>
            <?php } ?>
        </div>
    </div>
</header>
