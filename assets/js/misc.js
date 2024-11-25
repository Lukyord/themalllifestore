jQuery(function ($) {
    // Sync Tab Link and Select2
    $(".retail-space-select").on("change", function () {
        const selectedValue = $(this).val();

        $(".retail-space-section .tabs .tab-link-inner").removeClass("active");

        $(
            `.retail-space-section .tabs .tab-link-inner[href="#${selectedValue}"]`
        ).addClass("active");
    });

    $(".retail-space-section .tabs .tab-link-inner").on("click", function (e) {
        e.preventDefault();

        const targetId = $(this).attr("href").replace("#", "");

        $(".retail-space-section .tabs .tab-link-inner").removeClass("active");
        $(this).addClass("active");

        $(".retail-space-select").val(targetId).trigger("change");

        $(".retail-space-section").find(".tab-content").removeClass("active");
        $(`.retail-space-section #${targetId}`).addClass("active");
    });
});
