const $ = require('jquery');
require('slick-carousel');

// $(function() {
//   $('.h-nav').click(function() {
//     $(this).toggleClass('active');
//     if($(this).hasClass('active')) {
//       $('.g-nav').addClass('active');
//     } else {
//       $('.g-nav').removeClass('active');
//     }
//   });
// });

// import Swiper from 'swiper';

// export default class Carousel {
//     constructor(.slick-box) {
//         this.$el = $(.slick-box);
//         this.init();
//     }
//
//     init() {
//         this.$el.slick({
//             dots: true,
//             autoplay: true
//         });
//     }
// }

$(function() {
	$('.slick-box').slick({
    infinite: true,
		autoplay: true,
		slidesToShow: 1,
		slidesToScroll: 1,
  });
});
