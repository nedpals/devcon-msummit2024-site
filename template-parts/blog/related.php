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
                        <a href="<?php the_permalink($post); ?>"
                           rel="bookmark norewrite"
                           title="<?php the_title_attribute(['post' => $post]); ?>"
                           class="flex flex-col h-full shadow-lg transition-transform scale-100 hover:scale-[1.05]">

                            <div class="relative">
							    <?php $category = get_the_category($post->ID) ?>
							    <?php $thumbnail_url = get_the_post_thumbnail_url(); ?>

                                <!-- TODO: add placeholder -->
                                <div class="pb-[calc(9/16*100%)] bg-black rounded-t-xl bg-cover bg-no-repeat"
                                     style="background-image: url(<?php echo $thumbnail_url ?>)">
								    <?php if (!empty($category)) { ?>
                                        <div class="uppercase font-bold relative bg-gradient-to-r from-[hsl(52deg,100%,50%)] to-transparent text-black rounded-t-xl px-6 py-2">
										    <?php echo $category[0]->name ?>
                                        </div>
								    <?php } ?>
                                </div>
                            </div>

                            <div class="h-full rounded-b-xl px-0.5 pb-0.5 bg-gradient-to-b from-transparent to-[hsl(52deg,100%,50%)]">
                                <div class="h-full flex flex-col w-full p-6 rounded-b-xl bg-[#18073F]">
                                    <h3 class="text-xl w-full uppercase font-bold pb-3"><?php echo get_the_title($post); ?></h3>

                                    <div class="pt-4 pb-8 text-sm text-white/70 w-full border-t border-white/20">
									    <?php devcon_msummit2024_posted_on('pr-2 border-r border-white/70', false, $post); ?>
									    <?php devcon_msummit2024_posted_by('pl-2', false, $post); ?>
                                    </div>

                                    <div class="px-4 btn btn-primary mt-auto flex items-center justify-between">
                                        <span>Read More</span>
                                        <svg width="25" height="22" viewBox="0 0 25 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20.5493 12.0582H1.31329C1.0388 12.0582 0.775552 11.943 0.581457 11.7378C0.387362 11.5327 0.27832 11.2545 0.27832 10.9644C0.27832 10.6744 0.387362 10.3962 0.581457 10.191C0.775552 9.98592 1.0388 9.87069 1.31329 9.87069H20.5493L13.0002 1.89507C12.8059 1.68969 12.6967 1.41114 12.6967 1.12069C12.6967 0.830242 12.8059 0.551691 13.0002 0.346313C13.1946 0.140938 13.4581 0.0255585 13.733 0.0255585C14.0078 0.0255585 14.2714 0.140938 14.4657 0.346313L23.7805 10.1901C23.8769 10.2917 23.9533 10.4124 24.0055 10.5452C24.0577 10.6781 24.0846 10.8206 24.0846 10.9644C24.0846 11.1083 24.0577 11.2508 24.0055 11.3836C23.9533 11.5165 23.8769 11.6372 23.7805 11.7388L14.4657 21.5826C14.2714 21.7879 14.0078 21.9033 13.733 21.9033C13.4581 21.9033 13.1946 21.7879 13.0002 21.5826C12.8059 21.3772 12.6967 21.0986 12.6967 20.8082C12.6967 20.5177 12.8059 20.2392 13.0002 20.0338L20.5493 12.0582Z" fill="currentColor"/>
                                        </svg>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>
			    <?php } ?>
            </div>

            <a href="<?php echo get_post_type_archive_link('post') ?>" class="relative btn btn-primary is-outline mt-8 self-center">More Articles</a>
        </div>
    </div>
</div>

