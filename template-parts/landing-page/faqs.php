<?php [$sectionTitle] = devcon_msummit2024_render_section('faqs'); ?>

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
                        <div class="faq-question transition-transform cursor-pointer px-8 flex items-start">
                            <p class="font-bold py-6 flex-1"><?php echo $faqItem['question'] ?></p>

                            <svg class="mt-5" xmlns="http://www.w3.org/2000/svg" fill="none" width="40" height="40" viewBox="0 0 40 40">
                                <path fill="#fff" d="M20 12.5 32.5 25l-1.75 1.75L20 16 9.25 26.75 7.5 25 20 12.5Z"/>
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