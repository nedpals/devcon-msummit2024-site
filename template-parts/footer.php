<?php
/**
 * Title: Footer
 * Slug: footer
 * Categories: footer
 * Block Types: core/template-parts/footer
 */
?>

<footer class="devcon-default-bg relative text-white pl-4 lg:pl-0">
    <div class="container w-full xl:px-0 py-8 flex flex-col lg:flex-row items-center border-t border-white/20">
        <img src="<?php devcon_msummit2024_get_asset_url('devcon_logo.png') ?>" />

        <div class="flex mt-8 lg:my-0 lg:mx-auto flex-col-reverse md:flex-row items-center font-light text-gray-300">
            <p>&copy; 2024 DEVCON</p>

            <div class="hidden lg:block h-6 w-[1px] mx-8 bg-gray-300"></div>

	        <?php get_template_part('template-parts/navigation/social-links', args: ['class' => 'lg:hidden mb-4']); ?>

	        <?php wp_nav_menu([
		        'menu' => 'footer',
		        'menu_class' => 'footer-menu my-8',
                'container_class' => 'mb-4 md:mb-0'
	        ]) ?>
        </div>

	    <?php get_template_part('template-parts/navigation/social-links', args: ['class' => 'hidden lg:flex']); ?>
    </div>
</footer>