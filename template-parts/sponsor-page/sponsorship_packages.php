<?php
/** @var $args array */

[$sectionTitle, $sectionDescription] = devcon_msummit2024_render_section('sponsorship_packages', 'sponsors_page');
$sponsorship_packages = devcon_msummit2024_get_theme_mod('sponsorship_packages', []);
$sponsorship_cta_link = devcon_msummit2024_get_theme_mod('sponsorship_cta_link', '#');

$args = wp_parse_args($args, [
    'header' => true,
    'container_width_class' => 'max-w-[95rem] mx-auto w-full',
    'container_padding' => 'px-2'
]);
?>

<section class="py-24">
	<?php if ($args['header']) { ?>
	<div class="relative pb-12">
		<div class="max-w-3xl mx-auto w-full relative section-heading is-reverse">
			<h2><?php echo $sectionTitle ?></h2>
			<p><?php echo $sectionDescription ?></p>
		</div>

        <div class="max-w-[82rem] w-full mx-auto absolute top-0 inset-x-0 flex items-start justify-between mt-[6.7rem]">
            <img class="mt-[4rem]" src="<?php devcon_msummit2024_get_asset_url('dots_left.png') ?>" />
            <img class="h-auto" src="<?php devcon_msummit2024_get_asset_url('dots_right.png') ?>" />
        </div>
	</div>
	<?php } ?>

	<div class="<?php echo $args['container_width_class'] ?> <?php echo $args['container_padding'] ?> flex flex-wrap items-stretch justify-center">
		<?php foreach ($sponsorship_packages as $package) { ?>
            <?php if (isset($package['show']) && !$package['show']) continue; ?>

			<div class="w-full md:w-1/2 lg:w-1/3 p-4">
				<div class="transition-transform scale-100 hover:scale-110 h-full bg-gradient-to-b from-[rgba(255,221,0,1)] via-[rgba(113,180,6,0.7813)] to-transparent p-0.5 rounded-2xl">
					<div class="flex flex-col rounded-2xl bg-[#2F1647] px-8 pt-12 pb-8 h-full">
						<div class="flex flex-col items-start space-y-4">
							<img src="<?php echo $package['icon'] ?>" alt="<?php echo $package['title'] ?>" class="h-16 w-auto">

							<div class="flex flex-wrap items-center">
								<h3 class="text-4xl font-extrabold uppercase">
									<?php echo $package['title'] ?>
								</h3>

								<div class="p-1">
									<?php if ($package['slots_left'] > 0) { ?>
										<span class="border border-[#A8E54E] text-[#A8E54E] rounded-full px-3 py-1 text-xs">
                                            <?php echo $package['slots_left'] ?> <?php echo $package['slots_left'] > 1 ? "Slots" : "Slot" ?> Left!
                                        </span>
									<?php } else { ?>
										<span class="border border-[#FF823F] text-[#FF823F] rounded-full px-3 py-1 text-xs">
                                            Sold Out
                                        </span>
									<?php } ?>
								</div>
							</div>
						</div>

						<div class="h-full flex flex-col justify-between pt-4">
							<?php $final_sponsorship_link = str_replace("[title]", $package['title'], $sponsorship_cta_link); ?>

                            <p class="text-sm text-white/90"><?php echo $package['description'] ?></p>
                            <a href="<?php echo esc_url($final_sponsorship_link); ?>" target="_blank" class="btn btn-white w-full text-center block mt-4">Order Now</a>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>
</section>
