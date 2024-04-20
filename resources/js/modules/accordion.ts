jQuery(function ($) {
    const panels = $('.faqs > .faq-item > .faq-answer').hide();

    $('.faqs > .faq-item > .faq-question').on('click', function() {
        const answer = $(this).next();

        if (answer.is(":visible")) {
            $(this).children("svg").attr("style", "transform: rotate(180deg)");
            answer.slideUp();
        } else {
            panels.prev().children("svg").attr("style", "transform: rotate(180deg)");
            panels.slideUp();
            $(this).children("svg").attr("style", "transform: rotate(0deg)");
            $(this).next().slideDown();
        }

        return false;
    });
});