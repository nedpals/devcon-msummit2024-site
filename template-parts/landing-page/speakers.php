<?php
[$sectionTitle, $sectionDescription] = devcon_msummit2024_render_section('speakers');
$speakers = devcon_msummit2024_get_theme_mod('speakers', []);
?>
<section class="py-24 relative">
	<div style="background-image: url(<?php devcon_msummit2024_get_asset_url('featured_speakers_bg_half.png') ?>)"
	     class="absolute top-0 inset-x-0 bg-no-repeat bg-cover bg-left h-full w-full"></div>

	<div class="relative container">
		<div class="section-heading is-reverse">
			<h2><?php echo $sectionTitle ?></h2>
			<p><?php echo $sectionDescription ?></p>
		</div>
    </div>

    <div class="relative pt-4">
        <div class="swiper" data-swiper-autoplay="1000">
            <div class="swiper-wrapper speakers-list flex-1 flex items-center pt-8">
		        <?php foreach ($speakers as $speaker) { ?>
                    <div class="swiper-slide max-w-[24rem] px-2 pb-2 pt-32">
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
        </div>
	</div>
</section>
