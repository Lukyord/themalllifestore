// FILTER
jQuery(document).ready(function () {
    $(".page-template .category-filter .filter").on("click", function () {
        $(".page-template .category-filter .filter").removeClass("active");
        $(this).addClass("active");
    });
});

function copyLink(link) {
    navigator.clipboard
        .writeText(link)
        .then(() => {
            alert("Link copied to clipboard!");
        })
        .catch((error) => {
            console.error("Failed to copy link: ", error);
        });
}

function copyCurrentLink() {
    const currentUrl = window.location.href;
    navigator.clipboard
        .writeText(currentUrl)
        .then(() => {
            alert("Current page link copied to clipboard!");
        })
        .catch((error) => {
            console.error("Failed to copy current link: ", error);
        });
}

// AWARDS SWIPER
jQuery(document).ready(function () {
    if ($(".swiper.awards").length) {
        $(".swiper.awards").each(function () {
            const _this = $(this);

            var slideButtonNext = _this.find(".swiper-button-next")[0],
                slideButtonPrev = _this.find(".swiper-button-prev")[0];

            const swiper = new Swiper(_this[0], {
                slidesPerView: 1,
                spaceBetween: 30,
                speed: 1000,
                loop: true,
                navigation: {
                    nextEl: slideButtonNext,
                    prevEl: slideButtonPrev,
                },
                centerInsufficientSlides: true,
                watchSlidesProgress: true,
                watchSlidesVisibility: true,
                breakpoints: {
                    992: {
                        slidesPerView: 3,
                    },
                },
            });
        });
    }
});
