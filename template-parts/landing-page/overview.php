<?php
[$sectionTitle, $sectionDescription] = devcon_msummit2024_render_section('overview');
$activities = devcon_msummit2024_get_theme_mod('overview_activities', []);
?>

<section class="relative py-24 px-0.5">
	<!-- Show full version of background image for larger screens -->
	<div style="background-image: url(<?php devcon_msummit2024_get_asset_url('overview_bg.png') ?>)"
	     class="hidden 2xl:block absolute top-0 inset-x-0 bg-no-repeat bg-contain bg-left-bottom h-full w-full"></div>

	<!-- Show "half" version for mobile devices -->
	<div style="background-image: url(<?php devcon_msummit2024_get_asset_url('overview_bg_half.png') ?>)"
	     class="2xl:hidden absolute top-0 inset-x-0 bg-no-repeat bg-cover md:bg-[length:100%] bg-left-bottom h-full w-full"></div>

	<div class="relative container !px-0">
		<div class="space-y-8">
			<div class="section-heading">
				<h2 class="w-full lg:w-3/4"><?php echo $sectionTitle ?></h2>
				<p><?php echo $sectionDescription ?></p>
			</div>

			<div class="flex flex-wrap">
				<?php foreach ($activities as $activity) { ?>
					<div class="w-1/2 lg:w-1/4 p-4">
						<div class="flex flex-col rounded-lg bg-[#180646] shadow-md">
							<img src="<?php echo $activity['image'] ?>" class="rounded-t-lg" alt="<?php echo $activity['name'] ?>">
							<div class="bg-gradient-to-t from-[#180646] from-[48%] to-transparent rounded-b-lg -mt-48 pt-48 px-6 pb-6">
								<h3 class="text-xl font-extrabold"><?php echo $activity['name'] ?></h3>
								<p class="text-sm mt-4"><?php echo $activity['description'] ?></p>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>
