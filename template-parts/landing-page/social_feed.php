<?php
/* @var $args array */

$args = wp_parse_args($args, [
    'feed_button_link' => devcon_msummit2024_get_theme_mod('feed_button_link', '#'),
    'feed_button_label' => devcon_msummit2024_get_theme_mod('feed_button_text', 'View More')
]);

[$sectionTitle, $sectionDescription] = devcon_msummit2024_render_section('social_feed');
$posts = [];
$curator_feed_id = devcon_msummit2024_get_theme_mod('curator_feed_id', '');

if (!empty($curator_feed_id)) {
	$curator_feed_response = wp_remote_get('https://api.curator.io/v1/feeds/'.$curator_feed_id.'/posts?limit=6');
	$raw_curator_feed_body = wp_remote_retrieve_body($curator_feed_response);
	$curator_feed = json_decode($raw_curator_feed_body, true);

	if (isset($curator_feed['posts'])) {
		$posts = array_map(function($entry) {
			return [
//            'author' => $entry['user_screen_name'],
				'author' => 'From Instagram',
				'image' => $entry['image'],
				'caption' => $entry['text'],
				'url' => $entry['url'],
				'date' => date_format(date_create($entry['source_created_at']), 'd M Y')
			];
		}, $curator_feed['posts']);
	}
}
?>

<section class="py-24 relative">
	<!-- Show full version of background image for larger screens -->
	<div style="background-image: url(<?php devcon_msummit2024_get_asset_url('overview_bg.png') ?>)"
	     class="hidden 2xl:block absolute top-0 inset-x-0 bg-no-repeat bg-contain bg-left-bottom h-full w-full"></div>

	<!-- Show "half" version for mobile devices -->
	<div style="background-image: url(<?php devcon_msummit2024_get_asset_url('overview_bg_half.png') ?>)"
	     class="2xl:hidden absolute top-0 inset-x-0 bg-no-repeat bg-cover md:bg-[length:100%] bg-left-bottom h-full w-full"></div>

	<div class="relative pb-12">
		<div class="max-w-3xl mx-auto w-full relative section-heading">
			<h2><?php echo $sectionTitle ?></h2>
			<p><?php echo $sectionDescription ?></p>
		</div>

		<div class="absolute top-0 inset-x-0 max-w-[82rem] w-full mx-auto flex items-start justify-end mt-[12rem]">
			<img class="h-auto" src="<?php devcon_msummit2024_get_asset_url('dots_right.png') ?>" />
		</div>
	</div>

	<div class="absolute bottom-[3rem] inset-x-0 max-w-[82rem] w-full mx-auto flex items-start justify-start">
		<img class="h-auto" src="<?php devcon_msummit2024_get_asset_url('dots_left.png') ?>" />
	</div>

	<!-- tweets in pinterest layout -->
	<div class="relative max-w-7xl mx-auto w-full px-2 flex flex-col">
		<div class="flex flex-row justify-center gap-6">
			<?php foreach ($posts as $post) { ?>
				<a href="<?php echo $post['url'] ?>" class="w-1/3 group hover:shadow-lg hover:scale-105 transition-all block break-inside-avoid bg-white text-gray-900 shadow rounded-xl p-6 space-y-4">
					<div class="flex justify-between items-start">
						<div class="space-y-0.5 flex flex-col text-sm">
							<span class="group-hover:text-[#110125] font-bold"><?php echo $post['author'] ?></span>
							<span class="text-sm text-slate-500"><?php echo $post['date'] ?></span>
						</div>

                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 256 256">
                            <path fill="#0A0A08" d="M128 23.064c34.177 0 38.225.13 51.722.745c12.48.57 19.258 2.655 23.769 4.408c5.974 2.322 10.238 5.096 14.717 9.575c4.48 4.479 7.253 8.743 9.575 14.717c1.753 4.511 3.838 11.289 4.408 23.768c.615 13.498.745 17.546.745 51.723c0 34.178-.13 38.226-.745 51.723c-.57 12.48-2.655 19.257-4.408 23.768c-2.322 5.974-5.096 10.239-9.575 14.718c-4.479 4.479-8.743 7.253-14.717 9.574c-4.511 1.753-11.289 3.839-23.769 4.408c-13.495.616-17.543.746-51.722.746c-34.18 0-38.228-.13-51.723-.746c-12.48-.57-19.257-2.655-23.768-4.408c-5.974-2.321-10.239-5.095-14.718-9.574c-4.479-4.48-7.253-8.744-9.574-14.718c-1.753-4.51-3.839-11.288-4.408-23.768c-.616-13.497-.746-17.545-.746-51.723c0-34.177.13-38.225.746-51.722c.57-12.48 2.655-19.258 4.408-23.769c2.321-5.974 5.095-10.238 9.574-14.717c4.48-4.48 8.744-7.253 14.718-9.575c4.51-1.753 11.288-3.838 23.768-4.408c13.497-.615 17.545-.745 51.723-.745M128 0C93.237 0 88.878.147 75.226.77c-13.625.622-22.93 2.786-31.071 5.95c-8.418 3.271-15.556 7.648-22.672 14.764C14.367 28.6 9.991 35.738 6.72 44.155C3.555 52.297 1.392 61.602.77 75.226C.147 88.878 0 93.237 0 128c0 34.763.147 39.122.77 52.774c.622 13.625 2.785 22.93 5.95 31.071c3.27 8.417 7.647 15.556 14.763 22.672c7.116 7.116 14.254 11.492 22.672 14.763c8.142 3.165 17.446 5.328 31.07 5.95c13.653.623 18.012.77 52.775.77s39.122-.147 52.774-.77c13.624-.622 22.929-2.785 31.07-5.95c8.418-3.27 15.556-7.647 22.672-14.763c7.116-7.116 11.493-14.254 14.764-22.672c3.164-8.142 5.328-17.446 5.95-31.07c.623-13.653.77-18.012.77-52.775s-.147-39.122-.77-52.774c-.622-13.624-2.786-22.929-5.95-31.07c-3.271-8.418-7.648-15.556-14.764-22.672C227.4 14.368 220.262 9.99 211.845 6.72c-8.142-3.164-17.447-5.328-31.071-5.95C167.122.147 162.763 0 128 0m0 62.27c-36.302 0-65.73 29.43-65.73 65.73c0 36.302 29.428 65.73 65.73 65.73c36.301 0 65.73-29.428 65.73-65.73c0-36.301-29.429-65.73-65.73-65.73m0 108.397c-23.564 0-42.667-19.103-42.667-42.667S104.436 85.333 128 85.333s42.667 19.103 42.667 42.667s-19.103 42.667-42.667 42.667m83.686-110.994c0 8.484-6.876 15.36-15.36 15.36c-8.483 0-15.36-6.876-15.36-15.36c0-8.483 6.877-15.36 15.36-15.36c8.484 0 15.36 6.877 15.36 15.36"/>
                        </svg>
					</div>

					<?php if (isset($post['image'])) { ?>
						<img src="<?php echo $post['image'] ?>" class="w-full h-auto rounded-lg" />
					<?php } ?>

					<div class="text-sm">
						<p class="line-clamp-4 text-ellipsis"><?php echo $post['caption'] ?></p>
					</div>
				</a>
			<?php } ?>
		</div>

        <?php if ($args['feed_button_link'] && $args['feed_button_label']) { ?>
            <a href="<?php $args['feed_button_link'] ?>" class="btn btn-primary self-center mt-12 block w-auto text-center">
                <?php echo $args['feed_button_label'] ?>
            </a>
        <?php } ?>
	</div>
</section>