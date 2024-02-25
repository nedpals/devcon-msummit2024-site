//@ts-nocheck
import 'jquery.marquee'

const defaultMarqueeConfig = {
    duration: 10000,
    allowCss3Support: true,
    pauseOnCycle: true,
    duplicated: true,
    gap: 1025,
    delayBeforeStart: 0,
    startVisible: true
}

jQuery(".testimonial-item").marquee(defaultMarqueeConfig);
jQuery(".testimonial-item-reverse").marquee({
    ...defaultMarqueeConfig,
    direction: 'right'
});