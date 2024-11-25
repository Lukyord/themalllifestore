// HERO SWIPER AND THUMB
jQuery(document).ready(function ($) {
    if ($(".template-banner-slide").length) {
        $(".template-banner-slide").each(function () {
            var _this = $(this).find(".swiper.main");
            var _this_thumb = $(this).find(".swiper.thumb");

            if (_this_thumb.find(".swiper-slide").length <= 1) {
                _this_thumb.hide();
            } else {
                const thumb = new Swiper(_this_thumb[0], {
                    slidesPerView: "auto",
                    slideToClickedSlide: true,
                    watchSlidesVisibility: true,
                    watchSlidesProgress: true,
                    spaceBetween: 10,
                    slideToClickedSlide: true,
                    centerInsufficientSlides: true,
                });

                const mainSlide = new Swiper(_this[0], {
                    effect: "fade",
                    slidesPerView: 1,
                    slideToClickedSlide: true,
                    watchSlidesVisibility: true,
                    watchSlidesProgress: true,
                    thumbs: {
                        swiper: thumb,
                    },
                });
            }
        });
    }
});
