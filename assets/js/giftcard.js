jQuery(function ($) {
    if ($(".info-section .toggle-show").length) {
        $(".info-section .toggle-show").click(function () {
            const infoSection = $(this).closest(".info-section");

            if (!infoSection.hasClass("show-all")) {
                infoSection.addClass("show-all");
            } else {
                infoSection.removeClass("show-all");
            }
        });
    }
});
