<?php

/**
 * The home page template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header();
?>

<div class="devcon-default-bg -mt-16">
    <section class="relative pt-16 overflow-x-hidden">
        <!-- Show full wave for large screens -->
        <div style="background-image: url(<?php devcon_msummit2024_get_asset_url('hero_waves.png') ?>);"
            class="absolute top-0 right-0 hidden lg:block left-[63%] 2xl:left-[57%] h-full max-w-[58rem] w-full bg-cover bg-no-repeat bg-[-20%] sm:bg-[-40%] md:[100%] lg:bg-[100%_0%] px-0"></div>

        <!-- Show half wave for mobile devices up to desktop -->
        <div style="background-image: url(<?php devcon_msummit2024_get_asset_url('hero_waves_half.png') ?>);"
             class="absolute top-0 inset-x-0 lg:hidden h-full w-full bg-right bg-no-repeat bg-cover sm:bg-contain px-0"></div>

        <div class="relative container py-32 border-b border-white/25">
            <div class="w-full lg:w-3/4">
                <div class="space-y-10">
                    <img src="<?php devcon_msummit2024_get_asset_url('summit_logo.png') ?>"
                         alt="<?php echo get_bloginfo('name') ?>" />
                    <h1 class="uppercase text-6xl font-extrabold tracking-wide w-full"><?php devcon_msummit2024_render_text('hero_title'); ?></h1>
                    <p class="font-light text-lg"><?php devcon_msummit2024_render_text('hero_content'); ?></p>

                    <div class="flex flex-col items-start lg:flex-row space-y-4 lg:space-y-0 lg:space-x-4 text-sm">
                        <div class="flex space-x-2 border border-white/20 bg-white/10 backdrop-blur-md rounded-lg uppercase tracking-widest px-4 py-3">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.9999 10.5416C10.3921 10.5416 9.80924 10.3002 9.37947 9.87043C8.94969 9.44066 8.70825 8.85777 8.70825 8.24998C8.70825 7.64219 8.94969 7.0593 9.37947 6.62953C9.80924 6.19976 10.3921 5.95831 10.9999 5.95831C11.6077 5.95831 12.1906 6.19976 12.6204 6.62953C13.0501 7.0593 13.2916 7.64219 13.2916 8.24998C13.2916 8.55093 13.2323 8.84893 13.1171 9.12696C13.002 9.405 12.8332 9.65763 12.6204 9.87043C12.4076 10.0832 12.1549 10.252 11.8769 10.3672C11.5989 10.4824 11.3009 10.5416 10.9999 10.5416ZM10.9999 1.83331C9.29811 1.83331 7.66601 2.50935 6.46265 3.71271C5.25929 4.91607 4.58325 6.54817 4.58325 8.24998C4.58325 13.0625 10.9999 20.1666 10.9999 20.1666C10.9999 20.1666 17.4166 13.0625 17.4166 8.24998C17.4166 6.54817 16.7405 4.91607 15.5372 3.71271C14.3338 2.50935 12.7017 1.83331 10.9999 1.83331Z" fill="currentColor"/>
                            </svg>

                            <p><?php devcon_msummit2024_render_text('event_location'); ?></p>
                        </div>

                        <div class="flex space-x-2 border border-white/20 bg-white/10 backdrop-blur-md rounded-lg uppercase tracking-widest px-4 py-3">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_228_40)">
                                    <path d="M19.7084 3.66665H17.264V5.49998C17.264 5.67654 17.2292 5.85137 17.1617 6.01448C17.0941 6.1776 16.9951 6.32581 16.8702 6.45065C16.7454 6.57549 16.5972 6.67452 16.434 6.74209C16.2709 6.80965 16.0961 6.84443 15.9195 6.84443C15.743 6.84443 15.5682 6.80965 15.4051 6.74209C15.2419 6.67452 15.0937 6.57549 14.9689 6.45065C14.844 6.32581 14.745 6.1776 14.6774 6.01448C14.6099 5.85137 14.5751 5.67654 14.5751 5.49998V3.66665H7.45566V5.49998C7.45566 5.85655 7.31401 6.19852 7.06188 6.45065C6.80975 6.70278 6.46778 6.84443 6.11121 6.84443C5.75465 6.84443 5.41268 6.70278 5.16055 6.45065C4.90842 6.19852 4.76677 5.85655 4.76677 5.49998V3.66665H2.32232C2.17689 3.665 2.03261 3.69252 1.898 3.7476C1.7634 3.80268 1.6412 3.88419 1.53864 3.98732C1.43609 4.09044 1.35525 4.21309 1.30092 4.348C1.24659 4.48291 1.21986 4.62734 1.22233 4.77276V18.4494C1.2199 18.5923 1.24564 18.7342 1.29807 18.8671C1.3505 19 1.42861 19.1213 1.52792 19.224C1.62723 19.3267 1.7458 19.4089 1.87687 19.4658C2.00793 19.5226 2.14891 19.5532 2.29177 19.5555H19.7084C19.8513 19.5532 19.9923 19.5226 20.1233 19.4658C20.2544 19.4089 20.373 19.3267 20.4723 19.224C20.5716 19.1213 20.6497 19 20.7021 18.8671C20.7546 18.7342 20.7803 18.5923 20.7779 18.4494V4.77276C20.7803 4.62991 20.7546 4.48797 20.7021 4.35507C20.6497 4.22216 20.5716 4.10089 20.4723 3.99817C20.373 3.89546 20.2544 3.81331 20.1233 3.75643C19.9923 3.69954 19.8513 3.66904 19.7084 3.66665ZM6.11121 15.8889H4.88899V14.6666H6.11121V15.8889ZM6.11121 12.8333H4.88899V11.6111H6.11121V12.8333ZM6.11121 9.77776H4.88899V8.55554H6.11121V9.77776ZM9.77788 15.8889H8.55566V14.6666H9.77788V15.8889ZM9.77788 12.8333H8.55566V11.6111H9.77788V12.8333ZM9.77788 9.77776H8.55566V8.55554H9.77788V9.77776ZM13.4445 15.8889H12.2223V14.6666H13.4445V15.8889ZM13.4445 12.8333H12.2223V11.6111H13.4445V12.8333ZM13.4445 9.77776H12.2223V8.55554H13.4445V9.77776ZM17.1112 15.8889H15.889V14.6666H17.1112V15.8889ZM17.1112 12.8333H15.889V11.6111H17.1112V12.8333ZM17.1112 9.77776H15.889V8.55554H17.1112V9.77776Z" fill="white"/>
                                    <path d="M6.11111 6.1111C6.27319 6.1111 6.42863 6.04672 6.54323 5.93211C6.65784 5.81751 6.72222 5.66207 6.72222 5.49999V1.83332C6.72222 1.67125 6.65784 1.51581 6.54323 1.4012C6.42863 1.2866 6.27319 1.22221 6.11111 1.22221C5.94903 1.22221 5.7936 1.2866 5.67899 1.4012C5.56438 1.51581 5.5 1.67125 5.5 1.83332V5.49999C5.5 5.66207 5.56438 5.81751 5.67899 5.93211C5.7936 6.04672 5.94903 6.1111 6.11111 6.1111Z" fill="white"/>
                                    <path d="M15.8889 6.1111C16.051 6.1111 16.2065 6.04672 16.3211 5.93211C16.4357 5.81751 16.5001 5.66207 16.5001 5.49999V1.83332C16.5001 1.67125 16.4357 1.51581 16.3211 1.4012C16.2065 1.2866 16.051 1.22221 15.8889 1.22221C15.7269 1.22221 15.5714 1.2866 15.4568 1.4012C15.3422 1.51581 15.2778 1.67125 15.2778 1.83332V5.49999C15.2778 5.66207 15.3422 5.81751 15.4568 5.93211C15.5714 6.04672 15.7269 6.1111 15.8889 6.1111Z" fill="currentColor"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_228_40">
                                        <rect width="22" height="22" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                            <p><?php devcon_msummit2024_render_text('event_date'); ?></p>
                            <p><?php devcon_msummit2024_render_text('event_time'); ?></p>
                        </div>
                    </div>
                </div>

                <a href="<?php echo devcon_msummit2024_get_theme_mod('cta_button_url'); ?>"
                   class="inline-block bg-[#FFDD00] rounded-lg uppercase no-underline text-gray-900 tracking-widest font-extrabold px-12 py-3 mt-16">
                    <?php devcon_msummit2024_render_text('cta_button_text'); ?>
                </a>
            </div>
        </div>
    </section>

    <section class="relative py-24 px-0.5">
        <!-- Show full version of background image for larger screens -->
        <div style="background-image: url(<?php devcon_msummit2024_get_asset_url('overview_bg.png') ?>)"
            class="hidden 2xl:block absolute top-0 inset-x-0 bg-no-repeat bg-contain bg-left-bottom h-full w-full"></div>

        <!-- Show "half" version for mobile devices -->
        <div style="background-image: url(<?php devcon_msummit2024_get_asset_url('overview_bg_half.png') ?>)"
             class="2xl:hidden absolute top-0 inset-x-0 bg-no-repeat bg-cover md:bg-[length:100%] bg-left-bottom h-full w-full"></div>

        <div class="relative container !px-0">
            <div class="space-y-8">
	            <?php [$sectionTitle, $sectionDescription] = devcon_msummit2024_render_section('Overview'); ?>

                <div class="section-heading">
                    <h2 class="w-full lg:w-3/4"><?php echo $sectionTitle ?></h2>
                    <p><?php echo $sectionDescription ?></p>
                </div>

                <?php $activities = devcon_msummit2024_get_theme_mod('overview_activities', []) ?>

                <div class="flex">
                    <?php foreach ($activities as $activity) { ?>
                        <div class="p-4">
                            <div class="flex flex-col rounded-lg bg-[#180646] shadow-md">
                                <img src="<?php echo $activity['image'] ?>" class="rounded-t-lg" alt="<?php echo $activity['name'] ?>">
                                <div class="bg-gradient-to-t from-[#180646] from-[48%] to-transparent rounded-b-lg -mt-48 pt-48 px-6 pb-6">
                                    <h3 class="text-xl font-extrabold"><?php echo $activity['name'] ?></h3>
                                    <p class="text-xs mt-4"><?php echo $activity['description'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="devcon-default-bg">
    <section class="py-24">
        <div class="relative pb-12">
	        <?php [$sectionTitle, $sectionDescription] = devcon_msummit2024_render_section('Program Agenda'); ?>

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

    <section class="py-24 relative">
        <div style="background-image: url(<?php devcon_msummit2024_get_asset_url('featured_speakers_bg_half.png') ?>)"
             class="absolute top-0 inset-x-0 bg-no-repeat bg-cover bg-left h-full w-full"></div>

        <div class="relative container space-y-4">
	        <?php [$sectionTitle, $sectionDescription] = devcon_msummit2024_render_section('Featured Speakers'); ?>

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
                    <?php $speakers = [
                        [
                            "name" => "Lorem Ipsum",
                            "role" => "Role, Company Name",
                            "image" => devcon_msummit2024_get_asset_url('speaker_sample.png', true),
                        ],
	                    [
		                    "name" => "Lorem Ipsum",
		                    "role" => "Role, Company Name",
		                    "image" => devcon_msummit2024_get_asset_url('speaker_sample_2.png', true),
	                    ],
	                    [
		                    "name" => "Lorem Ipsum",
		                    "role" => "Role, Company Name",
		                    "image" => devcon_msummit2024_get_asset_url('speaker_sample.png', true),
	                    ]
                    ] ?>

                    <?php foreach ($speakers as $speaker) { ?>
                        <div class="px-2 pb-2 pt-32">
                            <div class="flex flex-col items-center border border-white/20 bg-white/10 rounded-2xl">
                                <!-- image goes here -->
                                <div
                                    class="flex items-center justify-center bg-contain bg-center bg-no-repeat h-96 w-full max-w-[24rem] -mt-32"
                                    style="background-image: url(<?php devcon_msummit2024_get_asset_url('speaker_bg.png'); ?>)">
                                    <img src="<?php echo $speaker['image'] ?>"
                                         class="h-64 w-auto object-cover"
                                         alt="<?php echo $speaker['name'] ?>">
                                </div>

                                <div class="flex flex-col items-center text-center space-y-12 px-6 pb-10 -mt-12">
                                    <div class="space-y-2">
                                        <h3 class="uppercase text-2xl tracking-wide font-bold"><?php echo $speaker['name'] ?></h3>
                                        <p class="uppercase font-semibold"><?php echo $speaker['role'] ?></p>
                                    </div>

                                    <p class="text-light text-sm">Lorem ipsum dolor sit amet consectetur. Amet in fringilla pellentesque sed praesent tellus diam. Sapien imperdiet enim proin fusce ac ac et imperdiet rhoncus. Imperdiet ac sem. Amet in fringilla pellentesque sed praesent tellus diam. Sapien imperdiet enim proin fusce ac.</p>

                                    <div class="flex space-x-4 items-center">
                                        <button class="bg-white/10 border-0 h-auto w-1/3 p-4 flex items-center justify-center rounded-full">
                                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M20.5 10.5251C20.5 4.99123 16.02 0.5 10.5 0.5C4.98 0.5 0.5 4.99123 0.5 10.5251C0.5 15.3772 3.94 19.4173 8.5 20.3496V13.5326H6.5V10.5251H8.5V8.0188C8.5 6.08396 10.07 4.51003 12 4.51003H14.5V7.51754H12.5C11.95 7.51754 11.5 7.96867 11.5 8.52005V10.5251H14.5V13.5326H11.5V20.5C16.55 19.9987 20.5 15.7281 20.5 10.5251Z" fill="white"/>
                                            </svg>
                                        </button>
                                        <button class="bg-white/10 border-0 h-auto w-1/3 p-4 flex items-center justify-center rounded-full">
                                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.3 0.5H14.7C17.9 0.5 20.5 3.1 20.5 6.3V14.7C20.5 16.2383 19.8889 17.7135 18.8012 18.8012C17.7135 19.8889 16.2383 20.5 14.7 20.5H6.3C3.1 20.5 0.5 17.9 0.5 14.7V6.3C0.5 4.76174 1.11107 3.28649 2.19878 2.19878C3.28649 1.11107 4.76174 0.5 6.3 0.5ZM6.1 2.5C5.14522 2.5 4.22955 2.87928 3.55442 3.55442C2.87928 4.22955 2.5 5.14522 2.5 6.1V14.9C2.5 16.89 4.11 18.5 6.1 18.5H14.9C15.8548 18.5 16.7705 18.1207 17.4456 17.4456C18.1207 16.7705 18.5 15.8548 18.5 14.9V6.1C18.5 4.11 16.89 2.5 14.9 2.5H6.1ZM15.75 4C16.0815 4 16.3995 4.1317 16.6339 4.36612C16.8683 4.60054 17 4.91848 17 5.25C17 5.58152 16.8683 5.89946 16.6339 6.13388C16.3995 6.3683 16.0815 6.5 15.75 6.5C15.4185 6.5 15.1005 6.3683 14.8661 6.13388C14.6317 5.89946 14.5 5.58152 14.5 5.25C14.5 4.91848 14.6317 4.60054 14.8661 4.36612C15.1005 4.1317 15.4185 4 15.75 4ZM10.5 5.5C11.8261 5.5 13.0979 6.02678 14.0355 6.96447C14.9732 7.90215 15.5 9.17392 15.5 10.5C15.5 11.8261 14.9732 13.0979 14.0355 14.0355C13.0979 14.9732 11.8261 15.5 10.5 15.5C9.17392 15.5 7.90215 14.9732 6.96447 14.0355C6.02678 13.0979 5.5 11.8261 5.5 10.5C5.5 9.17392 6.02678 7.90215 6.96447 6.96447C7.90215 6.02678 9.17392 5.5 10.5 5.5ZM10.5 7.5C9.70435 7.5 8.94129 7.81607 8.37868 8.37868C7.81607 8.94129 7.5 9.70435 7.5 10.5C7.5 11.2956 7.81607 12.0587 8.37868 12.6213C8.94129 13.1839 9.70435 13.5 10.5 13.5C11.2956 13.5 12.0587 13.1839 12.6213 12.6213C13.1839 12.0587 13.5 11.2956 13.5 10.5C13.5 9.70435 13.1839 8.94129 12.6213 8.37868C12.0587 7.81607 11.2956 7.5 10.5 7.5Z" fill="white"/>
                                            </svg>
                                        </button>
                                        <button class="bg-white/10 border-0 h-auto w-1/3 p-4 flex items-center justify-center rounded-full">
                                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M19.2168 5.49992C18.5751 5.79159 17.8834 5.98325 17.1668 6.07492C17.9001 5.63325 18.4668 4.93325 18.7334 4.09159C18.0418 4.50825 17.2751 4.79992 16.4668 4.96659C15.8084 4.24992 14.8834 3.83325 13.8334 3.83325C11.8751 3.83325 10.2751 5.43325 10.2751 7.40825C10.2751 7.69159 10.3084 7.96659 10.3668 8.22492C7.40011 8.07492 4.75845 6.64992 3.00011 4.49159C2.69178 5.01659 2.51678 5.63325 2.51678 6.28325C2.51678 7.52492 3.14178 8.62492 4.10845 9.24992C3.51678 9.24992 2.96678 9.08325 2.48345 8.83325V8.85825C2.48345 10.5916 3.71678 12.0416 5.35011 12.3666C4.82572 12.5101 4.27519 12.5301 3.74178 12.4249C3.96812 13.1353 4.41139 13.7569 5.00929 14.2024C5.60719 14.6478 6.32965 14.8947 7.07511 14.9083C5.81147 15.9086 4.24511 16.4493 2.63345 16.4416C2.35011 16.4416 2.06678 16.4249 1.78345 16.3916C3.36678 17.4083 5.25011 17.9999 7.26678 17.9999C13.8334 17.9999 17.4418 12.5499 17.4418 7.82492C17.4418 7.66659 17.4418 7.51659 17.4334 7.35825C18.1334 6.85825 18.7334 6.22492 19.2168 5.49992Z" fill="white"/>
                                            </svg>
                                        </button>
                                    </div>
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

    <section class="relative py-24">
        <!-- Show full version of background image for larger screens -->
        <div style="background-image: url(<?php devcon_msummit2024_get_asset_url('tickets_bg.png') ?>)"
             class="hidden 2xl:block absolute top-0 inset-x-0 bg-no-repeat bg-contain bg-right-bottom h-full w-full"></div>

        <!-- Show "half" version for mobile devices -->
        <div style="background-image: url(<?php devcon_msummit2024_get_asset_url('tickets_bg_half.png') ?>)"
             class="2xl:hidden absolute top-0 inset-x-0 bg-no-repeat bg-cover md:bg-[length:100%] bg-right-bottom h-full w-full"></div>

        <div class="container space-y-8">
            <?php [$sectionTitle, $sectionDescription] = devcon_msummit2024_render_section('Tickets'); ?>

            <div class="section-heading">
                <h2><?php echo $sectionTitle ?></h2>
                <p><?php echo $sectionDescription ?></p>
            </div>

            <div class="flex items-center -mx-4">
                <div class="flex-1 p-4">
                    <div class="rounded-2xl bg-white/10 border border-white/20">
                        <div class="flex items-center justify-center space-x-2 rounded-t-xl bg-gradient-to-r from-[rgba(168,229,78,0.5)] to-transparent uppercase font-extrabold bg-opacity-50 py-2">
                            <p class="text-xl tracking-wide">1-day access</p>
                            <span class="block text-lg tracking-wide rounded-full border border-white px-6 py-0.5">30% off</span>
                        </div>

                        <div class="px-4 pb-4">
                            <div class="py-6 flex justify-center items-center space-x-4 font-bold">
                                <p class="text-2xl text-white/60 line-through">₱2,500</p>
                                <p class="text-5xl">₱1,750</p>
                            </div>

                            <div class="space-y-4">
                                <p class="font-bold">What you'll get:</p>

                                <div class="rounded-t-lg rounded-b-lg flex flex-col border border-white/20 divide-y divide-white/20">
                                    <?php $perks = ['Access to all sessions scheduled for Day 1 (June 29, 2024)', 'Exclusive merch', 'App access to event details', 'Access to speakers', 'Networking opportunities with industry leaders.'] ?>

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

                            <button class="w-full text-center bg-[#FFDD00] rounded-lg text-black uppercase font-bold tracking-wide border-0 py-3 text-sm mt-12">Order Now</button>
                        </div>
                    </div>
                </div>

                <div class="flex-1 p-4">
                    <div class="rounded-2xl bg-white/10 border border-white/20">
                        <div class="flex items-center justify-center space-x-2 rounded-t-xl bg-gradient-to-r from-[rgba(255,221,0,0.5)] to-transparent uppercase font-extrabold bg-opacity-50 py-2">
                            <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.2753 29.9461C9.51879 30.4025 8.58541 29.7253 8.78454 28.8645L10.4184 21.8011C10.5019 21.4403 10.3791 21.0628 10.0992 20.8202L4.61823 16.0684C3.9507 15.4896 4.30665 14.3929 5.18681 14.3165L12.4331 13.6875C12.8023 13.6555 13.1235 13.4219 13.2678 13.0806L16.0788 6.42941C16.423 5.61515 17.5769 5.61515 17.921 6.42941L20.7321 13.0806C20.8763 13.4219 21.1975 13.6555 21.5667 13.6875L28.813 14.3165C29.6932 14.3929 30.0491 15.4896 29.3816 16.0684L23.9006 20.8202C23.6208 21.0628 23.498 21.4403 23.5814 21.8011L25.2153 28.8645C25.4144 29.7253 24.481 30.4025 23.7245 29.9461L17.5165 26.2012C17.1988 26.0095 16.8011 26.0095 16.4834 26.2012L10.2753 29.9461Z" fill="#FFEA60"/>
                            </svg>

                            <p>VIP Access</p>
                        </div>

                        <div class="px-4 pb-4">
                            <div class="py-6 flex justify-center items-center space-x-4 font-bold">
                                <p class="text-6xl">₱10,000</p>
                            </div>

                            <div class="space-y-4">
                                <p class="font-bold">What you'll get:</p>

                                <div class="rounded-t-lg rounded-b-lg flex flex-col border border-white/20 divide-y divide-white/20">
                                    <?php $perks = ['Access to all sessions scheduled for 2 Days (June 29 & 30, 2024)', 'Exclusive merch, raffle entry and free lunch for 2 days!', 'Networking opportunities with industry leaders for meaningful connections', 'Engage with our distinguished speakers for insights and inspiration', 'Access to speakers', 'Backstage, VIP Lounge, and After-Party Access', 'Private Lounge: Enjoy a comfortable and exclusive space to enjoy the presentations'] ?>

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

                            <button class="w-full text-center bg-[#FFDD00] rounded-lg text-black uppercase font-bold tracking-wide border-0 py-3 text-sm mt-12">Order Now</button>
                        </div>
                    </div>
                </div>

                <div class="flex-1 p-4">
                    <div class="rounded-2xl bg-white/10 border border-white/20">
                        <div class="flex items-center justify-center space-x-2 rounded-t-xl bg-gradient-to-r from-[rgba(255,130,63,0.5)] to-transparent uppercase font-extrabold bg-opacity-50 py-2">
                            <p class="text-xl tracking-wide">1-day access</p>
                            <span class="block text-lg tracking-wide rounded-full border border-white px-6 py-0.5">30% off</span>
                        </div>

                        <div class="px-4 pb-4">
                            <div class="py-6 flex justify-center items-center space-x-4 font-bold">
                                <p class="text-2xl text-white/60 line-through">₱3,500</p>
                                <p class="text-5xl">₱2,450</p>
                            </div>

                            <div class="space-y-4">
                                <p class="font-bold">What you'll get:</p>

                                <div class="rounded-t-lg rounded-b-lg flex flex-col border border-white/20 divide-y divide-white/20">
                                    <?php $perks = ['Access to all sessions scheduled for 2 Days (June 29 & 30, 2024)', 'Exclusive merch and raffle entry!', 'App access to event details', 'Access to speakers', 'Networking opportunities with industry leaders.'] ?>

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

                            <button class="w-full text-center bg-[#FFDD00] rounded-lg text-black uppercase font-bold tracking-wide border-0 py-3 text-sm mt-12">Order Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="relative py-24">
        <div style="background-image: url(<?php devcon_msummit2024_get_asset_url('testimonials_bg.png') ?>)"
             class="absolute top-0 inset-x-0 bg-no-repeat bg-cover bg-left h-full w-full"></div>

        <div class="relative max-w-3xl mx-auto w-full px-2">
	        <?php [$sectionTitle, $sectionDescription] = devcon_msummit2024_render_section('Testimonials'); ?>

            <div class="section-heading pb-8">
                <h2><?php echo $sectionTitle ?></h2>
                <p><?php echo $sectionDescription ?></p>
            </div>
        </div>

	    <?php $testimonials = devcon_msummit2024_get_theme_mod('testimonials', []) ?>

        <div class="overflow-hidden flex">
		    <?php foreach ($testimonials as $testimonial) { ?>
                <div class="w-[32rem] testimonial-item">
                    <div class="w-[32rem] p-4">
                        <div class="rounded-lg bg-white/10 border border-white/20 px-8 py-6">
                            <p class="text-lg font-light h-32">"<?php echo $testimonial['quote'] ?>"</p>
                            <div class="flex items-center space-x-2 mt-4">
                                <div class="flex space-x-2">
                                    <p class="font-bold"><?php echo $testimonial['name'] ?></p>
                                    <p class="font-light">
						                <?php echo $testimonial['position'] ?>

						                <?php if (isset($testimonial['company'])) { ?>
                                            <span> at <?php echo $testimonial['company'] ?></span>
						                <?php } ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
		    <?php } ?>
        </div>

        <div class="overflow-hidden flex">
		    <?php foreach ($testimonials as $testimonial) { ?>
                <div class="w-[32rem] testimonial-item-reverse">
                    <div class="w-[32rem] p-4">
                        <div class="rounded-lg bg-white/10 border border-white/20 px-8 py-6">
                            <p class="text-lg font-light h-32">"<?php echo $testimonial['quote'] ?>"</p>
                            <div class="flex items-center space-x-2 mt-4">
                                <div class="flex space-x-2">
                                    <p class="font-bold"><?php echo $testimonial['name'] ?></p>
                                    <p class="font-light">
									    <?php echo $testimonial['position'] ?>

									    <?php if (isset($testimonial['company'])) { ?>
                                            <span> at <?php echo $testimonial['company'] ?></span>
									    <?php } ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
		    <?php } ?>
        </div>
    </section>

    <section class="py-24">
        <div class="relative pb-12">
	        <?php [$sectionTitle, $sectionDescription] = devcon_msummit2024_render_section('Sponsorship Packages'); ?>

            <div class="max-w-3xl mx-auto w-full relative section-heading is-reverse">
                <h2><?php echo $sectionTitle ?></h2>
                <p><?php echo $sectionDescription ?></p>
            </div>

            <div class="absolute top-0 inset-x-0 max-w-[82rem] w-full mx-auto flex items-start justify-between mt-[6.7rem]">
                <img class="mt-[4rem]" src="<?php devcon_msummit2024_get_asset_url('dots_left.png') ?>" />
                <img class="h-auto" src="<?php devcon_msummit2024_get_asset_url('dots_right.png') ?>" />
            </div>
        </div>

        <?php $sponsorship_packages = devcon_msummit2024_get_theme_mod('sponsorship_packages', []); ?>

        <div class="max-w-[95rem] mx-auto w-full px-2 flex flex-wrap items-stretch justify-center">
            <?php foreach ($sponsorship_packages as $package) { ?>
                <div class="w-1/3 p-4">
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
                                <p class="text-sm text-white/90"><?php echo $package['description'] ?></p>
                                <button class="w-full text-center bg-white rounded-lg text-black uppercase font-bold tracking-wide border-0 py-3 text-sm mt-4">Order Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>

    <section class="py-24">
        <div class="container">
	        <?php [$sectionTitle] = devcon_msummit2024_render_section('FAQs'); ?>

            <div class="section-heading pb-24">
                <h2><?php echo $sectionTitle ?></h2>
            </div>

            <div>
                <?php $faq = devcon_msummit2024_get_theme_mod('faq', [])  ?>

                <div class="faqs flex flex-col">
                    <?php foreach ($faq as $idx => $faqItem) { ?>
                        <div class="faq-item border-x border-b border-white/20 bg-white/10 transition-colors hover:bg-white/30 <?php echo $idx == 0 ? "border-t rounded-t-lg" : ( $idx == count( $faq ) - 1 ? " rounded-b-lg" : "" ) ?>">
                            <div class="faq-question transition-transform cursor-pointer py-6 px-8 flex items-start">
                                <p class="font-bold flex-1"><?php echo $faqItem['question'] ?></p>

                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20 12.5L32.5 25L30.75 26.75L20 16L9.25 26.75L7.5 25L20 12.5Z" fill="white"/>
                                </svg>
                            </div>

                            <div class="faq-answer mt-0 mb-6 pl-3 pr-8 ml-8 border-l border-[#A8E54E]">
                                <p class="text-sm"><?php echo $faqItem['answer'] ?></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24">
        <div class="relative pb-12">
	        <?php [$sectionTitle, $sectionDescription] = devcon_msummit2024_render_section('Countdown'); ?>

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

           <button class="w-1/3 text-center bg-white rounded-lg text-black uppercase font-bold tracking-wide border-0 py-3 text-sm mt-16 self-center">
	           <?php echo devcon_msummit2024_get_theme_mod('cta_button_url'); ?>
           </button>
        </div>
    </section>

    <section class="py-24 relative">
        <!-- Show full version of background image for larger screens -->
        <div style="background-image: url(<?php devcon_msummit2024_get_asset_url('overview_bg.png') ?>)"
             class="hidden 2xl:block absolute top-0 inset-x-0 bg-no-repeat bg-contain bg-left-bottom h-full w-full"></div>

        <!-- Show "half" version for mobile devices -->
        <div style="background-image: url(<?php devcon_msummit2024_get_asset_url('overview_bg_half.png') ?>)"
             class="2xl:hidden absolute top-0 inset-x-0 bg-no-repeat bg-cover md:bg-[length:100%] bg-left-bottom h-full w-full"></div>

        <div class="relative pb-12">
	        <?php [$sectionTitle, $sectionDescription] = devcon_msummit2024_render_section('Social Media Feed'); ?>

            <div class="max-w-3xl mx-auto w-full relative section-heading">
                <h2><?php echo $sectionTitle ?></h2>
                <p><?php echo $sectionDescription ?></p>
            </div>

            <div class="absolute top-0 inset-x-0 max-w-[82rem] w-full mx-auto flex items-start justify-end mt-[12rem]">
                <img class="h-auto" src="<?php devcon_msummit2024_get_asset_url('dots_right.png') ?>" />
            </div>
        </div>

        <div class="absolute bottom-[3rem] inset-x-0 max-w-[82rem] w-full mx-auto flex items-start justify-start">
            <img class="h-auto" src="<?php devcon_msummit2024_get_asset_url('dots_left.png') ?>" />
        </div>

        <?php $posts = [
            [
                'author' => 'ItsMeCrayCray',
                'image' => devcon_msummit2024_get_asset_url('sample_posts/4.png', true),
                'caption' => 'Felis quam diam senectus arcu pulvinar tellus velit condimentum. <a href="#MindanaoSummit2024">#MindanaoSummit2024</a> Aliquam netus tincidunt ut eget sapien et pellentesque odio. Venenatis turpis nisi ullamcorper nulla amet morbi ut.',
            ],
	        [
		        'author' => 'John Doe',
		        'caption' => 'Awesome day with <a href="#">@DEVCONDavao</a> <a href="#">@DEVCONPH</a>! 🥳 Farm-to-table cray actually them forage.<br />Food palo tbh big taxidermy retro trade mug keytar subway. Helvetica bushwick fit chillwave plz lyft retro. Craft vhs man santo beard. Chicharrones. #MindanaoSummit2024',
	        ],
	        [
		        'author' => 'ItsMeCrayCray',
		        'caption' => 'Awesome day with <a href="#">@DEVCONDavao</a> <a href="#">@DEVCONPH</a>! 🥳 Farm-to-table cray actually them forage.<br />Food palo tbh big taxidermy retro trade mug keytar subway. Helvetica bushwick fit chillwave plz lyft retro. Craft vhs man santo beard. Chicharrones. #MindanaoSummit2024',
	        ],
	        [
		        'author' => 'ItsMeCrayCray',
		        'image' => devcon_msummit2024_get_asset_url('sample_posts/2.png', true),
		        'caption' => 'Jib hogshead avast chandler just. Fleet plate measured fer measured. Run rig ahoy chains just topgallant! <a href="#">@DEVCONDavao</a> 😱😎 <a href="#">#BestDayEver</a> <a href="#">#MindanaoSummit2024</a>',
	        ],
	        [
		        'author' => 'ItsMeCrayCray',
		        'image' => devcon_msummit2024_get_asset_url('sample_posts/3.png', true),
		        'caption' => 'Felis quam diam senectus arcu pulvinar tellus velit condimentum. Farm-to-table cray actually them forage. Food palo tbh big taxidermy retro trade mug keytar subway. Helvetica bushwick fit chillwave plz lyft retro. Craft vhs man santo beard. Chicharrones. <a href="#">#MindanaoSummit2024</a>',
	        ],
	        [
		        'author' => 'John Doe',
		        'image' => devcon_msummit2024_get_asset_url('sample_posts/1.png', true),
		        'caption' => 'Farm-to-table cray actually them forage. Food palo tbh big taxidermy retro trade mug keytar subway. Venenatis turpis nisi ullamcorper nulla amet morbi ut. Helvetica bushwick fit chillwave plz lyft retro. Craft vhs man santo beard. Chicharrones. <a href="#">#MindanaoSummit2024</a>',
	        ]
        ] ?>

        <!-- tweets in pinterest layout -->
        <div class="relative max-w-7xl mx-auto w-full px-2">
            <div class="columns-3 gap-6 space-y-6">
                <?php foreach ($posts as $post) { ?>
                    <div class="break-inside-avoid bg-white text-gray-900 shadow rounded-xl p-6 space-y-4">
                        <div class="flex justify-between items-start">
                            <div class="space-y-0.5 flex flex-col text-sm">
                                <span class="font-bold"><?php echo $post['author'] ?></span>
                                <span class="text-sm text-slate-500">17 Feb 2023</span>
                            </div>

                            <img src="<?php devcon_msummit2024_get_asset_url('x-icon.png') ?>" />
                        </div>

		                <?php if (isset($post['image'])) { ?>
                            <img src="<?php echo $post['image'] ?>" class="w-full h-auto rounded-lg" />
		                <?php } ?>

                        <div class="text-sm">
                            <p><?php echo $post['caption'] ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <section class="relative pt-24 pb-36 -mb-24">
        <div style="background-image: url(<?php devcon_msummit2024_get_asset_url('sponsorship_bg.png') ?>)"
             class="absolute top-0 inset-x-0 bg-no-repeat bg-cover md:bg-[length:100%] bg-left-bottom h-full w-full"></div>

        <div class="relative container pb-16">
	        <?php [$sectionTitle] = devcon_msummit2024_render_section('Sponsors List'); ?>

            <div class="flex flex-col items-center text-center space-y-4">
                <h2 class="uppercase text-6xl font-extrabold"><?php echo $sectionTitle ?></h2>
            </div>
        </div>

<!--       TODO: categorize sponsors -->
        <?php $sponsors = [
            [
                'name' => 'Mugna',
                'image' => devcon_msummit2024_get_asset_url('sponsors/mugna.png', true)
            ],
            [
                'name' => 'StreetWebs',
                'image' => devcon_msummit2024_get_asset_url('sponsors/street_webs.png', true)
            ],
            [
                'name' => 'Davao Interschool Computer Enthusiasts',
                'image' => devcon_msummit2024_get_asset_url('sponsors/dice.png', true)
            ],
            [
                 'name' => 'Davao DeFi Community',
                 'image' => devcon_msummit2024_get_asset_url('sponsors/ddc.png', true)
            ],
            [
                 'name' => 'PWA Pilipinas',
                 'image' => devcon_msummit2024_get_asset_url('sponsors/pwa_pilipinas.png', true)
            ],
            [
                 'name' => 'Blue Salmon Solutions',
                 'image' => devcon_msummit2024_get_asset_url('sponsors/bluesalmon.png', true)
            ],
            [
                 'name' => 'UX Davao',
                 'image' => devcon_msummit2024_get_asset_url('sponsors/uxdavao.png', true)
            ],
            [
                 'name' => 'UP SPARCS',
                 'image' => devcon_msummit2024_get_asset_url('sponsors/sparcs.png', true)
            ],
            [
                 'name' => 'IDEAS Davao',
                 'image' => devcon_msummit2024_get_asset_url('sponsors/ideas.png', true)
            ],
            [
                 'name' => 'DICT Region XI',
                 'image' => devcon_msummit2024_get_asset_url('sponsors/dict.png', true)
            ],
            [
                 'name' => 'ICT Davao',
                 'image' => devcon_msummit2024_get_asset_url('sponsors/ict_davao.png', true)
            ]
        ] ?>

        <div class="relative max-w-7xl mx-auto w-full px-2">
            <div class="bg-gradient-to-b from-[rgb(255,221,0)] via-[rgb(205,118,55) to-transparent p-0.5 rounded-2xl">
                <div class="bg-[#110125] px-20 py-12 flex flex-wrap items-center justify-center rounded-2xl">
                    <?php foreach ($sponsors as $sponsor) { ?>
                        <div class="w-1/4 p-6 flex justify-center items-center">
                            <img src="<?php echo $sponsor['image'] ?>" alt="<?php echo $sponsor['name'] ?>" class="w-auto h-auto" />
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    window.alternatingTexts = <?php echo json_encode(devcon_msummit2024_get_theme_mod('hero_alternating_texts', [])) ?>;
    window.countdownDate = <?php echo json_encode(devcon_msummit2024_get_theme_mod('countdown_date', '')) ?>;
</script>

<?php get_footer(); ?>

