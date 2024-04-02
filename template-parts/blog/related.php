<?php
$posts = yarpp_get_related(['limit' => 3, 'post_type' => ['post']]);

if (!$posts) {
    return;
}
?>
<div class="relative devcon-default-bg">
    <div style="background-image: url(<?php devcon_msummit2024_get_asset_url('bg_related.webp') ?>)"
         class="absolute top-0 inset-x-0 bg-no-repeat bg-cover h-full w-full"></div>

    <div class="relative py-24">
        <div class="relative">
            <div class="relative section-heading">
                <h2 class="w-full lg:w-3/4">Related Articles</h2>
            </div>

            <div class="absolute top-0 inset-x-0 max-w-[82rem] w-full mx-auto flex items-start justify-end">
                <img class="h-auto" src="<?php devcon_msummit2024_get_asset_url('dots_right.png') ?>" />
            </div>
        </div>

        <div class="relative container flex flex-col">
            <div class="absolute top-0 inset-x-0 h-full flex items-end">
                <img src="<?php devcon_msummit2024_get_asset_url('dots_left.png') ?>" />
            </div>

            <div class="relative flex flex-wrap items-stretch pt-8 -mx-4">
			    <?php foreach ($posts as $post) { ?>
                    <div class="w-full md:w-1/3 p-4">
                        <?php get_template_part('template-parts/blog/article-card', args: ['post' => $post]); ?>
                    </div>
			    <?php } ?>
            </div>

            <a href="<?php echo get_post_type_archive_link('post') ?>" class="relative btn btn-primary is-outline mt-8 self-center">More Articles</a>
        </div>
    </div>
</div>

