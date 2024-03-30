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
    <div class="max-w-7xl mx-auto flex flex-col lg:flex-row lg:items-center">
        <div class="flex justify-between w-full md:w-auto">
            <a href="<?php echo home_url(); ?>" class="no-underline">
                <img src="<?php echo devcon_msummit2024_get_asset_url('devcon_logo.png') ?>"
                     alt="<?php echo get_bloginfo('name') ?>" />
            </a>

            <!-- hamburger -->
            <button class="hamburger-menu bg-transparent px-4 py-1 border-0 hover:bg-white/10 transition-colors">
                <svg class="h-6 w-6 text-white lg:hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>

        <div id="mobile-menu" class="hidden lg:flex w-full lg:w-auto justify-between lg:justify-end mt-4 lg:mt-0 lg:ml-auto items-center space-x-4">
            <?php get_template_part('template-parts/navigation/social-links'); ?>

            <div class="flex flex-row space-x-4">
                <a href="<?php echo devcon_msummit2024_get_theme_mod('cta_button_url', '/#tickets') ?>"
                   class="btn btn-primary text-sm space-x-4 flex items-center">
                    Get Tickets
                </a>

                <?php if (isset($contact_us_link)) { ?>
                    <a href="<?php echo $contact_us_link ?>" class="btn btn-primary is-outline text-sm space-x-4 flex items-center">
                        Support the summit
                    </a>
                <?php } ?>
            </div>
        </div>
    </div>
</header>
