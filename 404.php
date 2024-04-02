<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package devcon-msummit2024
 */

get_template_part('template-parts/head', args: [
    'custom_html' => '<style>
          .secret-text {
            transform: translateY(100%);
            animation: scroll 20s infinite linear;
          }
          
          .secret-text:hover {
            animation-play-state: paused;
          }
          
          @keyframes scroll {
            0% {
              transform: translateY(100%);
            }
            100% {
              transform: translateY(-100%);
            }
          }
     </style>'
]);
?>
<style></style>

	<main id="primary" class="relative devcon-default-bg site-main h-screen overflow-hidden">
		<div class="absolute top-0 inset-0 flex flex-col items-center justify-center opacity-30 h-full">
           <img src="<?php devcon_msummit2024_get_asset_url('summit_logo.png') ?>" alt="Summit Logo" />
           <h1 class="text-[13rem] md:text-[20rem] font-extrabold text-center">404</h1>
		</div>

        <div class="secret-text relative max-w-5xl tracking-tight mx-auto space-y-16 text-4xl md:text-5xl px-4">
            <div class="space-y-4">
                <p>Pag-abot nimo dinhi, nawala ang dalan,</p>
                <p>Giunsa pa kaha, ang page nga imong gipangita wala na man?</p>
                <p>Ay, amigo, naglibog ka ba? Apan ayaw kaguol,</p>
                <p>Ang imong gipangita, sama sa hangin, nahimong gabok!</p>
            </div>
            <div class="space-y-4">
                <p>Ayaw na pagdugay, ug balik sa pagsugod,</p>
                <p>Kay ang imong giagian, nahimo nang kagabhion.</p>
                <p>Ang 404 nga imong giatubang, sadya lang ni, dili panghadlok,</p>
                <p>Magbinayloay ta&#39;g katawa, kay ang kalibutan puno sa kalokohan!</p>
            </div>
            <div class="space-y-4">
                <p>Ay, higala, kung nangita ka&#39;g kahibalo ug kalipay,</p>
                <p>Padayon, ayaw paglangay, <a class="hover:bg-[rgb(113,180,6)]" href="<?php echo home_url(); ?>">sa dagan balik sa atong sinugdanan</a>.</p>
                <p>Latas sa dagat sa panahon, sumayaw uban sa mga balod,</p>
                <p>Imong kasingkasing magdala, ug <a class="hover:bg-[rgb(113,180,6)]" href="<?php echo devcon_msummit2024_get_theme_mod('cta_button_url', '#') ?>">sa paglakaw mo, dapit nga imong gipangandoy mahanap mo</a>.</p>
            </div>
        </div>
	</main>

<?php
get_template_part('template-parts/foot');
