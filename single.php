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

	<main id="primary" class="relative site-main -mt-16 pt-16">
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
