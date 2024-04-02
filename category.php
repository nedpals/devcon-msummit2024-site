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
					<a href="<?php echo get_permalink(get_page_by_path('/blog')) ?>" class="hover:underline text-2xl lg:text-4xl font-extrabold entry-title tracking-tight">
						<span class="font-light">Mindanao Summit</span> <span class="font-extrabold">Blog</span>
					</a>
				</div>

				<div class="pt-4 pb-8">
					<h2 class="text-5xl lg:text-6xl"><?php single_cat_title() ?></h2>
				</div>
			</header>

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