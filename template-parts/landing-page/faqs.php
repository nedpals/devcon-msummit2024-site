<?php [$sectionTitle] = devcon_msummit2024_render_section('FAQs'); ?>

<section class="py-24">
	<div class="container">
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