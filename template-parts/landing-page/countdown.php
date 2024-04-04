<?php
[$sectionTitle, $sectionDescription] = devcon_msummit2024_render_section('countdown');

$countdown_labels = [
    'days' => 'Days',
    'hours' => 'Hours',
    'minutes' => 'Mins',
    'seconds' => 'Secs',
];
?>

<section class="py-24 overflow-x-hidden">
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
		<div class="event-countdown-timer w-full flex flex-wrap flex-row -mx-4">
            <?php foreach ($countdown_labels as $cid => $countdown_label) { ?>
                <div class="w-1/2 lg:w-1/4 p-4">
                    <div class="countdown-<?php echo $cid ?> border border-white/20 bg-white/10 flex flex-col text-center items-center rounded-3xl p-6">
                        <p class="text-6xl font-extrabold">00</p>
                        <p class="text-4xl font-bold uppercase"><?php echo $countdown_label ?></p>
                    </div>
                </div>
            <?php } ?>
		</div>

		<a href="<?php echo devcon_msummit2024_get_theme_mod('cta_button_url') ?>"
           class="btn btn-white w-full md:w-1/3 text-lg text-center  mt-16 self-center">
            Register Now
        </a>
	</div>
</section>

<script>
    window.countdownDate = '<?php echo devcon_msummit2024_get_theme_mod('countdown_date') ?>';
</script>