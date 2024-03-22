<?php

use Brick\Money\Money;

$numFmt = new NumberFormatter('en_US', NumberFormatter::CURRENCY);
$numFmt->setAttribute(\NumberFormatter::MIN_FRACTION_DIGITS, 0);

[$sectionTitle, $sectionDescription] = devcon_msummit2024_render_section('tickets');

$ticketTiersHeaderClasses = [
    'bg-gradient-to-r from-[rgba(168,229,78,0.5)] to-transparent',
    'bg-gradient-to-r from-[rgba(255,221,0,0.5)] to-transparent',
    'bg-gradient-to-r from-[rgba(255,130,63,0.5)] to-transparent'
];

$ticketTiers = devcon_msummit2024_get_theme_mod('tickets', []);

?>

<section class="relative py-24">
	<!-- Show full version of background image for larger screens -->
	<div style="background-image: url(<?php devcon_msummit2024_get_asset_url('tickets_bg.png') ?>)"
	     class="hidden 2xl:block absolute top-0 inset-x-0 bg-no-repeat bg-contain bg-right-bottom h-full w-full"></div>

	<!-- Show "half" version for mobile devices -->
	<div style="background-image: url(<?php devcon_msummit2024_get_asset_url('tickets_bg_half.png') ?>)"
	     class="2xl:hidden absolute top-0 inset-x-0 bg-no-repeat bg-cover md:bg-[length:100%] bg-right-bottom h-full w-full"></div>

	<div class="relative container space-y-8">
		<div class="section-heading">
			<h2><?php echo $sectionTitle ?></h2>
			<p><?php echo $sectionDescription ?></p>
		</div>

		<div class="flex flex-wrap items-center -mx-4">
            <?php foreach ($ticketTiers as $tierIdx => $tier) { ?>
	            <?php $price = Money::of($tier['price'], 'PHP') ?>
                <?php if ($tier['discount']) { ?>
                    <?php $discounted = $price->multipliedBy($tier['discount']); ?>
                    <?php $price = $price->minus($discounted); ?>
                <?php } ?>

			<div class="w-full flex-none lg:w-auto lg:flex-1 p-4">
				<div class="rounded-2xl bg-white/10 border border-white/20">
                    <?php $headerClass = implode(' ', [$tier['header_class'], $ticketTiersHeaderClasses[$tierIdx]]); ?>

					<div class="flex items-center justify-center space-x-2 rounded-t-xl uppercase font-extrabold py-2 <?php echo $headerClass; ?> bg-opacity-50">
						<p class="text-xl tracking-wide"><?php echo $tier['label'] ?></p>

                        <?php if ($tier['discount']) { ?>
                            <span class="block text-lg tracking-wide rounded-full border border-white px-6 py-0.5">
                                <?php echo $tier['discount'] * 100 ?>% off
                            </span>
                        <?php } ?>
					</div>

					<div class="p-6">
						<div class="space-y-4">
							<p class="font-bold">What you'll get:</p>

							<div class="rounded-t-lg rounded-b-lg flex flex-col border border-white/20 divide-y divide-white/20">
								<?php $perks = explode("\n", $tier['perks']); ?>

                                <?php foreach ($perks as $perk) { ?>
									<div class="flex items-center space-x-4 py-2.5 px-2">
										<svg width="23" height="24" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<circle cx="11.5" cy="12" r="11" stroke="white"/>
											<path d="M9.7367 16.6191L5.3667 12.2491L6.4592 11.1566L9.7367 14.4341L16.7709 7.3999L17.8634 8.4924L9.7367 16.6191Z" fill="white"/>
										</svg>

										<p class="flex-1 font-light text-sm"><?php echo $perk ?></p>
									</div>
								<?php } ?>
							</div>
						</div>

                        <a href="<?php echo $tier['link'] ?>" target="_blank" class="block w-full text-center bg-[#FFDD00] rounded-lg text-black uppercase font-bold tracking-wide border-0 py-3 text-lg mt-12">
                            Get It - <?php echo $price->formatWith($numFmt) ?>
                        </a>
					</div>
				</div>
			</div>
            <?php } ?>
		</div>
	</div>
</section>