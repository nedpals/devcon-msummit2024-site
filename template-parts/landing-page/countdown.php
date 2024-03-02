<?php [$sectionTitle, $sectionDescription] = devcon_msummit2024_render_section('Countdown'); ?>

<section class="py-24">
	<div class="relative pb-12">
		<div class="max-w-3xl mx-auto w-full relative section-heading">
			<h2><?php echo $sectionTitle ?></h2>
			<p><?php echo $sectionDescription ?></p>
		</div>

		<div class="absolute top-0 inset-x-0 max-w-[82rem] w-full mx-auto flex items-start justify-between mt-[4.7rem]">
			<img class="mt-[4rem]" src="<?php devcon_msummit2024_get_asset_url('dots_left.png') ?>" />
			<img class="h-auto" src="<?php devcon_msummit2024_get_asset_url('dots_right.png') ?>" />
		</div>
	</div>

	<div class="container flex flex-col items-center">
		<div class="event-countdown-timer w-full flex flex-row -mx-4">
			<div class="w-1/4 p-4">
				<div class="countdown-days border border-white/20 bg-white/10 flex flex-col text-center items-center rounded-3xl p-6">
					<p class="text-6xl font-extrabold">00</p>
					<p class="text-4xl font-bold uppercase">Days</p>
				</div>
			</div>

			<div class="w-1/4 p-4">
				<div class="countdown-hours border border-white/20 bg-white/10 flex flex-col text-center items-center rounded-3xl p-6">
					<p class="text-6xl font-extrabold">00</p>
					<p class="text-4xl font-bold uppercase">Hours</p>
				</div>
			</div>

			<div class="w-1/4 p-4">
				<div class="countdown-minutes border border-white/20 bg-white/10 flex flex-col text-center items-center rounded-3xl p-6">
					<p class="text-6xl font-extrabold">00</p>
					<p class="text-4xl font-bold uppercase">Mins</p>
				</div>
			</div>

			<div class="w-1/4 p-4">
				<div class="countdown-seconds border border-white/20 bg-white/10 flex flex-col text-center items-center rounded-3xl p-6">
					<p class="text-6xl font-extrabold">00</p>
					<p class="text-4xl font-bold uppercase">Secs</p>
				</div>
			</div>
		</div>

		<button class="w-1/3 text-center bg-white rounded-lg text-black uppercase font-bold tracking-wide border-0 py-3 text-sm mt-16 self-center">Register Now</button>
	</div>
</section>