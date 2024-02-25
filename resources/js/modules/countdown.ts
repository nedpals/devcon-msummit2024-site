//@ts-nocheck
import 'jquery-countdown'

jQuery(function ($) {
    jQuery(".event-countdown-timer").countdown("2024/06/29", function(event) {
        const item = $(this).children("div");

        item.children(".countdown-days").children("p").first().text(event.strftime('%D'));
        item.children(".countdown-hours").children("p").first().text(event.strftime('%H'));
        item.children(".countdown-minutes").children("p").first().text(event.strftime('%M'));
        item.children(".countdown-seconds").children("p").first().text(event.strftime('%S'));
    });
})