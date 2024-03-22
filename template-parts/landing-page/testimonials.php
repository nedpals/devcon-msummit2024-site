<section class="relative py-24">
	<div style="background-image: url(<?php devcon_msummit2024_get_asset_url('testimonials_bg.png') ?>)"
	     class="absolute top-0 inset-x-0 bg-no-repeat bg-cover bg-left h-full w-full"></div>

	<div class="relative max-w-3xl mx-auto w-full px-2">
		<?php [$sectionTitle, $sectionDescription] = devcon_msummit2024_render_section('testimonials'); ?>

		<div class="section-heading pb-8">
			<h2><?php echo $sectionTitle ?></h2>
			<p><?php echo $sectionDescription ?></p>
		</div>
	</div>

	<?php $testimonials = devcon_msummit2024_get_theme_mod('testimonials', []) ?>

	<div class="overflow-hidden flex">
		<?php foreach ($testimonials as $testimonial) { ?>
			<div class="w-[32rem] testimonial-item">
				<div class="w-[32rem] p-4">
					<div class="rounded-lg bg-white/10 border border-white/20 px-8 py-6">
						<p class="text-lg font-light h-32">"<?php echo $testimonial['quote'] ?>"</p>
						<div class="flex items-center space-x-2 mt-4">
							<div class="flex space-x-2">
								<p class="font-bold"><?php echo $testimonial['name'] ?></p>
								<p class="font-light">
									<?php echo $testimonial['position'] ?>

									<?php if (isset($testimonial['company'])) { ?>
										<span> at <?php echo $testimonial['company'] ?></span>
									<?php } ?>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>

	<div class="overflow-hidden flex">
		<?php foreach ($testimonials as $testimonial) { ?>
			<div class="w-[32rem] testimonial-item-reverse">
				<div class="w-[32rem] p-4">
					<div class="rounded-lg bg-white/10 border border-white/20 px-8 py-6">
						<p class="text-lg font-light h-32">"<?php echo $testimonial['quote'] ?>"</p>
						<div class="flex items-center space-x-2 mt-4">
							<div class="flex space-x-2">
								<p class="font-bold"><?php echo $testimonial['name'] ?></p>
								<p class="font-light">
									<?php echo $testimonial['position'] ?>

									<?php if (isset($testimonial['company'])) { ?>
										<span> at <?php echo $testimonial['company'] ?></span>
									<?php } ?>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>
</section>