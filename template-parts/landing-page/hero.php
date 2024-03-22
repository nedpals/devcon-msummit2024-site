<?php
/** @var $args array */

$args = wp_parse_args($args, [
    'title' => devcon_msummit2024_render_text('hero_title', return: true),
    'content' => devcon_msummit2024_render_text('hero_content', return: true),
    'event_location' => '',
    'event_date' => '',
    'event_time' => '',
    'alternating_texts' => '',
    'cta_button_text' => '',
    'cta_button_url' => '',
]);

?>

<section class="relative pt-16 overflow-x-hidden">
	<!-- Show full wave for large screens -->
	<div style="background-image: url(<?php devcon_msummit2024_get_asset_url('hero_waves.png') ?>);"
	     class="absolute top-0 right-0 hidden lg:block left-[63%] 2xl:left-[57%] h-full max-w-[58rem] w-full bg-cover bg-no-repeat bg-[-20%] sm:bg-[-40%] md:[100%] lg:bg-[100%_0%] px-0"></div>

	<!-- Show half-wave for mobile devices up to desktop -->
	<div style="background-image: url(<?php devcon_msummit2024_get_asset_url('hero_waves_half.png') ?>);"
	     class="absolute top-0 inset-x-0 lg:hidden h-full w-full bg-right bg-no-repeat bg-cover sm:bg-contain px-0"></div>

	<div class="relative container py-32 border-b border-white/25">
		<div class="w-full lg:w-3/4">
			<div class="space-y-10">
				<img src="<?php devcon_msummit2024_get_asset_url('summit_logo.png') ?>"
				     alt="<?php echo get_bloginfo('name') ?>" />

				<h1 class="uppercase text-6xl font-extrabold tracking-wide w-full"><?php echo $args['title'] ?></h1>

                <?php if (!empty($args['content'])) { ?>
				    <p class="font-light text-lg"><?php echo $args['content'] ?></p>
                <?php } ?>

				<div class="flex flex-col items-start lg:flex-row space-y-4 lg:space-y-0 lg:space-x-4 text-sm">
					<?php if (!empty($args['event_location'])) { ?>
                        <div class="flex space-x-2 border border-white/20 bg-white/10 backdrop-blur-md rounded-lg uppercase tracking-widest px-4 py-3">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.9999 10.5416C10.3921 10.5416 9.80924 10.3002 9.37947 9.87043C8.94969 9.44066 8.70825 8.85777 8.70825 8.24998C8.70825 7.64219 8.94969 7.0593 9.37947 6.62953C9.80924 6.19976 10.3921 5.95831 10.9999 5.95831C11.6077 5.95831 12.1906 6.19976 12.6204 6.62953C13.0501 7.0593 13.2916 7.64219 13.2916 8.24998C13.2916 8.55093 13.2323 8.84893 13.1171 9.12696C13.002 9.405 12.8332 9.65763 12.6204 9.87043C12.4076 10.0832 12.1549 10.252 11.8769 10.3672C11.5989 10.4824 11.3009 10.5416 10.9999 10.5416ZM10.9999 1.83331C9.29811 1.83331 7.66601 2.50935 6.46265 3.71271C5.25929 4.91607 4.58325 6.54817 4.58325 8.24998C4.58325 13.0625 10.9999 20.1666 10.9999 20.1666C10.9999 20.1666 17.4166 13.0625 17.4166 8.24998C17.4166 6.54817 16.7405 4.91607 15.5372 3.71271C14.3338 2.50935 12.7017 1.83331 10.9999 1.83331Z" fill="currentColor"/>
                            </svg>

                            <p><?php echo $args['event_location'] ?></p>
                        </div>
                    <?php } ?>

					<?php if (!empty($args['event_date'])) { ?>
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

                            <p><?php echo $args['event_date'] ?></p>

                            <?php if (!empty($args['event_time'])) { ?>
                                <p><?php echo $args['event_time'] ?></p>
                            <?php } ?>
                        </div>
                    <?php } ?>
				</div>
			</div>

            <?php if (!empty($args['cta_button_text'])) { ?>
                <a href="<?php echo $args['cta_button_url'] ?>"
                   class="inline-block bg-[#FFDD00] rounded-lg uppercase no-underline text-gray-900 tracking-widest font-extrabold px-12 py-3 mt-16">
                    <?php echo $args['cta_button_text'] ?>
                </a>
            <?php } ?>
		</div>
	</div>
</section>

<?php if (!empty($args['alternating_texts'])) { ?>
    <script>
        window.alternatingTexts = <?php echo json_encode(explode(',', $args['alternating_texts'])) ?>;
    </script>
<?php } ?>