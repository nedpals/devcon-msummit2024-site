<?php
[$sectionTitle, $sectionDescription] = devcon_msummit2024_render_section('Featured Speakers');
$speakers = devcon_msummit2024_get_theme_mod('speakers', []);
?>
<section class="py-24 relative">
	<div style="background-image: url(<?php devcon_msummit2024_get_asset_url('featured_speakers_bg_half.png') ?>)"
	     class="absolute top-0 inset-x-0 bg-no-repeat bg-cover bg-left h-full w-full"></div>

	<div class="relative container space-y-4">
		<div class="section-heading is-reverse">
			<h2><?php echo $sectionTitle ?></h2>
			<p><?php echo $sectionDescription ?></p>
		</div>

		<div class="flex items-center space-x-2">
			<button class="mt-24 h-12 w-12 p-0 flex items-center justify-center rounded-full text-white bg-white/25 border border-white/30 hover:border-white">
				<svg width="12" height="17" viewBox="0 0 12 17" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M7.1645 0.96039L1.22909 6.89581C1.01664 7.10782 0.848093 7.35964 0.733094 7.63688C0.618095 7.91411 0.558901 8.2113 0.558901 8.51143C0.558901 8.81157 0.618095 9.10876 0.733094 9.38599C0.848093 9.66322 1.01664 9.91505 1.22909 10.1271L7.1645 16.0625C8.60825 17.4833 11.0833 16.475 11.0833 14.4354L11.0833 2.58747C11.0833 0.524973 8.60825 -0.483361 7.1645 0.96039Z" fill="currentColor"/>
				</svg>
			</button>

			<div class="speakers-list flex-1 flex items-center pt-8">
				<?php foreach ($speakers as $speaker) { ?>
					<div class="px-2 pb-2 pt-32">
						<div class="flex flex-col items-center border border-white/20 bg-white/10 rounded-2xl">
							<!-- image goes here -->
							<div
								class="flex items-center justify-center bg-contain bg-center bg-no-repeat h-96 w-full max-w-[24rem] -mt-32"
								style="background-image: url(<?php devcon_msummit2024_get_asset_url('speaker_bg.png'); ?>)">
								<img src="<?php echo $speaker['photo'] ?>"
								     class="h-64 w-auto object-cover"
								     alt="<?php echo $speaker['name'] ?>">
							</div>

							<div class="flex flex-col items-center text-center space-y-12 px-6 pb-10 -mt-12">
								<div class="space-y-2">
									<h3 class="uppercase text-2xl tracking-wide font-bold"><?php echo $speaker['name'] ?></h3>
									<p class="uppercase font-semibold"><?php echo $speaker['position'] ?></p>
								</div>

								<p class="text-light text-sm"><?php echo $speaker['bio'] ?></p>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>

			<button class="mt-24 h-12 w-12 p-0 flex items-center justify-center rounded-full text-white bg-white/25 border border-white/30 hover:border-white">
				<svg width="12" height="17" viewBox="0 0 12 17" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M4.8355 16.0396L10.7709 10.1042C10.9834 9.89218 11.1519 9.64035 11.2669 9.36312C11.3819 9.08589 11.4411 8.7887 11.4411 8.48857C11.4411 8.18843 11.3819 7.89124 11.2669 7.61401C11.1519 7.33678 10.9834 7.08495 10.7709 6.87294L4.8355 0.937526C3.39175 -0.483308 0.916748 0.525026 0.916748 2.56461L0.916748 14.4125C0.916748 16.475 3.39175 17.4834 4.8355 16.0396Z" fill="currentColor"/>
				</svg>
			</button>
		</div>
	</div>
</section>
