<?php
[$sectionTitle, $sectionDescription] = devcon_msummit2024_render_section('overview');
$activities = devcon_msummit2024_get_theme_mod('overview_activities', []);
?>

<section class="relative px-0.5">
	<!-- Show full version of background image for larger screens -->
	<div style="background-image: url(<?php devcon_msummit2024_get_asset_url('overview_bg.png') ?>)"
	     class="hidden 2xl:block absolute top-0 inset-x-0 bg-no-repeat bg-contain bg-left-bottom h-full w-full"></div>

	<!-- Show "half" version for mobile devices -->
	<div style="background-image: url(<?php devcon_msummit2024_get_asset_url('overview_bg_half.png') ?>)"
	     class="2xl:hidden absolute top-0 inset-x-0 bg-no-repeat bg-cover md:bg-[length:100%] bg-left-bottom h-full w-full"></div>

	<div class="relative container !px-0 py-24 border-b border-white/25">
		<div class="space-y-8">
			<div class="section-heading">
				<h2 class="w-full lg:w-3/4"><?php echo $sectionTitle ?></h2>
				<p><?php echo $sectionDescription ?></p>
			</div>

			<div class="flex flex-wrap">
				<?php foreach ($activities as $activity) { ?>
					<div class="overview w-1/2 lg:w-1/4 px-4 pb-4 pt-20">
						<div class="flex flex-col items-center text-center shadow-md bg-white/5 px-6 py-4 rounded-2xl h-full">
                            <div class="flex items-center justify-center w-[8rem] h-[8rem] overview-icon rounded-full px-8 -mt-20 bg-gradient-to-b from-[rgba(255,221,0,0.371)] via-[rgba(225,195,0,0)] to-transparent">
                                <img src="<?php echo $activity['image'] ?>" class="h-auto w-[60px]" alt="<?php echo $activity['name'] ?>">
                            </div>
							<div class="pt-8">
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
