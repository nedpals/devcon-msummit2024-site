<?php
/** @var $args array */

$args = wp_parse_args($args, [
	'post' => $post,
    'class' => ''
]);

$post = $args['post'];
$category = get_the_category($post->ID);
$thumbnail_url = get_the_post_thumbnail_url() ?: devcon_msummit2024_get_asset_url('blog_placeholder.jpg', return: true);
?>

<a href="<?php the_permalink($post); ?>"
   rel="bookmark norewrite"
   title="<?php the_title_attribute(['post' => $post]); ?>"
   class="<?php echo $args['class'] ?> flex items-stretch h-full shadow-lg transition-all scale-100 hover:scale-[1.05] border border-white/20 hover:border-[hsl(52deg,100%,50%)] rounded-xl">

    <div class="w-2/5 bg-black rounded-l-xl bg-center bg-cover bg-no-repeat"
         style="background-image: url(<?php echo $thumbnail_url ?>)">
    </div>

	<div class="w-3/5 flex flex-col justify-center rounded-r-xl px-12 py-20 bg-white/5">
		<?php if (!empty($category)) { ?>
            <div class="self-start text-sm rounded-full border border-[hsl(52deg,100%,50%)] text-[hsl(52deg,100%,50%)] px-4 py-1 mb-4">
				<?php echo $category[0]->name ?>
            </div>
		<?php } ?>

        <h2 class="mb-2 text-4xl md:text-5xl lg:text-6xl w-full font-bold pb-3"><?php echo get_the_title($post); ?></h2>

        <div class="mb-4 mt-4 text-white/90 w-full space-x-4 flex items-center text-lg">
	        <?php devcon_msummit2024_posted_by('font-semibold', false, $post, true); ?>
			<?php devcon_msummit2024_posted_on('', false, $post); ?>
        </div>
	</div>
</a>
