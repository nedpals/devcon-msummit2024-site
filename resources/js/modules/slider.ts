import Swiper from 'swiper';
import { Autoplay } from 'swiper/modules'
import 'swiper/css';
import 'swiper/css/autoplay';

const swiper = new Swiper('.swiper', {
    modules: [Autoplay],
    autoplay: {
        delay: 2000,
    },
    rewind: true,
    slidesPerView: 'auto',
    centeredSlides: true,
});