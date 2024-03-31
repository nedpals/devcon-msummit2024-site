<?php
/*
YARPP Template: Multilingual
Description: An example template for use with the WPML and Polylang plugins
Author: YARPP Team
*/
?>

<?php
/*
Templating in YARPP enables developers to uber-customize their YARPP display using PHP and template tags.

The tags we use in YARPP templates are the same as the template tags used in any WordPress template. In fact, any WordPress template tag will work in the YARPP Loop. You can use these template tags to display the excerpt, the post date, the comment count, or even some custom metadata. In addition, template tags from other plugins will also work.

If you've ever had to tweak or build a WordPress theme before, you’ll immediately feel at home.

// Special template tags which only work within a YARPP Loop:

1. the_score()      // this will print the YARPP match score of that particular related post
2. get_the_score()      // or return the YARPP match score of that particular related post

Notes:
1. If you would like Pinterest not to save an image, add `data-pin-nopin="true"` to the img tag.

*/
?>

<?php
if ( function_exists( 'icl_register_string' ) ) {
	icl_register_string( 'Yet Another Related Posts Plugin', 'related posts header', 'Related Posts' );
	icl_register_string( 'Yet Another Related Posts Plugin', 'no related posts message', 'No related posts.' );
}
?>

<h3><?php echo ( function_exists( 'icl_t' ) ? icl_t( 'Yet Another Related Posts Plugin', 'related posts header', 'Related Posts' ) : 'Related Posts' ); ?></h3>
<?php if ( have_posts() ) : ?>
<ol>
	<?php
	while ( have_posts() ) :
		the_post();
		?>
	<li><a href="<?php the_permalink(); ?>" rel="bookmark norewrite" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
	<?php endwhile; ?>
</ol>
<?php else : ?>
<p><?php echo ( function_exists( 'icl_t' ) ? icl_t( 'Yet Another Related Posts Plugin', 'no related posts message', 'No related posts.' ) : 'No related posts.' ); ?></p>

<?php endif; ?>
