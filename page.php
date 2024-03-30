<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package devcon-msummit2024
 */

get_header();
?>

<main id="primary" class="relative site-main -mt-16 pt-24">
	<div
        style="background-image: url(<?php devcon_msummit2024_get_asset_url('bg-blog.png') ?>)"
        class="absolute inset-x-0 top-0 w-full bg-no-repeat bg-top bg-cover h-full"></div>
    <div class="relative">
		<?php
		if ( have_posts() ) :
			if ( is_home() && ! is_front_page() ) :
				?>
                <header>
                    <h1 class="text-5xl lg:text-6xl page-title screen-reader-text"><?php single_post_title(); ?></h1>
                </header>
			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'page' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
    </div>
</main>

<?php get_footer(); ?>
