<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package devcon-msummit2024
 */

get_header();
?>

    <div style="background-image: url(<?php devcon_msummit2024_get_asset_url('bg_blog_1.webp') ?>)"
         class="bg-no-repeat bg-top bg-cover h-full -mt-20 pt-20">
        <div class="max-w-7xl mx-auto w-full px-4 lg:px-0 pt-8 pb-4 flex justify-between">
            <a href="<?php echo get_permalink(get_page_by_path('/blog')) ?>" class="hover:underline text-2xl md:text-3xl tracking-tight entry-title">
                <span class="font-light">Mindanao Summit</span> <span class="font-extrabold">Blog</span>
            </a>

            <!-- go back to blog -->
            <a href="<?php echo get_permalink(get_page_by_path('/blog')) ?>" class="hover:underline text-white/90 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                <span class="pl-2">Back to Blog</span>
            </a>
        </div>
    </div>

	<main id="primary" class="relative site-main">
        <div
            style="background-image: url(<?php devcon_msummit2024_get_asset_url('bg-blog.png') ?>)"
            class="absolute inset-x-0 top-0 w-full bg-no-repeat bg-top bg-contain h-full"></div>

        <div class="relative">
            <?php
            while ( have_posts() ) :
                the_post();
                get_template_part( 'template-parts/content', get_post_type() );
            endwhile; // End of the loop.
            ?>
        </div>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
