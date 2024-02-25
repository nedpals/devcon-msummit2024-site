jQuery(function ($) {
    const panels = $('.faqs > .faq-item > .faq-answer').hide();

    $('.faqs > .faq-item > .faq-question').on('click', function() {
        const answer = $(this).next();

        if (answer.is(":visible")) {
            $(this).children("svg").removeAttr("style");
            answer.slideUp();
        } else {
            panels.prev().children("svg").removeAttr("style");
            panels.slideUp();
            $(this).children("svg").attr("style", "transform: rotate(180deg)");
            $(this).next().slideDown();
        }

        return false;
    });
});