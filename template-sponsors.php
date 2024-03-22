<?php
/* Template Name: Sponsors Page */

get_header();
?>

<div class="devcon-default-bg">
    <div class="relative -mt-16">
        <div style="background-image: url(<?php devcon_msummit2024_get_asset_url('testimonials_bg.png') ?>)"
             class="absolute top-0 inset-x-0 bg-no-repeat bg-cover bg-left h-full w-full"></div>

        <div class="container border-b border-white/25">
		    <?php get_template_part('template-parts/landing-page/hero', args: [
			    'title' => 'Be One of Our Sponsors!',
			    'background_waves' => false,
			    'container_width_class' => 'relative',
			    'divider' => false,
			    'inner_container_padding' => 'pt-24',
		    ]) ?>

		    <?php get_template_part('template-parts/landing-page/sponsorship_packages', args: [
			    'header' => false,
			    'container_width_class' => 'relative',
			    'container_padding' => '-mx-4'
		    ]) ?>
        </div>
    </div>

    <?php get_template_part('template-parts/landing-page/testimonials') ?>
	<?php get_template_part('template-parts/landing-page/faqs') ?>
	<?php get_template_part('template-parts/landing-page/countdown') ?>
	<?php get_template_part('template-parts/landing-page/sponsors') ?>
	<?php get_template_part('template-parts/landing-page/social-feed') ?>
</div>

<?php get_footer(); ?>