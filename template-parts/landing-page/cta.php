<?php
[$sectionTitle, $sectionDescription] = devcon_msummit2024_render_section('cta');
?>
<div class="bg-center bg-cover bg-no-repeat"
	style="background-image: url(<?php devcon_msummit2024_get_asset_url('bg_cta_dimmed.webp') ?>)">
	<div class="container py-48">
		<div class="section-heading">
			<h2><?php echo $sectionTitle ?></h2>
			<p class="text-2xl"><?php echo $sectionDescription ?></p>
		</div>

		<div class="flex flex-wrap justify-center items-center space-y-4 lg:space-y-0 lg:space-x-4 mt-8">
			<a href="<?php echo devcon_msummit2024_get_theme_mod('cta_button_url', '#') ?>"
				class="text-center bg-[#FFDD00] rounded-lg text-black text-lg uppercase font-bold tracking-wide border-0 py-3 px-8">
				<?php echo devcon_msummit2024_get_theme_mod('cta_text', 'Get Your Tickets Now') ?>
			</a>
		</div>
	</div>
</div>