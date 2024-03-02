<?php
/**
 * Title: Footer
 * Slug: footer
 * Categories: footer
 * Block Types: core/template-parts/footer
 */
?>

<footer class="relative text-white h-24 pl-4 lg:pl-0">
    <div class="container !px-0 py-8 flex flex-col lg:flex-row items-center space-y-4 lg:space-y-0 lg:space-x-12 border-t border-white/20">
        <img src="<?php devcon_msummit2024_get_asset_url('devcon_logo.png') ?>" />

        <div class="flex flex-col md:flex-row items-center font-light text-gray-300">
            <p class="lg:pr-6">&copy; 2024 DEVCON</p>

            <ul class="list-none m-0 flex items-center space-x-6">
                <?php wp_nav_menu([
                    'menu' => 'footer',
                    'container' => false,
                    'items_wrap' => '%3$s',
                ]) ?>
            </ul>
        </div>
    </div>
</footer>