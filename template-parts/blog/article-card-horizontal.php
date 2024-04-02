<?php
/** @var $args array */

$args = wp_parse_args($args, [
	'post' => $post
]);

$post = $args['post'];
$category = get_the_category($post->ID);
$thumbnail_url = get_the_post_thumbnail_url() ?: devcon_msummit2024_get_asset_url('blog_placeholder.jpg', return: true);
?>

<a href="<?php the_permalink($post); ?>"
   rel="bookmark norewrite"
   title="<?php the_title_attribute(['post' => $post]); ?>"
   class="flex h-full shadow-lg transition-transform scale-100 hover:scale-[1.05]">

    <div class="w-2/5 bg-black rounded-l-xl bg-center bg-cover bg-no-repeat"
         style="background-image: url(<?php echo $thumbnail_url ?>)">
    </div>

	<div class="w-3/5 h-full rounded-r-xl pr-0.5 py-0.5 pr-0.5 bg-gradient-to-r from-transparent to-[hsl(52deg,100%,50%)]">
		<div class="h-full flex flex-col w-full p-8 rounded-r-xl bg-[#18073F]">
			<?php if (!empty($category)) { ?>
                <div class="mb-4 uppercase font-bold relative bg-gradient-to-r from-[hsl(52deg,100%,50%)] to-transparent text-black rounded-l px-6 py-2">
					<?php echo $category[0]->name ?>
                </div>
			<?php } ?>

			<div class="mb-4 text-white/70 w-full">
				<?php devcon_msummit2024_posted_on('pr-2 border-r border-white/70', false, $post); ?>
				<?php devcon_msummit2024_posted_by('pl-2', false, $post); ?>
			</div>

            <h2 class="mb-4 text-4xl w-full uppercase font-bold pb-3"><?php echo get_the_title($post); ?></h2>

            <!-- Post Excerpt -->
            <div class="mb-4 text-white prose w-full">
                <?php echo get_the_excerpt($post); ?>
            </div>

			<div class="mt-4 self-end w-1/2 px-4 btn btn-primary flex items-center justify-between">
				<span>Read More</span>
				<svg width="25" height="22" viewBox="0 0 25 22" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M20.5493 12.0582H1.31329C1.0388 12.0582 0.775552 11.943 0.581457 11.7378C0.387362 11.5327 0.27832 11.2545 0.27832 10.9644C0.27832 10.6744 0.387362 10.3962 0.581457 10.191C0.775552 9.98592 1.0388 9.87069 1.31329 9.87069H20.5493L13.0002 1.89507C12.8059 1.68969 12.6967 1.41114 12.6967 1.12069C12.6967 0.830242 12.8059 0.551691 13.0002 0.346313C13.1946 0.140938 13.4581 0.0255585 13.733 0.0255585C14.0078 0.0255585 14.2714 0.140938 14.4657 0.346313L23.7805 10.1901C23.8769 10.2917 23.9533 10.4124 24.0055 10.5452C24.0577 10.6781 24.0846 10.8206 24.0846 10.9644C24.0846 11.1083 24.0577 11.2508 24.0055 11.3836C23.9533 11.5165 23.8769 11.6372 23.7805 11.7388L14.4657 21.5826C14.2714 21.7879 14.0078 21.9033 13.733 21.9033C13.4581 21.9033 13.1946 21.7879 13.0002 21.5826C12.8059 21.3772 12.6967 21.0986 12.6967 20.8082C12.6967 20.5177 12.8059 20.2392 13.0002 20.0338L20.5493 12.0582Z" fill="currentColor"/>
				</svg>
			</div>
		</div>

	</div>
</a>
