<?php

// Redirect back to home page if there are no posts
if (!have_posts()) {
	wp_redirect(home_url());
	exit;
}

$next_link = previous_posts(display: false);
$prev_link = next_posts(display: false);
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

get_header();
?>

<div class="relative devcon-default-bg min-h-screen -mt-16 pt-16 pb-24">
    <div
		style="background-image: url(<?php devcon_msummit2024_get_asset_url('bg_blog_1.webp') ?>)"
		class="absolute inset-x-0 top-0 w-full bg-no-repeat bg-top bg-contain lg:bg-cover h-full"></div>

	<div class="relative container flex flex-col items-center">
        <header class="w-full pb-4">
            <div class="entry-header pt-24 pb-8">
                <h1 class="text-5xl lg:text-6xl font-extrabold entry-title tracking-tight">
                    <span class="font-light">Mindanao Summit</span> <span class="font-extrabold">Blog</span>
                </h1>
            </div>

            <?php if ($paged === 1) { ?>
                <?php $categories = get_categories(); ?>
                <div class="pb-8">
                    <div class="flex flex-wrap -mx-1">
                        <p class="px-1 py-2">Categories:</p>

                        <?php foreach ($categories as $category) { ?>
                            <div class="px-1 py-2">
                                <a href="<?php echo get_category_link($category->term_id); ?>"
                                   class="border border-white/20 text-white/90 px-4 py-1 rounded-full hover:bg-white/10 hover:text-white/100 transition-colors">
                                    <?php echo $category->name; ?>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </header>

        <?php if (have_posts() && $paged == 1) : the_post(); ?>
            <?php $featured_post = $post; ?>

            <?php
                if (!is_sticky($featured_post->ID)):
	                $featured_post_query = new WP_Query([
		                'tag' => 'featured',
		                'posts_per_page' => 1
	                ]);

                    if ($featured_post_query->have_posts()):
	                    wp_reset_postdata();
                        $featured_post_query->the_post();
                        $featured_post = $featured_post_query->post;
                    endif;
                endif;
            ?>

            <div class="w-full pb-8 mb-8 border-b border-white/20">
		        <?php get_template_part('template-parts/blog/article-card', 'horizontal', args: [
			        'post' => $featured_post,
			        'class' => 'md:h-[30rem]'
		        ]); ?>
            </div>
        <?php endif ?>

		<div class="w-full flex flex-wrap -mx-4 pb-8">
			<?php
			if (have_posts()) {
				while (have_posts()) {
					the_post();
					?>

					<div class="w-full md:w-1/2 lg:w-1/3 p-4">
						<?php get_template_part('template-parts/blog/article-card', args: ['post' => $post, 'excerpt' => true]); ?>
					</div>

					<?php
				}
			}
			?>
		</div>

		<!-- Pagination goes here -->
		<div class="space-x-4">
			<?php if ($paged > 1 && $next_link) { ?>
                <a href="<?php echo $next_link; ?>" class="btn btn-primary is-outline">Newer Posts</a>
			<?php } ?>

			<?php if ($prev_link) { ?>
				<a href="<?php echo $prev_link; ?>" class="btn btn-primary is-outline">More Posts</a>
			<?php } ?>
		</div>
	</div>
</div>

<?php

if ($paged == 1) {
	$sections = [ 'common/sponsors', 'landing-page/social_feed', 'common/cta' ];

	foreach ( $sections as $section ) {
		get_template_part( 'template-parts/' . $section );
	}
}

get_footer();