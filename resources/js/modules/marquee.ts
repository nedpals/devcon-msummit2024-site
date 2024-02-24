import 'jquery.marquee'

//@ts-ignore
jQuery(".testimonial-item").marquee({
    duration: 10000,
    allowCss3Support: true,
    pauseOnCycle: true,
    duplicated: true,
    gap: 1025,
    delayBeforeStart: 0,
    startVisible: true
});

//@ts-ignore
jQuery(".testimonial-item-reverse").marquee({
    duration: 10000,
    allowCss3Support: true,
    pauseOnCycle: true,
    duplicated: true,
    direction: 'right',
    delayBeforeStart: 0,
    gap: 1025,
    startVisible: true
});