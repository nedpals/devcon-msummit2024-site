<?php

use Brick\Money\Money;
use Brick\Money\Context\CustomContext;

$numFmt = new NumberFormatter('en_US', NumberFormatter::CURRENCY);
$numFmt->setAttribute(\NumberFormatter::MIN_FRACTION_DIGITS, 0);

[$sectionTitle, $sectionDescription] = devcon_msummit2024_render_section('Tickets');

$ticketTiers = [
	[
		'label' => '1-day access',
		'header_class' => 'bg-gradient-to-r from-[rgba(168,229,78,0.5)] to-transparent',
		'price' => Money::of(2500, 'PHP'),
		'discount' => 0.3,
		'perks' => [
			'Access to all sessions scheduled for Day 1 (June 29, 2024)',
			'Exclusive merch',
			'App access to event details',
			'Access to speakers',
			'Networking opportunities with industry leaders.'
		]
	],
	[
		'label' => 'VIP Access',
		'header_class' => 'bg-gradient-to-r from-[rgba(255,221,0,0.5)] to-transparent',
		'price' => Money::of(10000, 'PHP'),
		'perks' => [
			'Access to all sessions scheduled for 2 Days (June 29 & 30, 2024)',
			'Exclusive merch, raffle entry and free lunch for 2 days!',
			'Networking opportunities with industry leaders for meaningful connections',
			'Engage with our distinguished speakers for insights and inspiration',
			'Access to speakers',
			'Backstage, VIP Lounge, and After-Party Access',
			'Private Lounge: Enjoy a comfortable and exclusive space to enjoy the presentations'
		]
	],
	[
		'label' => '2-day access',
		'header_class' => 'bg-gradient-to-r from-[rgba(255,130,63,0.5)] to-transparent',
		'price' => Money::of(3500, 'PHP'),
		'discount' => 0.3,
		'perks' => [
			'Access to all sessions scheduled for 2 Days (June 29 & 30, 2024)',
			'Exclusive merch',
			'App access to event details',
			'Access to speakers',
			'Networking opportunities with industry leaders.'
		]
	]
];

?>

<section class="relative py-24">
	<!-- Show full version of background image for larger screens -->
	<div style="background-image: url(<?php devcon_msummit2024_get_asset_url('tickets_bg.png') ?>)"
	     class="hidden 2xl:block absolute top-0 inset-x-0 bg-no-repeat bg-contain bg-right-bottom h-full w-full"></div>

	<!-- Show "half" version for mobile devices -->
	<div style="background-image: url(<?php devcon_msummit2024_get_asset_url('tickets_bg_half.png') ?>)"
	     class="2xl:hidden absolute top-0 inset-x-0 bg-no-repeat bg-cover md:bg-[length:100%] bg-right-bottom h-full w-full"></div>

	<div class="container space-y-8">
		<div class="section-heading">
			<h2><?php echo $sectionTitle ?></h2>
			<p><?php echo $sectionDescription ?></p>
		</div>

		<div class="flex items-center -mx-4">
            <?php foreach ($ticketTiers as $tier) { ?>
			<div class="flex-1 p-4">
				<div class="rounded-2xl bg-white/10 border border-white/20">
					<div class="flex items-center justify-center space-x-2 rounded-t-xl uppercase font-extrabold py-2 <?php echo $tier['header_class'] ?> bg-opacity-50">
						<p class="text-xl tracking-wide"><?php echo $tier['label'] ?></p>

                        <?php if (array_key_exists('discount', $tier)) { ?>
                            <span class="block text-lg tracking-wide rounded-full border border-white px-6 py-0.5">
                                <?php echo $ticketTiers[0]['discount'] * 100 ?>% off
                            </span>
                        <?php } ?>
					</div>

					<div class="px-4 pb-4">
						<div class="py-6 flex justify-center items-center space-x-4 font-bold">
							<?php if (array_key_exists('discount', $tier)) { ?>
                                <?php $discounted = $tier['price']->multipliedBy($tier['discount']); ?>
                                <?php $discountedPrice = $tier['price']->minus($discounted); ?>

                                <p class="text-2xl text-white/60 line-through">
									<?php echo $tier['price']->formatWith($numFmt) ?>
                                </p>

                                <p class="text-5xl">
                                    <?php echo $discountedPrice->formatWith($numFmt) ?>
                                </p>
                            <?php } else { ?>
                                <p class="text-5xl">
									<?php echo $tier['price']->formatWith($numFmt) ?>
                                </p>
                            <?php } ?>
						</div>

						<div class="space-y-4">
							<p class="font-bold">What you'll get:</p>

							<div class="rounded-t-lg rounded-b-lg flex flex-col border border-white/20 divide-y divide-white/20">
								<?php foreach ($tier['perks'] as $perk) { ?>
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

						<button class="w-full text-center bg-[#FFDD00] rounded-lg text-black uppercase font-bold tracking-wide border-0 py-3 text-sm mt-12">
                            Order Now
                        </button>
					</div>
				</div>
			</div>
            <?php } ?>
		</div>
	</div>
</section>