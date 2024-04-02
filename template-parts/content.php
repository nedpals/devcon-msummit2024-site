<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

$thumbnail_url = get_the_post_thumbnail_url();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('min-h-screen'); ?>>
    <header class="container w-full mx-auto px-6 py-10 lg:py-20">
        <?php
        /* translators: used between list items, there is a space after the comma */
        $categories_list = get_the_category_list( esc_html__( ' ', 'devcon-msummit2024' ) );
        if ( $categories_list ) {
	        /* translators: 1: list of categories. */
	        printf( '<div class="cat-links">' . esc_html__( '%1$s', 'devcon-msummit2024' ) . '</div>', $categories_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
        }
        ?>
        <h1 class="text-4xl lg:text-6xl font-extrabold entry-title">
            <?php
            if ( is_singular() ) :
                the_title( '', '' );
            else :
                the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' );
            endif;
            ?>
        </h1>

        <?php
		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta pt-8 flex items-center divide-x">
				<?php
				devcon_msummit2024_posted_by('pr-2');
				devcon_msummit2024_posted_on('pl-2');
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

    <?php if ($thumbnail_url) { ?>
        <div
            style="background-image: url(<?php echo $thumbnail_url ?>)"
            class="pt-[calc(9/16*100%)] lg:pt-[calc(541/1512*100%)] bg-cover bg-center bg-no-repeat">
        </div>
    <?php } ?>

    <div class="prose lg:prose-lg mx-auto <?php if ($thumbnail_url) { ?>pt-10 lg:pt-20<?php } ?> pb-20 px-6 md:px-0">
		<?php
		the_content(
			sprintf(
				wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', '_s' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<div class="container pb-10">
			<?php devcon_msummit2024_entry_footer(); ?>
        </div>

		<?php get_template_part('template-parts/common/cta'); ?>
        <?php get_template_part('template-parts/blog/related'); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->