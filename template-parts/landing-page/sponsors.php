<section class="relative pt-24 pb-36 -mb-24">
	<div style="background-image: url(<?php devcon_msummit2024_get_asset_url('sponsorship_bg.png') ?>)"
	     class="absolute top-0 inset-x-0 bg-no-repeat bg-cover md:bg-[length:100%] bg-left-bottom h-full w-full"></div>

	<div class="relative container pb-16">
		<?php [$sectionTitle] = devcon_msummit2024_render_section('Sponsors List'); ?>

		<div class="flex flex-col items-center text-center space-y-4">
			<h2 class="uppercase text-6xl font-extrabold"><?php echo $sectionTitle ?></h2>
		</div>
	</div>

	<!--       TODO: categorize sponsors -->
	<?php $sponsors = devcon_msummit2024_get_theme_mod('sponsors', []); ?>

	<div class="relative max-w-7xl mx-auto w-full px-2">
		<div class="flex flex-col bg-gradient-to-b from-[rgb(255,221,0)] via-[rgb(205,118,55)] to-transparent p-0.5 rounded-2xl">
			<div class="z-[1] bg-[rgb(255,221,0)] text-[#110125] font-bold text-2xl uppercase rounded-xl px-6 py-2 mx-auto -mt-6">Sponsored by</div>
			<div class="-mt-6 bg-[#110125] px-20 py-12 flex flex-wrap items-center justify-center rounded-2xl">
				<?php foreach ($sponsors as $sponsor) { ?>
					<a href="<?php echo $sponsor['url'] ?>" class="w-1/4 p-6 flex justify-center items-center">
						<img src="<?php echo $sponsor['logo'] ?>" alt="<?php echo $sponsor['name'] ?>" class="w-auto h-auto" />
					</a>
				<?php } ?>
			</div>
		</div>
	</div>
</section>