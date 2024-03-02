<section class="py-24 relative">
	<!-- Show full version of background image for larger screens -->
	<div style="background-image: url(<?php devcon_msummit2024_get_asset_url('overview_bg.png') ?>)"
	     class="hidden 2xl:block absolute top-0 inset-x-0 bg-no-repeat bg-contain bg-left-bottom h-full w-full"></div>

	<!-- Show "half" version for mobile devices -->
	<div style="background-image: url(<?php devcon_msummit2024_get_asset_url('overview_bg_half.png') ?>)"
	     class="2xl:hidden absolute top-0 inset-x-0 bg-no-repeat bg-cover md:bg-[length:100%] bg-left-bottom h-full w-full"></div>

	<div class="relative pb-12">
		<?php [$sectionTitle, $sectionDescription] = devcon_msummit2024_render_section('Social Media Feed'); ?>

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

	<?php $posts = [
		[
			'author' => 'ItsMeCrayCray',
			'image' => devcon_msummit2024_get_asset_url('sample_posts/4.png', true),
			'caption' => 'Felis quam diam senectus arcu pulvinar tellus velit condimentum. <a href="#MindanaoSummit2024">#MindanaoSummit2024</a> Aliquam netus tincidunt ut eget sapien et pellentesque odio. Venenatis turpis nisi ullamcorper nulla amet morbi ut.',
		],
		[
			'author' => 'John Doe',
			'caption' => 'Awesome day with <a href="#">@DEVCONDavao</a> <a href="#">@DEVCONPH</a>! 🥳 Farm-to-table cray actually them forage.<br />Food palo tbh big taxidermy retro trade mug keytar subway. Helvetica bushwick fit chillwave plz lyft retro. Craft vhs man santo beard. Chicharrones. #MindanaoSummit2024',
		],
		[
			'author' => 'ItsMeCrayCray',
			'caption' => 'Awesome day with <a href="#">@DEVCONDavao</a> <a href="#">@DEVCONPH</a>! 🥳 Farm-to-table cray actually them forage.<br />Food palo tbh big taxidermy retro trade mug keytar subway. Helvetica bushwick fit chillwave plz lyft retro. Craft vhs man santo beard. Chicharrones. #MindanaoSummit2024',
		],
		[
			'author' => 'ItsMeCrayCray',
			'image' => devcon_msummit2024_get_asset_url('sample_posts/2.png', true),
			'caption' => 'Jib hogshead avast chandler just. Fleet plate measured fer measured. Run rig ahoy chains just topgallant! <a href="#">@DEVCONDavao</a> 😱😎 <a href="#">#BestDayEver</a> <a href="#">#MindanaoSummit2024</a>',
		],
		[
			'author' => 'ItsMeCrayCray',
			'image' => devcon_msummit2024_get_asset_url('sample_posts/3.png', true),
			'caption' => 'Felis quam diam senectus arcu pulvinar tellus velit condimentum. Farm-to-table cray actually them forage. Food palo tbh big taxidermy retro trade mug keytar subway. Helvetica bushwick fit chillwave plz lyft retro. Craft vhs man santo beard. Chicharrones. <a href="#">#MindanaoSummit2024</a>',
		],
		[
			'author' => 'John Doe',
			'image' => devcon_msummit2024_get_asset_url('sample_posts/1.png', true),
			'caption' => 'Farm-to-table cray actually them forage. Food palo tbh big taxidermy retro trade mug keytar subway. Venenatis turpis nisi ullamcorper nulla amet morbi ut. Helvetica bushwick fit chillwave plz lyft retro. Craft vhs man santo beard. Chicharrones. <a href="#">#MindanaoSummit2024</a>',
		]
	] ?>

	<!-- tweets in pinterest layout -->
	<div class="relative max-w-7xl mx-auto w-full px-2">
		<div class="columns-3 gap-6 space-y-6">
			<?php foreach ($posts as $post) { ?>
				<div class="break-inside-avoid bg-white text-gray-900 shadow rounded-xl p-6 space-y-4">
					<div class="flex justify-between items-start">
						<div class="space-y-0.5 flex flex-col text-sm">
							<span class="font-bold"><?php echo $post['author'] ?></span>
							<span class="text-sm text-slate-500">17 Feb 2023</span>
						</div>

						<img src="<?php devcon_msummit2024_get_asset_url('x-icon.png') ?>" />
					</div>

					<?php if (isset($post['image'])) { ?>
						<img src="<?php echo $post['image'] ?>" class="w-full h-auto rounded-lg" />
					<?php } ?>

					<div class="text-sm">
						<p><?php echo $post['caption'] ?></p>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>