<?php

/**
 * The home page template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header();
?>

<div class="devcon-default-bg -mt-16">
	<?php get_template_part( 'template-parts/landing-page/hero' ); ?>
	<?php get_template_part( 'template-parts/landing-page/overview' ); ?>
</div>

<div class="devcon-default-bg">
    <?php get_template_part( 'template-parts/landing-page/agenda' ); ?>
    <?php get_template_part( 'template-parts/landing-page/speakers' ); ?>
    <?php get_template_part('template-parts/landing-page/tickets' ); ?>
    <?php get_template_part('template-parts/landing-page/testimonials' ); ?>
    <?php get_template_part('template-parts/landing-page/sponsorship_packages' ); ?>
    <?php get_template_part('template-parts/landing-page/faqs' ); ?>
    <?php get_template_part('template-parts/landing-page/countdown' ); ?>
    <?php get_template_part('template-parts/landing-page/social-feed' ); ?>
    <?php get_template_part('template-parts/landing-page/sponsors' ); ?>
</div>
<?php get_footer(); ?>

