<?php
[$sectionTitle, $sectionDescription] = devcon_msummit2024_render_section('agenda');
?>

<section class="py-24">
	<div class="relative pb-12">
		<div class="max-w-3xl mx-auto w-full section-heading is-reverse">
			<h2><?php echo $sectionTitle ?></h2>
			<p><?php echo $sectionDescription ?></p>
		</div>

		<div class="absolute top-0 inset-x-0 max-w-[82rem] w-full mx-auto flex items-start justify-between mt-[6.7rem]">
			<img class="mt-[4rem]" src="<?php devcon_msummit2024_get_asset_url('dots_left.png') ?>" />
			<img class="h-auto" src="<?php devcon_msummit2024_get_asset_url('dots_right.png') ?>" />
		</div>
	</div>

    <div class="flex flex-col items-center container">
        <div class="flex space-x-8 pb-24">
            <button class="h-12 w-12 p-0 flex items-center justify-center rounded-full text-white bg-white/25 border border-white/30 hover:border-white">
                <svg width="12" height="17" viewBox="0 0 12 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.1645 0.96039L1.22909 6.89581C1.01664 7.10782 0.848093 7.35964 0.733094 7.63688C0.618095 7.91411 0.558901 8.2113 0.558901 8.51143C0.558901 8.81157 0.618095 9.10876 0.733094 9.38599C0.848093 9.66322 1.01664 9.91505 1.22909 10.1271L7.1645 16.0625C8.60825 17.4833 11.0833 16.475 11.0833 14.4354L11.0833 2.58747C11.0833 0.524973 8.60825 -0.483361 7.1645 0.96039Z" fill="currentColor"/>
                </svg>
            </button>

            <div class="flex items-center bg-white/25 border border-white/30 rounded-lg px-20 py-2 font-bold">
                <span>Day 1</span>
            </div>

            <button class="h-12 w-12 p-0 flex items-center justify-center rounded-full text-white bg-white/25 border border-white/30 hover:border-white">
                <svg width="12" height="17" viewBox="0 0 12 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.8355 16.0396L10.7709 10.1042C10.9834 9.89218 11.1519 9.64035 11.2669 9.36312C11.3819 9.08589 11.4411 8.7887 11.4411 8.48857C11.4411 8.18843 11.3819 7.89124 11.2669 7.61401C11.1519 7.33678 10.9834 7.08495 10.7709 6.87294L4.8355 0.937526C3.39175 -0.483308 0.916748 0.525026 0.916748 2.56461L0.916748 14.4125C0.916748 16.475 3.39175 17.4834 4.8355 16.0396Z" fill="currentColor"/>
                </svg>
            </button>
        </div>

        <div class="border border-white/25 rounded-lg overflow-auto w-full">
            <table class="border-collapse mb-0">
                <thead>
                <tr class="bg-white/20">
                    <th class="border-b rounded-tl-md border-r border-white/25 text-left px-6 py-4">Time</th>
                    <th class="border-b rounded-tr-md border-white/25 text-left px-6 py-4">Session</th>
                </tr>
                </thead>

                <tbody class="bg-black/20">
				<?php $activities = [
					'Welcome and Opening Remarks',
					'Keynote Speaker: Embracing Tech for All',
					'Panel Discussion: The Future of Tech in Mindanao',
					'Lunch Break',
					'Workshop: Introduction to Web Development',
					'Workshop: Data Science Fundamentals',
					'Breakout Sessions: Exploring AI and Machine Learning',
					'Closing Remarks'
				] ?>
				<?php for ( $i = 0; $i < count( $activities ); $i ++ ) { ?>
                    <tr>
                        <td class="border-r border-b border-white/25 px-6 py-4">9:00 AM - 9:30 AM</td>
                        <td class="border-l border-b border-white/25 px-6 py-4"><?php echo $activities[ $i ] ?></td>
                    </tr>
				<?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
