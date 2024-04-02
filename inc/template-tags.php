<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package devcon-msummit2024
 */

if ( ! function_exists( 'devcon_msummit2024_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function devcon_msummit2024_posted_on($class_name = '', bool $link = true, WP_Post|null $post = null) {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf(
			$time_string,
			esc_attr( get_the_date( DATE_W3C , $post) ),
			esc_html( get_the_date(post: $post) ),
			esc_attr( get_the_modified_date( DATE_W3C , $post) ),
			esc_html( get_the_modified_date(post: $post) )
		);

		$posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x( '%s', 'post date', 'devcon-msummit2024' ),
			 $link ? '<a href="' . esc_url( get_permalink($post) ) . '" rel="bookmark">' . $time_string . '</a>' : $time_string
		);

		echo '<span class="posted-on '.$class_name.'">' . $posted_on . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	}
endif;

if ( ! function_exists( 'devcon_msummit2024_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function devcon_msummit2024_posted_by($class_name = '', bool $link = true, WP_Post|null $post = null, $avatar = false) {
		$author_meta = esc_html(get_the_author_meta( 'display_name', $post ? $post->post_author : get_the_author_meta( 'ID' ) ));
        $pby_string = $link ? '<a class="url fn n" href="' . esc_url( get_author_posts_url($post ? $post->post_author : get_the_author_meta( 'ID' ) ) ) . '">' . $author_meta . '</a>' : $author_meta;

        $byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( '%s', 'post author', 'devcon-msummit2024' ),
			'<span class="author vcard">'.$pby_string.'</span>'
		);

		$text = '<span class="byline '.$class_name.'"> ' . $byline . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

        if ($avatar) {
	        $text = '<div class="inline-flex items-center space-x-2">' . get_avatar( $post ? $post->post_author : get_the_author_meta( 'ID' ), 32, '', '', [ 'class' => 'rounded-full' ] ) . $text . '</div>';
        }

		echo $text;
	}
endif;

if ( ! function_exists( 'devcon_msummit2024_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function devcon_msummit2024_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'devcon-msummit2024' ) );
			if ( $tags_list ) {
				/* translators: 1: list of tags. */
				printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'devcon-msummit2024' ) . '</span>', $tags_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}
		}
//
//		edit_post_link(
//			sprintf(
//				wp_kses(
//					/* translators: %s: Name of current post. Only visible to screen readers */
//					__( 'Edit <span class="screen-reader-text">%s</span>', 'devcon-msummit2024' ),
//					array(
//						'span' => array(
//							'class' => array(),
//						),
//					)
//				),
//				wp_kses_post( get_the_title() )
//			),
//			'<span class="edit-link">',
//			'</span>'
//		);
	}
endif;

if ( ! function_exists( 'devcon_msummit2024_post_thumbnail' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function devcon_msummit2024_post_thumbnail() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

		if ( is_singular() ) :
			?>

			<div class="post-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div><!-- .post-thumbnail -->

		<?php else : ?>

			<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
				<?php
					the_post_thumbnail(
						'post-thumbnail',
						array(
							'alt' => the_title_attribute(
								array(
									'echo' => false,
								)
							),
						)
					);
				?>
			</a>

			<?php
		endif; // End is_singular().
	}
endif;

if ( ! function_exists( 'wp_body_open' ) ) :
	/**
	 * Shim for sites older than 5.2.
	 *
	 * @link https://core.trac.wordpress.org/ticket/12563
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
endif;
