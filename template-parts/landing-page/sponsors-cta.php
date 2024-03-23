<?php
$sponsors = devcon_msummit2024_get_theme_mod('sponsors', []);

// Get tier info for sorting
$packages = devcon_msummit2024_get_theme_mod('sponsorship_packages', []);
$packageTitles = array_map(function ($it) { return $it['title']; }, $packages);

function get_featured_sponsors(array $sponsors, array $pTitles, int $max_featured_sponsors = 4): array {
	// Exclude sponsors that are supporters and who don't have a logo
	$sponsors = array_filter($sponsors, function ($sponsor) {
		return $sponsor['tier'] !== 'Supporter' && isset($sponsor['logo']);
	});

	if (count($sponsors) === 0) {
		return [[], 0];
	}

    // Sort by tier
	usort($sponsors, function ($a, $b) use ($pTitles) {
		$aIdx = array_search($a['tier'], $pTitles);
		$bIdx = array_search($b['tier'], $pTitles);

		return $aIdx - $bIdx;
	});

	if (count($sponsors) > $max_featured_sponsors) {
		$featured_sponsors = array_slice($sponsors, 0, $max_featured_sponsors);
	} else {
		$featured_sponsors = $sponsors;
	}

	$remainder_sponsors_length = count($sponsors) - $max_featured_sponsors;
    return [$featured_sponsors, $remainder_sponsors_length];
}

function render_cta(string $text = '') {
    $cta_label = devcon_msummit2024_get_theme_mod('sponsorship_page_cta_label', 'Become a Sponsor');
    $cta_link_id = devcon_msummit2024_get_theme_mod('sponsorship_page_cta_link', '#');
    $cta_link = get_permalink($cta_link_id);
    ?>
    <div class="flex flex-col w-full space-y-2 text-center">
        <?php if (!empty($text)) { ?>
            <p><?php echo $text ?></p>
        <?php } ?>
        <a href="<?php echo ($cta_link ? $cta_link : "#") ?>" class="btn btn-primary mx-auto w-3/4 text-center mt-4">
            <?php echo $cta_label ?>
        </a>
    </div>
<?php
}

[$featured_sponsors, $remainder_sponsors_length] = get_featured_sponsors($sponsors, $packageTitles);
[$sectionTitle, $sectionDescription] = devcon_msummit2024_render_section('sponsors-cta');
$is_full_state = count($featured_sponsors) >= 2;
$is_empty_state = !$is_full_state;
?>

<div class="relative py-24 devcon-bg-2">
    <div style="background-image: url(<?php devcon_msummit2024_get_asset_url('circle_bg.png') ?>)"
         class="absolute top-0 inset-x-0 bg-no-repeat bg-cover bg-center h-full w-full"></div>

	<div class="relative <?php echo $is_full_state ? 'container' : 'max-w-4xl mx-auto w-full' ?>">
        <div class="flex flex-col lg:flex-row lg:items-stretch">
            <div class="text-center w-full <?php if ($is_full_state) { ?>lg:text-left lg:w-1/2<?php } ?> space-y-8 pb-12 lg:pb-0 lg:pr-12 flex flex-col justify-center">
                <!-- Load icons of sponsorship tiers instead -->
	            <?php if ($is_empty_state) { ?>
                    <div class="flex items center justify-center gap-6">
                        <div class="flex-1 flex items-center justify-center flex-wrap gap-6">
                            <?php foreach ($packages as $package) { ?>
                                <?php if (!$package['icon']) continue; ?>

                                <div class="flex">
                                    <img src="<?php echo $package['icon'] ?>" alt="<?php echo $package['title'] ?>"
                                         class="w-auto h-auto  m-auto" />
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>

                <h2 class="uppercase <?php echo $is_full_state ? 'text-4xl' : 'text-5xl' ?> font-extrabold tracking-wide w-full"><?php echo $sectionTitle ?></h2>
                <p class="font-light <?php echo $is_full_state ? '' : 'text-xl' ?>"><?php echo $sectionDescription ?></p>

	            <?php if ($is_empty_state) { ?>
                    <?php render_cta() ?>
                <?php } ?>
            </div>

	        <?php if ($is_full_state) { ?>
            <div class="w-full lg:w-1/2 pt-12 lg:pt-0 lg:pl-12 space-y-8 text-center border-t lg:border-t-0 lg:border-l border-white/20">
                <h3 class="text-center text-lg font-semibold">Featured sponsors</h3>

                <div class="flex items-center gap-3">
                    <div class="flex-1 flex items-center justify-center flex-wrap gap-6">
                        <?php foreach ($featured_sponsors as $sponsor) { ?>
                            <div class="flex">
                                <img src="<?php echo $sponsor['logo'] ?>" alt="<?php echo $sponsor['name'] ?>"
                                     class="w-full h-full max-w-[13rem] max-h-[7rem] m-auto" />
                            </div>
                        <?php } ?>
                    </div>

                    <?php if ($remainder_sponsors_length > 0) { ?>
                        <span class="hidden bg-white/10 rounded-full lg:inline-flex w-24 h-24 items-center text-2xl justify-center">
                            +<?php echo $remainder_sponsors_length ?>
                        </span>
                    <?php } ?>
                </div>

                <?php render_cta('Over '.count($sponsors).' companies have sponsored this event') ?>
            </div>
	        <?php } ?>
        </div>
    </div>
</div>
