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
        <div class="entry-header w-full pt-24 pb-12">
            <h1 class="text-5xl lg:text-6xl font-extrabold entry-title">Blog</h1>
        </div>

        <?php if (have_posts() && $paged == 1) : the_post(); ?>
        <div class="w-full pb-8">
	        <?php get_template_part('template-parts/blog/article-card', 'horizontal', args: [
                'post' => $post,
                'class' => 'md:h-[30rem]'
            ]); ?>
        </div>
        <?php endif ?>

		<div class="flex flex-wrap -mx-4 pb-8">
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