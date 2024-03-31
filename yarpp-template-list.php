<?php
/*
YARPP Template: List
Description: This template returns posts as a comma-separated list.
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

<h3>Related Posts</h3>
<?php
if ( have_posts() ) :
	$postsArray = array();
	while ( have_posts() ) :
		the_post();
		$postsArray[] = '<a href="' . get_permalink() . '" rel="bookmark norewrite" title="' . the_title_attribute( 'echo=0' ) . '">' . get_the_title() . '</a><!-- (' . get_the_score() . ')-->';
	endwhile;

	echo implode( ', ' . "\n", $postsArray ); // print out a list of the related items, separated by commas

else :
	?>

<p>No related posts.</p>
<?php endif; ?>
