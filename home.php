<?php
/* Template Name: Blog Index */
get_header();
?>

	<div class="devcon-default-bg min-h-screen -mt-16 pt-16">
		<div class="container">
			<div class="flex flex-wrap -mx-4">
				<?php
				if (have_posts()) {
					while (have_posts()) {
						the_post();
						?>

						<div class="w-1/3 p-4">
							<?php get_template_part('template-parts/blog/article-card', args: ['post' => $post]); ?>
						</div>

						<?php
					}
				}
				?>
			</div>
		</div>
	</div>

<?php get_footer();