// ENTRY FADEIN
jQuery(function ($) {
    // ANIMATE
    $('.entry-fadeIn > *:not([class*="wp-block-"])').addClass("wow fadeIn");
    $(
        '.entry-fadeIn *:is([class*="wp-block-"]) > *:not([class*="wp-block-"], ul, ol), .entry-fadeIn li'
    ).addClass("wow fadeIn");
});

// ON WINDOW RESIZE CALLBACK =============================
function onWindowResize(callback, delay = 300, executeOnLoad = true) {
    let lastWidth = $(window).width();
    let resizeTimeout;

    if (executeOnLoad && typeof callback === "function") {
        callback();
    }

    $(window).on("resize", function () {
        const newWidth = $(window).width();

        if (newWidth !== lastWidth) {
            lastWidth = newWidth;

            clearTimeout(resizeTimeout);

            resizeTimeout = setTimeout(() => {
                if (typeof callback === "function") {
                    callback();
                }
            }, delay);
        }
    });
}

/* Footer Mobile */
$("#show_footerMenu").on("click", function () {
    $("#footer_container").slideToggle();
});

$(".social-nav a").on("click", function () {
    var _id = $(this).attr("href");
    const wasActive = $(this).hasClass("active");

    $(".social-nav a").removeClass("active");
    if (wasActive) {
        $(this).removeClass("active");
    } else {
        $(this).addClass("active");
    }

    if ($(_id).is(":visible")) {
        $(_id).slideUp("fast");
    } else {
        $(".socialMobile-group").each(function () {
            $(this).slideUp("fast");
        });
        $(_id).slideToggle("fast").addClass("active");
    }
});

/* Burger Menu */
// $(".burger-icon").on("click", function () {
//     if (!$("body").hasClass("menu-open")) {
//         $("body").addClass("menu-open");
//     }
// });

if ($("body").hasClass("homepage")) {
    $("body").css("--home-header", $(".homepage-intro").height() + "px");
    var lastWidth = $(window).width();
    $(window).resize(function () {
        if ($(window).width() != lastWidth) {
            $("body").css(
                "--home-header",
                $(".homepage-intro").height() + "px"
            );
        }
    });
}
$(".directory-popup").magnificPopup({
    type: "image",
    mainClass: "popup-container",
    closeBtnInside: false,
    closeMarkup:
        '<button title="%title%" type="button" class="mfp-close"><i class="ic ic-close"></i></button>',
    callbacks: {
        open: function () {
            $("body").attr("data-lenis-prevent", "");
            $("body").addClass("overflow-hidden");
        },
        close: function () {
            $("body").removeAttr("data-lenis-prevent");
            $("body").removeClass("overflow-hidden");
        },
    },
});

/* PAGE LOAD */
jQuery(function ($) {
    if ($(".wow").length) {
        var wow = new WOW();
        wow.init();
    }
    if ($(".page-homepage").length) {
        function posLogo() {
            const nav_height = $(".homepage-intro")
                .find(".tab-wrapper")
                .outerHeight();
            const intro_height = $(".homepage-intro").outerHeight();
            $("#intro_logo").css("--calc-h", intro_height - nav_height + "px");
        }
        posLogo();
        $(window).resize(function () {
            posLogo();
        });

        $(function () {
            if ($("#intro_logo").length) {
                const nav_height = $(".homepage-intro")
                    .find(".tab-wrapper")
                    .outerHeight();
                const intro_height = $(".homepage-intro").outerHeight();
                const calc = intro_height - nav_height - 30;
                const start = "top " + calc + "px";
                const end = "44px " + calc + "px";
                let tl = gsap.timeline({
                    scrollTrigger: {
                        trigger: "#trigger_logo",
                        endTrigger: "#header-bound",
                        start: start,
                        end: end,
                        // markers: true,
                        pin: true,
                        scrub: true,
                        onLeave: () => {
                            $("#intro_logo img").addClass("completed");
                            $("#site_logo").addClass("active");
                        },
                        onEnterBack: () => {
                            $("#intro_logo img").removeClass("completed");
                            $("#site_logo").removeClass("active");
                        },
                    },
                });
                tl.to("#intro_logo img", 1, {
                    width: "auto",
                    height: "60px",
                    opacity: "1",
                });
            }
        });
    } else {
        $("#site_logo").addClass("active");
    }
});

/* WINDOW RESIZE */
jQuery(function ($) {
    //VIDEO
    function vdoChange(Obj) {
        vdo = $(Obj);
        vdoSrc = $(Obj).data("vdo-src");
        vdoSrcset =
            typeof $(Obj).data("vdo-srcset") != "undefined"
                ? $(Obj).data("vdo-srcset")
                : "";

        var width = $(document).width();
        if (width < 992 && vdoSrcset != "") {
            vdo.attr("src", vdoSrcset);
        } else {
            vdo.attr("src", vdoSrc);
        }
    }
    function vdoChangeInit() {
        $(".vdojs").each(function () {
            var Obj = $(this);
            vdoChange(Obj);
        });
    }
    vdoChangeInit();
    //Detect window width change (not height change)
    var lastWidth = $(window).width();
    $(window).resize(function () {
        if ($(window).width() != lastWidth) {
            vdoChangeInit();
        }
    });
});

/* FORM */
jQuery(function ($) {
    //INPUT
    var formElement = $("input, textarea, select");
    formElement.focusin(function () {
        $(this).closest(".input-group").addClass("filled");
    });
    formElement.focusout(function () {
        if (!$(this).val()) {
            $(this).closest(".input-group").removeClass("filled");
        }
    });
    setTimeout(function () {
        formElement.each(function () {
            if ($(this).is(":-webkit-autofill")) {
                $(this).closest(".input-group").addClass("filled");
            } else {
                $(this).closest(".input-group").removeClass("filled");
            }
            if (!$(this).val()) {
                $(this).closest(".input-group").removeClass("filled");
            } else {
                $(this).closest(".input-group").addClass("filled");
            }
        });
    }, 100);

    // $( "#datepicker" ).datepicker({
    //     dateFormat: "d/m/y",
    //     changeMonth: true,
    //     changeYear: true,
    //     onSelect: function(selected,evnt) {
    //         $(this).parents('.input-group').addClass('filled');
    //     },
    // });

    //SELECT
    $(".select").each(function () {
        var selectParent = $(this),
            select = $(this).find(".select2"),
            select2fixed = $(this).find(".select2-fixed");
        var select2Other = $(this).find(".select2.other");

        var query = {};
        function markMatch(text, term) {
            var match = text.toUpperCase().indexOf(term.toUpperCase());

            var $result = $("<span></span>");

            if (match < 0) {
                return $result.text(text);
            }

            $result.text(text.substring(0, match));

            var $match = $('<span class="select2-rendered__match"></span>');
            $match.text(text.substring(match, match + term.length));

            $result.append($match);

            $result.append(text.substring(match + term.length));

            return $result;
        }

        select
            .select2({
                width: "100%",
                minimumResultsForSearch: -1,
                dropdownParent: selectParent,
                tags: select2Other ? true : null,
                tokenSeparators: select2Other ? [",", " "] : null,
                templateResult: function (item) {
                    if (item.loading) {
                        return item.text;
                    }

                    var term = query.term || "";
                    var $result = markMatch(item.text, term);

                    return $result;
                },
                language: {
                    searching: function (params) {
                        query = params;
                        return "Searching...";
                    },
                },
            })
            .on("select2:select", function (e) {
                selectParent.closest(".input-group").addClass("filled");
            })
            .on("select2:unselect", function (e) {
                selectParent.closest(".input-group").removeClass("filled");
            })
            .on("select2:open", function (e) {
                selectParent
                    .find(".select2-results__options")
                    .attr("data-lenis-prevent", "");
            });

        if (select.hasClass("promotion-select")) {
            select.on("select2:select", function (e) {
                select
                    .parents(".promotion-wrapper")
                    .find(".promoGroup-container.active")
                    .removeClass("active");
                select
                    .parents(".promotion-wrapper")
                    .find(
                        '.promoGroup-container[data-id="' + select.val() + '"]'
                    )
                    .addClass("active");
            });
        }

        if (select.hasClass("happening-select")) {
            select.on("select2:select", function (e) {
                const selectBranch = ".tab-content#" + select.val();

                select
                    .closest(".happening-section")
                    .find(".tab-content")
                    .removeClass("active");
                select
                    .closest(".happening-section")
                    .find(selectBranch)
                    .addClass("active")
                    .find(".happening-container .tab-content")
                    .first()
                    .addClass("active");
            });
        }
        if (select.hasClass("branch-select")) {
            select.on("select2:select", function (e) {
                const selectBranch = ".tab-content#" + select.val();

                select
                    .closest("*[class*='-section']")
                    .find(".tab-content")
                    .removeClass("active");
                select
                    .closest("*[class*='-section']")
                    .find(selectBranch)
                    .addClass("active");

                // scroll down 1 px
                var scroll = $(window).scrollTop();
                $(window).scrollTop(scroll + 1);
            });
        }

        if (select.hasClass("retail-space-select")) {
            select.on("select2:select", function (e) {
                const selectBranch = ".tab-content#" + select.val();

                select
                    .closest("*[class*='-section']")
                    .find(".tab-content")
                    .removeClass("active");
                select
                    .closest("*[class*='-section']")
                    .find(selectBranch)
                    .addClass("active");
            });
        }

        if (select.hasClass("select-branch")) {
            select.on("select2:select", function (e) {
                select
                    .parents(".directory-select")
                    .find(".floorSelect-item.active")
                    .removeClass("active");
                select
                    .parents(".grid-directory")
                    .find(".directory-store .directoryContent-item.active")
                    .removeClass("active");
                select
                    .parents(".grid-directory")
                    .find(".directory-maps .mapsContent-item.active")
                    .removeClass("active");

                select
                    .parents(".directory-select")
                    .find('.floorSelect-item[data-id="' + select.val() + '"]')
                    .addClass("active");
                select
                    .parents(".grid-directory")
                    .find(
                        '.directory-store .directoryContent-item[data-id="' +
                            select.val() +
                            '"]'
                    )
                    .addClass("active");
                select
                    .parents(".grid-directory")
                    .find(
                        '.directory-maps .mapsContent-item[data-id="' +
                            select.val() +
                            '"]'
                    )
                    .addClass("active");
            });
        }

        if (select.hasClass("select-floor")) {
            select.on("select2:select", function (e) {
                const branch_id = select
                    .parents(".floorSelect-item")
                    .data("id");
                select
                    .parents(".grid-directory")
                    .find(
                        '.directoryContent-item[data-id="' +
                            branch_id +
                            '"] .tab-content.active'
                    )
                    .removeClass("active");
                select
                    .parents(".grid-directory")
                    .find(
                        '.directoryContent-item[data-id="' +
                            branch_id +
                            '"] .tab-content[data-floor="' +
                            select.val() +
                            '"]'
                    )
                    .addClass("active");
                select
                    .parents(".grid-directory")
                    .find(
                        '.mapsContent-item[data-id="' +
                            branch_id +
                            '"] .tab-content.active'
                    )
                    .removeClass("active");
                select
                    .parents(".grid-directory")
                    .find(
                        '.mapsContent-item[data-id="' +
                            branch_id +
                            '"] .tab-content[data-floor="' +
                            select.val() +
                            '"]'
                    )
                    .addClass("active");
            });
        }

        select2fixed
            .select2({
                width: "100%",
                minimumResultsForSearch: -1,
                dropdownParent: selectParent,
                templateResult: function (item) {
                    if (item.loading) {
                        return item.text;
                    }

                    var term = query.term || "";
                    var $result = markMatch(item.text, term);

                    return $result;
                },
                language: {
                    searching: function (params) {
                        query = params;
                        return "Searching...";
                    },
                },
            })
            .on("select2:select", function (e) {
                selectParent.closest(".input-group").addClass("filled");
            })
            .on("select2:unselect", function (e) {
                selectParent.closest(".input-group").removeClass("filled");
            })
            .on("select2:open", function (e) {
                selectParent
                    .find(".select2-results__options")
                    .attr("data-lenis-prevent", "");
            });

        select.closest(".select").addClass("select2-parent");
        select2fixed.closest(".select").addClass("select2-parent");

        // if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        //     select.select2("destroy");
        //     select.closest(".select").removeClass("select2-parent");
        // }

        $(this)
            .find("select")
            .click(function () {
                if ($(this)[0].selectedIndex < 0) {
                    selectParent.closest(".input-group").removeClass("filled");
                } else {
                    selectParent.closest(".input-group").addClass("filled");
                }
            });
    });
});

/* UPLOAD FILE */
jQuery(function ($) {
    // Browser supports HTML5 multiple file?
    var multipleSupport = typeof $("<input/>")[0].multiple !== "undefined",
        isIE = /msie/i.test(navigator.userAgent);

    $.fn.customFile = function () {
        return this.each(function () {
            var _txtP;
            var _txtB;

            if (
                typeof $(this)
                    .closest(".custom-file-upload")
                    .data("placeholder") != "undefined"
                    ? $(this).closest(".custom-file-upload").data("placeholder")
                    : ""
            ) {
                _txtP = $(this)
                    .closest(".custom-file-upload")
                    .data("placeholder");
            } else {
                _txtP = "";
            }

            if (
                typeof $(this).closest(".custom-file-upload").data("button") !=
                "undefined"
                    ? $(this).closest(".custom-file-upload").data("button")
                    : ""
            ) {
                var _txtB = $(this)
                    .closest(".custom-file-upload")
                    .data("button");
            } else {
                // var _txtB = '<i class="ic ic-upload"></i>';
                var _txtB = "<p>เลือกไฟล์</p>";
            }

            var $file = $(this).addClass("custom-file-upload-hidden"),
                $wrap = $('<div class="file-upload-wrapper">'),
                $input = $(
                    '<input type="text" class="file-upload-input" placeholder="' +
                        _txtP +
                        '" readonly />'
                ),
                $button = $(
                    '<div class="file-upload-action"><button type="button" class="file-upload-button">' +
                        _txtB +
                        "</button><p>ขนาดไฟล์สูงสุด: 3 MB. และอนุญาตเฉพาะไฟล์นามสกุล .jpg และ. png</p></div>"
                ),
                $label = $(
                    '<div class="file-upload-action"><label class="file-upload-button" for="' +
                        $file[0].id +
                        '">' +
                        $(this).closest(".custom-file-upload").data("button") +
                        "</label></div>"
                );

            $file.css({
                position: "absolute",
                left: "-9999px",
            });

            $wrap
                .insertAfter($file)
                .append($file, $input, isIE ? $label : $button);

            $file.attr("tabIndex", -1);
            $button.attr("tabIndex", -1);

            $button.click(function () {
                $file.focus().click();
            });

            $input.click(function () {
                $file.focus().click();
            });

            $file.change(function () {
                var files = [],
                    fileArr,
                    filename;

                if (multipleSupport) {
                    fileArr = $file[0].files;
                    for (var i = 0, len = fileArr.length; i < len; i++) {
                        files.push(fileArr[i].name);
                    }
                    filename = files.join(", ");
                } else {
                    filename = $file.val().split("\\").pop();
                }

                $input.val(filename).attr("title", filename).focus();

                $input.closest(".input-group").addClass("filled");
            });

            $input.on({
                blur: function () {
                    $file.trigger("blur");
                },
                keydown: function (e) {
                    if (e.which === 13) {
                        // Enter
                        if (!isIE) {
                            $file.trigger("click");
                        }
                    } else if (e.which === 8 || e.which === 46) {
                        $file.replaceWith(($file = $file.clone(true)));
                        $file.trigger("change");
                        $input.val("");
                    } else if (e.which === 9) {
                        return;
                    } else {
                        return false;
                    }
                },
            });
        });
    };

    // Old browser fallback
    if (!multipleSupport) {
        $(document).on("change", "input.customfile", function () {
            var _this = $(this),
                uniqId = "customfile_" + new Date().getTime(),
                $wrap = _this.parent(),
                $inputs = $wrap
                    .siblings()
                    .find(".file-upload-input")
                    .filter(function () {
                        return !this.value;
                    }),
                $file = $(
                    '<input type="file" id="' +
                        uniqId +
                        '" name="' +
                        _this.attr("name") +
                        '"/>'
                );

            setTimeout(function () {
                if (_this.val()) {
                    if (!$inputs.length) {
                        $wrap.after($file);
                        $file.customFile();
                    }
                } else {
                    $inputs.parent().remove();
                    $wrap.appendTo($wrap.parent());
                    $wrap.find("input").focus();
                }
            }, 1);
        });
    }

    $("input[type=file]").customFile();
});

/* TAB */
jQuery(function ($) {
    var tabGroupParent = null;
    var h = 0;

    function tabActive(elem) {
        var tabGroupParent = $(elem).parents(".tab-container");

        if (tabGroupParent.find(".tab-dropdown-ctrl").length) {
            tabGroupParent
                .find(".tab-dropdown-ctrl .value")
                .text(tabGroupParent.find(".tab a.active", this).text());
        }

        if (tabGroupParent.find(".tab-content.active video").length) {
            tabGroupParent.find(".tab-content.active video").each(function () {
                $(this).get(0).play();
                $(this).get(0).currentTime = 0;
            });
        } else {
            tabGroupParent
                .find('.tab-content:not(".active") video')
                .each(function () {
                    $(this).get(0).pause();
                    $(this).get(0).currentTime = 0;
                });
        }
    }
    tabActive();

    function showTab(elem) {
        $(elem)
            .closest(".tab-container")
            .find(".tab-content")
            .filter(function () {
                return !$(this).hasClass("nested-tab");
            })
            .removeClass("active");
        $(elem + ".tab-content").addClass("active");

        // scroll down 1 px
        if (!$(elem).parents(".tab-container").hasClass("no-wow")) {
            var scroll = $(window).scrollTop();
            $(window).scrollTop(scroll + 1);
        }

        tabActive(elem);

        // $("html,body").animate({scrollTop: $(elem).offset().top - h }, 800, 'linear');
    }

    function showTabWithinContainer(tabId, container) {
        var tabContainer = $(container);

        tabContainer
            .find(".tab-content")
            .filter(function () {
                return !$(this).hasClass("nested-tab");
            })
            .removeClass("active");

        tabContainer.find(`.tab-content${tabId}`).addClass("active");
    }

    $(".tab-hover .tab-hover-link").hover(function (e) {
        e.preventDefault();
        var _id = $(this).data("tab-id");

        const tabContainer = $(this).closest(".homepage-intro");
        showTabWithinContainer(_id, tabContainer);

        $(".tab-hover .tab-hover-link").removeClass("active");

        $(this).addClass("active");

        $(".tab-hover > li").removeClass("active-parent");

        $(this).parent("li").addClass("active-parent");

        // Slide up all other ul elements in the same level
        $(this).parent().siblings().find("> ul").slideUp(300);

        // Slide down the ul within the current li
        $(this).parent().find("> ul").slideDown(300);
    });

    if ($(".homepage-intro").length) {
        setTimeout(function () {
            $(".homepage-intro .tab-wrapper .tab-hover")
                .children()
                .first()
                .find("a")
                .addClass("active");
        }, 1000);

        function autoAddClass() {
            var current = $(".tab-hover li a.active");

            current.removeClass("active");

            var next = current.parent().next();
            if (!next.length) {
                next = $(".tab-hover li").first();
            }

            var _id = next.find("a").data("tab-id");

            const tabContainer = current.closest(".homepage-intro");
            showTabWithinContainer(_id, tabContainer);

            next.find("a").addClass("active");

            const autoTimeout = setTimeout(autoAddClass, 3000);

            $(".homepage-intro .tab-hover a").on("mouseenter", function () {
                clearTimeout(autoTimeout);
            });
        }
        autoAddClass();
    }

    $(".tab-link").click(function (e) {
        e.preventDefault();
        var _id = $(this).attr("href");

        showTab(_id);

        $(this)
            .parents(".tab-container")
            .find(".tab-link")
            .removeClass("active");
        $(this)
            .parents(".tab-container")
            .find('.tab-link[href="' + _id + '"]')
            .addClass("active");

        $(this)
            .parents(".tab-container")
            .find(".tab > li")
            .removeClass("active-parent");
        $(this)
            .parents(".tab-container")
            .find('.tab-link[href="' + _id + '"]')
            .parent("li")
            .addClass("active-parent");

        $(this).parent().siblings().find("> ul").slideUp(300);
        $(this).parent().find("> ul").slideDown(300);
    });

    if ($(".tab").find("li").length) {
        $(".tab li").each(function () {
            if ($(this).find("> a.active").length) {
                $(this).addClass("active-parent");

                $(this).siblings().find("> ul").slideUp(300);
                $(this).find("> ul").slideDown(300);
            } else {
                $(this).removeClass("active-parent");
            }
        });
    }

    if (window.location.hash) {
        $('.tab-link[href="' + window.location.hash + '"]').click();
    }

    var getUrlParameter = function getUrlParameter(sParam) {
        var sPageURL = window.location.search.substring(1),
            sURLVariables = sPageURL.split("&"),
            sParameterName,
            i;
        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split("=");

            if (sParameterName[0] === sParam) {
                return sParameterName[1] === undefined
                    ? true
                    : decodeURIComponent(sParameterName[1]);
            }
        }
        return false;
    };
    var tabid = getUrlParameter("id");
    if (tabid) {
        var _parent = $('.tab-link[href="#' + tabid + '"]').parents(
            ".tab-container"
        );
        _parent.find(".tab-link").removeClass("active");
        _parent.find('.tab-link[href="#' + tabid + '"]').addClass("active");
        _parent.find(".tab-content").removeClass("active");
        _parent.find(".tab-content#" + tabid).addClass("active");
    }

    $(".tab-dropdown").each(function () {
        var _this = $(this);

        _this
            .find(".tab-dropdown-ctrl .value")
            .text(_this.find(".tab-link.active", this).text());
        _this.find(".tab-link").click(function () {
            _this
                .find(".tab-dropdown-ctrl .value")
                .text(_this.find(".tab-link.active", this).text());
        });

        _this.find("> .tab-dropdown-ctrl").click(function () {
            $(this).parent().toggleClass("active");
            $(this).parent().find("> .tab-dropdown-panel").fadeToggle(200);
        });

        _this.click(function (e) {
            e.stopPropagation();
        });
    });

    $("body, .tab a, .fn-ctrl").click(function () {
        $(".tab-dropdown").removeClass("active");
        $(".tab-dropdown-panel").fadeOut(100);
    });

    if ($(".sc-tab.sticky").length) {
        var bound = $(".sc-tab-bound"),
            _alloc = true;
        function tabStickyScroll() {
            //start
            var _pY = $(window).scrollTop(),
                _top = bound.offset().top;
            if (_pY > _top) {
                if (_alloc) {
                    _alloc = false;
                    $("html").addClass("sc-sticky-start");
                }
            } else {
                if (!_alloc) {
                    _alloc = true;
                    $("html").removeClass("sc-sticky-start");
                }
            }
        }
        tabStickyScroll();
        $(window).scroll(tabStickyScroll);

        function tabStickyHeight() {
            $(".sc-tab.sticky").each(function () {
                $(this)
                    .siblings(".sc-tab-content")
                    .css("--top", $(this).find(".tab").outerHeight() + "px");
            });
        }
        tabStickyHeight();
        $(window).resize(function () {
            tabStickyHeight();
        });
    }
});

/* ACCORDION */
jQuery(function ($) {
    $(".accordion-container").each(function () {
        $(this)
            .find(".accordion")
            .each(function () {
                var _this = $(this);
                var _parent = $(this).parent();

                var h = $(window).outerHeight() / 4;

                _this.find("> .entry-title").click(function () {
                    var _thisParent = $(this).parent();

                    var neighbor = _thisParent.siblings(),
                        neighborContent = neighbor.find("> .entry-panel");

                    if (_parent.hasClass("toggle")) {
                        neighbor.removeClass("active");
                        neighborContent.slideUp(200);

                        _thisParent.toggleClass("active");
                        _thisParent.find("> .entry-panel").slideToggle(200);

                        setTimeout(function () {
                            if (
                                _thisParent
                                    .find("> .entry-panel")
                                    .is(":visible")
                            ) {
                                $("html,body").animate(
                                    {
                                        scrollTop: _thisParent.offset().top - h,
                                    },
                                    800,
                                    "linear"
                                );
                            } else {
                                $("html,body").animate(
                                    {
                                        scrollTop: _thisParent.offset().top - h,
                                    },
                                    800,
                                    "linear"
                                );
                            }
                        }, 250);
                    } else {
                        _thisParent.toggleClass("active");
                        _thisParent.find("> .entry-panel").slideToggle(200);
                    }
                });
            });

        if ($(this).hasClass("trigger-first")) {
            $(this).find("> .accordion:first-child").addClass("active");
            $(this).find("> .accordion:first-child > .entry-panel").show();
        }
    });
});

/* LOCATION HASH */
jQuery(function ($) {
    setTimeout(function () {
        var h = $(window).outerHeight() / 4;
        if (window.location.hash) {
            $("html, body")
                .delay(100)
                .animate(
                    {
                        scrollTop: $(window.location.hash).offset().top - h,
                    },
                    800,
                    "linear"
                );
        }
    }, 100);
});

/* LINK SCROLL */
jQuery(function ($) {
    $(".link-scroll").click(function () {
        if (
            location.pathname.replace(/^\//, "") ==
                this.pathname.replace(/^\//, "") &&
            location.hostname == this.hostname
        ) {
            var h = $(window).outerHeight() / 4;
            var target = $(this.hash);
            target = target.length
                ? target
                : $("[name=" + this.hash.slice(1) + "]");
            if (target.length) {
                $("html, body").animate(
                    {
                        scrollTop: target.offset().top - h,
                    },
                    800,
                    "linear"
                );
                return false;
            }
        }
    });
});

/* BACK TO TOP */
jQuery(function ($) {
    $(".backtotop").click(function (e) {
        e.preventDefault();
        console.log("top");
        $("html, body").animate({ scrollTop: 0 }, 800, "linear");
    });
});

/* VENDOR */
jQuery(function ($) {
    if ($(".text-marquee").length) {
        $(".text-marquee").each(function () {
            $(this).liMarquee({
                circular: true,
                startShow: true,
                scrollStop: false,
                hoverStop: false,
            });
        });
    }
    //liMarquee
    if ($(".logo-marquee").length) {
        $(".logo-marquee").each(function () {
            const logo_count = $(this).find("img").length;
            const largeMarquee = $(this).hasClass("large");
            const maxLogo = largeMarquee ? 5 : 3;
            if (logo_count > maxLogo || $(window).width() < 768) {
                $(this).liMarquee({
                    circular: true,
                    startShow: true,
                    scrollStop: false,
                });
            } else {
                $(this).parent().addClass("logo-static");
            }
        });
    }

    if ($("#header-bound").length) {
        $("html").addClass("header-bound");
        var bound = $("#header-bound"),
            _alloc = true;
        function moveScroll() {
            var _pY = $(window).scrollTop(),
                _top = bound.offset().top;
            if (_pY < _top) {
                if (_alloc) {
                    _alloc = false;
                    $("html").removeClass("header-bound");
                }
            } else {
                if (!_alloc) {
                    _alloc = true;
                    $("html").addClass("header-bound");
                }
            }
        }
        moveScroll();
        $(window).scroll(moveScroll);
    }

    if ($(".happening-container").length) {
        $(".happening-container").each(function () {
            var _this_thumb = $(this).find(".swiper-happeningThumb");

            const happening_thumb = new Swiper(_this_thumb[0], {
                slidesPerView: "auto",
                loop: false,
                loopedSlides: 14,
                centeredSlides: true,
                slideToClickedSlide: true,
                watchSlidesVisibility: true,
                watchSlidesProgress: true,
                on: {
                    slideChange: function () {
                        const activeDate =
                            this.slides[this.activeIndex].getAttribute(
                                "data-target-date"
                            );
                        $(this.el)
                            .closest(".happening-container")
                            .find(".tab-content")
                            .removeClass("active");
                        $(this.el)
                            .closest(".happening-container")
                            .find(".tab-content#" + activeDate)
                            .addClass("active");
                    },
                },
            });

            $(this)
                .find(".tab-content")
                .each(function () {
                    var _this_nested = $(this).find(".swiper.nested-swiper");
                    var dateId = $(this).attr("id");

                    var slidePagination = `.swiper-pagination-${dateId}`,
                        slideButtonNext = `.swiper-button-next-${dateId}`,
                        slideButtonPrev = `.swiper-button-prev-${dateId}`;

                    const nested_happening = new Swiper(_this_nested[0], {
                        pagination: {
                            el: slidePagination,
                            type: "bullets",
                            clickable: true,
                        },
                        effect: "fade",
                        spaceBetween: 0,
                        slidesPerView: 1,
                        loop: false,
                        loopedSlides: 14,
                        centeredSlides: true,
                        slideToClickedSlide: true,
                        watchSlidesVisibility: true,
                        watchSlidesProgress: true,
                        navigation: {
                            nextEl: slideButtonNext,
                            prevEl: slideButtonPrev,
                        },
                    });
                });

            $(this)
                .find(".swiper-happeningThumb .swiper-slide")
                .on("click", function () {
                    const targetDate = $(this).data("target-date");
                    $(this)
                        .closest(".happening-container")
                        .find(".tab-content")
                        .removeClass("active");
                    $(this)
                        .closest(".happening-container")
                        .find(".tab-content#" + targetDate)
                        .addClass("active");
                });
        });
    }

    if ($(".swiper-update").length) {
        const swiper_update = new Swiper(".swiper-update", {
            loop: true,
            autoplay: {
                delay: 1,
                disableOnInteraction: true,
            },
            slidesPerView: "auto",
            speed: 3000,
            navigation: {
                nextEl: ".swiper-update .swiper-button-next",
                prevEl: ".swiper-update .swiper-button-prev",
            },
            pagination: {
                el: ".swiper-update .swiper-pagination",
                type: "bullets",
                clickable: true,
            },
            on: {
                init: function () {
                    this.on("click", function () {
                        this.params.speed = 400;
                        setTimeout(
                            function () {
                                this.params.speed = 3000;
                                this.autoplay.start();
                            }.bind(this),
                            3000
                        );
                    });

                    // Event handler for 'touchStart'
                    this.on("touchStart", function () {
                        this.params.speed = 400;
                        setTimeout(
                            function () {
                                this.params.speed = 3000;
                                this.autoplay.start();
                            }.bind(this),
                            3000
                        );
                    });
                },
            },
        });
    }

    // Set nav align with thumb
    function alignThumb() {
        $(".swiper-container.align-thumb").each(function () {
            const thumb_h = $(this)
                .find(".swiper-slide .media-wrapper")
                .height();
            $(this)
                .find(".swiper-nav")
                .css("height", thumb_h + "px");
        });
    }
    if ($(".swiper-container.align-thumb").length) {
        alignThumb();
    }

    $(window).resize(function () {
        alignThumb();
    });

    //SLIDER(DEFAULT)
    if ($(".swiper.default").length) {
        $(".swiper.default").each(function () {
            var _this = $(this);

            //CONTROLS
            var slidePagination = _this.find(".swiper-pagination")[0],
                slideButtonNext = _this.find(".swiper-button-next")[0],
                slideButtonPrev = _this.find(".swiper-button-prev")[0];

            var slideButtonNextParent = $(this)
                    .parents('*[class*="swiper-container"]')
                    .find(".swiper-button-next")[0],
                slideButtonPrevParent = $(this)
                    .parents('*[class*="swiper-container"]')
                    .find(".swiper-button-prev")[0];

            //MODULES
            var slideFade = _this.hasClass("fade"),
                slideLoop = _this.hasClass("loop"),
                slideAutoplay = _this.hasClass("autoplay"),
                slidePause = _this.hasClass("pause");

            //CHECK
            var slideTotal = _this.find(".swiper-slide").length;

            function vdoData() {
                if (_this.find("video").length) {
                    _this.find("video[autoplay]").each(function () {
                        var vdo = $(this);
                        vdo.get(0).preload = "metadata";
                        vdo.get(0).onloadedmetadata = function () {
                            var vdoTime = (vdo.get(0).duration - 2) * 1000;
                            vdo.closest(".swiper-slide").attr(
                                "data-swiper-autoplay",
                                vdoTime
                            );

                            if ($(document).width() < 992) {
                                _this
                                    .find(".swiper-slide .visible-device-sm")
                                    .each(function () {
                                        if (
                                            !$(this).find("video[autoplay]")
                                                .length
                                        ) {
                                            $(this)
                                                .closest(".swiper-slide")
                                                .attr(
                                                    "data-swiper-autoplay",
                                                    "4000"
                                                );
                                        }
                                    });
                            } else {
                                _this
                                    .find(".swiper-slide .hidden-device-sm")
                                    .each(function () {
                                        if (
                                            !$(this).find("video[autoplay]")
                                                .length
                                        ) {
                                            $(this)
                                                .closest(".swiper-slide")
                                                .attr(
                                                    "data-swiper-autoplay",
                                                    "4000"
                                                );
                                        }
                                    });
                            }
                        };
                    });
                }
            }
            vdoData();

            //INITIALIZE
            const swiper = new Swiper(_this[0], {
                resistanceRatio: 0,
                spaceBetween: 0,
                pagination: {
                    el: slidePagination,
                    type: "bullets",
                    clickable: true,
                },
                navigation: {
                    nextEl: slideButtonNext || slideButtonNextParent,
                    prevEl: slideButtonPrev || slideButtonPrevParent,
                },
                effect: slideFade ? "fade" : "slide",
                fadeEffect: {
                    crossFade: slideFade,
                },
                loop: slideLoop && slideTotal > 1,
                speed: 1000,
                longSwipesMs: 1000,
                autoplay: {
                    delay: 7000,
                    disableOnInteraction: false,
                },
                on: {
                    init: function () {
                        vdoData();

                        if (
                            _this.find(".swiper-slide-active video[autoplay]")
                                .length
                        ) {
                            _this
                                .find(".swiper-slide-active video[autoplay]")
                                .each(function () {
                                    $(this).get(0).play();
                                    $(this).get(0).currentTime = 0;
                                });
                        } else {
                            _this
                                .find(
                                    '.swiper-slide:not(".swiper-slide-active") video'
                                )
                                .each(function () {
                                    $(this).get(0).pause();
                                    $(this).get(0).currentTime = 0;
                                });
                        }
                    },
                    resize: function () {
                        vdoData();
                    },
                },
                init: false,
            });

            swiper.on("slideChangeTransitionStart", function () {
                if (_this.find(".swiper-slide-active video[autoplay]").length) {
                    _this
                        .find(".swiper-slide-active video[autoplay]")
                        .each(function () {
                            $(this).get(0).play();
                            $(this).get(0).currentTime = 0;
                        });
                }
            });

            swiper.on("slideChangeTransitionEnd", function () {
                if (
                    _this.find(
                        '.swiper-slide:not(".swiper-slide-active") video'
                    ).length
                ) {
                    _this
                        .find('.swiper-slide:not(".swiper-slide-active") video')
                        .each(function () {
                            $(this).get(0).pause();
                            $(this).get(0).currentTime = 0;
                        });
                }
            });

            if (slidePause) {
                _this
                    .mouseenter(function () {
                        swiper.autoplay.stop();
                    })
                    .mouseleave(function () {
                        swiper.autoplay.start();
                    });
            }

            setTimeout(function () {
                swiper.init();
                if (!slideAutoplay) {
                    swiper.autoplay.stop();
                } else {
                    if ($("html").hasClass("page-loading-html")) {
                        swiper.autoplay.stop();
                        setInterval(() => {
                            if ($("html").hasClass("loaded")) {
                                swiper.autoplay.start();
                            }
                        }, 50);
                    } else {
                        setTimeout(function () {
                            swiper.autoplay.start();
                        }, 100);
                    }
                }
            }, 100);

            if (_this.hasClass("fix")) {
                _this
                    .closest('*[class*="swiper-container"]')
                    .find('*[class*="swiper-button-"]')
                    .css(
                        "height",
                        _this.find('[class*="object"]').outerHeight()
                    );
                $(window).resize(function () {
                    _this
                        .closest('*[class*="swiper-container"]')
                        .find('*[class*="swiper-button-"]')
                        .css(
                            "height",
                            _this.find('[class*="object"]').outerHeight()
                        );
                });
            }
        });
    }

    if ($(".swiper-promo").length) {
        $(".swiper-promo").each(function () {
            var _this = $(this);

            const swiper_promo = new Swiper(_this[0], {
                loop: true,
                spaceBetween: 0,
                effect: "slide",
                speed: 3000,
                autoplay: {
                    delay: 1,
                    disableOnInteraction: true,
                },
                slidesPerView: "auto",
            });
            swiper_promo.on("click", function () {
                swiper_promo.params.speed = 400;
                setTimeout(function () {
                    swiper_promo.params.speed = 3000;
                    swiper_promo.autoplay.start();
                }, 3000);
            });
            swiper_promo.on("touchStart", function () {
                swiper_promo.params.speed = 400;
                setTimeout(function () {
                    swiper_promo.params.speed = 3000;
                    swiper_promo.autoplay.start();
                }, 3000);
            });
        });
    }
    //SLIDER(AUTO)
    if ($(".swiper.auto").length) {
        $(".swiper.auto").each(function () {
            var _this = $(this);

            //CONTROLS
            var slidePagination = _this.find(".swiper-pagination")[0],
                slideButtonNext = _this.find(".swiper-button-next")[0],
                slideButtonPrev = _this.find(".swiper-button-prev")[0];

            var slideButtonNextParent = $(this)
                    .parents('*[class*="swiper-container"]')
                    .find(".swiper-button-next")[0],
                slideButtonPrevParent = $(this)
                    .parents('*[class*="swiper-container"]')
                    .find(".swiper-button-prev")[0];

            //MODULES
            var slideCentered = _this.hasClass("centered"),
                slideCenteredMobile = _this.hasClass("centered-m"),
                slideCenterInsufficient = _this.hasClass("insufficient"),
                slideLoop = _this.hasClass("loop"),
                slideAutoplay = _this.hasClass("autoplay"),
                slideClicked = _this.hasClass("clicked"),
                slidePause = _this.hasClass("pause"),
                fade = _this.hasClass("fade");

            //CHECK
            var slideTotal = _this.find(".swiper-slide").length;

            //INITIALIZE
            const swiper = new Swiper(_this[0], {
                //resistanceRatio: 0,
                spaceBetween: 0,
                grabCursor: true,
                pagination: {
                    el: slidePagination,
                    type: "bullets",
                    clickable: true,
                },
                navigation: {
                    nextEl: slideButtonNext || slideButtonNextParent,
                    prevEl: slideButtonPrev || slideButtonPrevParent,
                },
                effect: fade ? "fade" : "slide",
                loop: slideLoop && slideTotal > 1,
                speed: 1400,
                longSwipesMs: 1400,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false,
                },
                slidesPerView: "auto",
                centeredSlides: slideCenteredMobile,
                centerInsufficientSlides: slideCenterInsufficient,
                slideToClickedSlide: slideClicked,
                watchSlidesProgress: true,
                watchSlidesVisibility: true,
                breakpoints: {
                    992: {
                        centeredSlides: slideCentered,
                    },
                },
            });

            if (!slideAutoplay) {
                swiper.autoplay.stop();
            } else {
                if ($("html").hasClass("page-loading-html")) {
                    swiper.autoplay.stop();
                    setInterval(() => {
                        if ($("html").hasClass("loaded")) {
                            swiper.autoplay.start();
                        }
                    }, 50);
                } else {
                    swiper.autoplay.start();
                }
            }

            if (slidePause) {
                _this
                    .mouseenter(function () {
                        swiper.autoplay.stop();
                    })
                    .mouseleave(function () {
                        swiper.autoplay.start();
                    });
            }

            swiper.on("transitionStart", function () {
                _this.parent().addClass("beginning");
            });

            if (_this.hasClass("fix")) {
                _this
                    .closest('*[class*="swiper-container"]')
                    .find('*[class*="swiper-button-"]')
                    .css(
                        "height",
                        _this.find('[class*="object"]').outerHeight()
                    );
                $(window).resize(function () {
                    _this
                        .closest('*[class*="swiper-container"]')
                        .find('*[class*="swiper-button-"]')
                        .css(
                            "height",
                            _this.find('[class*="object"]').outerHeight()
                        );
                });
            }
        });
    }
});

jQuery(function ($) {
    // Check scroll for Header
    function headerScroll() {
        var _pY = $(window).scrollTop(),
            _top = $("header").height();
        if (_pY > _top) {
            $("html").addClass("header-scroll");
        } else {
            $("html").removeClass("header-scroll");
        }
    }
    headerScroll();
    $(window).scroll(headerScroll);

    if ($("#main").length) {
        var bound = $("#main"),
            _alloc = true;
        function moveScroll() {
            //start
            var _pY = $(window).scrollTop(),
                _top = bound.offset().top;
            if (_pY > _top) {
                if (_alloc) {
                    _alloc = false;
                    $("html").addClass("main-start");
                }
            } else {
                if (!_alloc) {
                    _alloc = true;
                    $("html").removeClass("main-start");
                }
            }
            //end
            var currentScrollOffset =
                $(document).scrollTop() + $(window).innerHeight();
            var effectiveHeight = bound.outerHeight() + bound.offset().top;
            if (currentScrollOffset < effectiveHeight) {
                //out of footer
                $("html").addClass("main-start");
                $("html").removeClass("main-end");
            } else {
                $("html").removeClass("main-start");
                $("html").addClass("main-end");
            }
        }
        moveScroll();
        $(window).scroll(moveScroll);
    }
});

/* VIDEO */
jQuery(function ($) {
    if ($(".wp-block-video").length) {
        $(".wp-block-video").each(function () {
            $(this).find("video").wrap('<div class="video"></div>');
        });
    }

    if ($(".video").length) {
        $(".video").each(function () {
            var _this = $(this);
            var vdo = $(this).find("video");
            var ctrlOverlaidPlay = $(this).find(".ctrls-overlaid .play");
            var ctrlOverlaidPause = $(this).find(".ctrls-overlaid .pause");

            $(this).find("video[autoplay]").parent().addClass("playing");

            ctrlOverlaidPlay.click(function () {
                vdo.get(0).play();
                _this.addClass("playing");
            });
            ctrlOverlaidPause.click(function () {
                vdo.get(0).pause();
                _this.removeClass("playing");
            });

            //FIX SAFARI
            if (!$(this).hasClass("hidden-ctrls")) {
                var _poster = vdo.attr("poster");
                if (typeof _poster !== "undefined" || _poster !== false) {
                    vdo.css({
                        "background-image": 'url("' + vdo.attr("poster") + '")',
                    });
                }
            }
        });
    }
});
document
    .querySelectorAll(".video video, .wp-block-video video")
    .forEach(function (item) {
        item.addEventListener("playing", function (e) {
            e.target.closest(".video").classList.add("playing");

            if (e.target.closest(".video").classList.contains("hidden-ctrls")) {
                e.target.removeAttribute("controls");
            } else {
                e.target.setAttribute("controls", "");
            }
        });

        item.addEventListener("pause", function (e) {
            e.target.closest(".video").classList.remove("playing");
            e.target.removeAttribute("controls");
        });

        item.addEventListener("ended", function (e) {
            e.target.closest(".video").classList.remove("playing");
            e.target.src = "";
            e.target.src = e.target.currentSrc;
            e.target.removeAttribute("controls");
        });
    });

/* FORM */
jQuery(function ($) {
    //INPUT
    var formElement = $("input, textarea, select");
    formElement.focusin(function () {
        $(this).closest(".input").addClass("filled");
    });
    formElement.focusout(function () {
        if (!$(this).val()) {
            $(this).closest(".input").removeClass("filled");
        }
    });
    setTimeout(function () {
        formElement.each(function () {
            if ($(this).is(":-webkit-autofill")) {
                $(this).closest(".input").addClass("filled");
            } else {
                $(this).closest(".input").removeClass("filled");
            }
            if (!$(this).val()) {
                $(this).closest(".input").removeClass("filled");
            } else {
                $(this).closest(".input").addClass("filled");
            }
        });
    }, 100);
});

// LENIS
const lenis = new Lenis({ smooth: true });
lenis.on("scroll", (e) => {});
function raf(time) {
    lenis.raf(time);
    requestAnimationFrame(raf);
}
requestAnimationFrame(raf);

// HEADER
jQuery(function ($) {
    // LANG SELECT
    if ($(".lang-select").length) {
        function langSelectMenu() {
            if ($(window).width() > 1280) {
                $(".lang-select").on("mouseenter", function () {
                    $(this).addClass("active");

                    $("#header").on("mouseleave", function () {
                        $(".lang-select").removeClass("active");
                    });
                });
            } else {
                $(".lang-select").on("click", function (e) {
                    e.stopPropagation();
                    if ($(this).hasClass("active")) {
                        $(this).removeClass("active");
                    } else {
                        $(this).toggleClass("active");
                    }
                });

                $(document).on("click", function (e) {
                    if (!$(e.target).closest(".lang-select").length) {
                        $(".lang-select").removeClass("active");
                    }
                });
            }

            $(".option").on("click", function (e) {
                e.stopPropagation();
                const selectedFlag = $(this).data("flag");

                $(".lang-select .current-lang").attr("src", selectedFlag);

                $(".lang-select").removeClass("active");
            });
        }

        onWindowResize(langSelectMenu);
    }

    // SEARCH
    $(".header-search-trigger").on("click", function () {
        $("#header").addClass("search-active");
    });

    $(".header-search-close").on("click", function () {
        $("#header").removeClass("search-active");
    });

    // MENU TRIGGER
    function closeMenu() {
        $("html").removeClass("header-menu-enabled");
        $(".header-menu-trigger").removeClass("active");
        $("body").removeClass("menu-open");

        setTimeout(() => {
            $(".menu-tab").removeClass("active");
        }, 600);
    }

    $(".header-menu-trigger").on("click", function () {
        if ($(window).width() >= 1280) {
            if ($(this).hasClass("active")) {
                closeMenu();
                return;
            }
        } else {
            if ($("html").hasClass("header-menu-enabled")) {
                closeMenu();
                return;
            }
        }

        // HTML CLASS
        $("html").addClass("header-menu-enabled");
        if (
            !$("html").hasClass("header-bound") &&
            $("html .page-homepage").length
        ) {
            $("html, body").animate(
                {
                    scrollTop: $("#header-bound").offset().top,
                },
                300,
                "linear"
            );
        }

        // TRIGGER CLASS
        $(".header-menu-trigger").removeClass("active");
        $(this).addClass("active");

        // TAB CLASS
        const tabId = $(this).data("menu-trigger");
        $(".menu-tab").removeClass("active");
        $(".menu-tab." + tabId).addClass("active");
    });

    $(".menu-tab").on("click", function (e) {
        closeMenu();
    });
});

//POPUP
$(".open-popup-modal").magnificPopup({
    type: "inline",
    preloader: false,
    closeOnBgClick: true,
    mainClass: "popup-style popup-style-modal",
    showCloseBtn: true,
    closeBtnInside: true,
    removalDelay: 300,
    callbacks: {
        open: function () {
            $("html").addClass("plugin-mfp-enabled");
        },
        close: function () {
            $("html").removeClass("plugin-mfp-enabled");
        },
    },
});

// Initialize magnificPopup globally for the gallery items
$(".image-popup-no-margins").magnificPopup({
    type: "image",
    closeOnContentClick: true,
    closeBtnInside: false,
    fixedContentPos: true,
    mainClass: "mfp-no-margins mfp-with-zoom",
    image: {
        verticalFit: true,
    },
    zoom: {
        enabled: true,
        duration: 300,
    },
});

// LIMARQUEE;
jQuery(function ($) {
    if ($('*[data-js="liMarquee"]').length) {
        $('*[data-js="liMarquee"]:visible').each(function () {
            var _this = $(this);
            var marqueeWrapper = _this.closest(".marquee-wrapper");

            function init() {
                marqueeWrapper.liMarquee({
                    circular: true,
                    startShow: true,
                    scrollDelay: 150,
                    scrollStop: false,
                });
            }

            setTimeout(function () {
                init();
            }, 300);
        });
    }
});

jQuery(function ($) {
    // RELLAX
    if ($(".rellax").length) {
        new Rellax(".rellax", {
            center: true,
            speed: -1,
        });
    }
});

/* LOCATION HASH */
jQuery(function ($) {
    setTimeout(function () {
        var headerHeight =
            parseFloat(
                getComputedStyle(document.documentElement).getPropertyValue(
                    "--header-h"
                )
            ) || 0;
        if (window.location.hash) {
            $("html, body")
                .delay(100)
                .animate(
                    {
                        scrollTop:
                            $(window.location.hash).offset().top - headerHeight,
                    },
                    800
                );
        }
    }, 100);
});

jQuery(function ($) {
    $(".link-scroll").on("click", function (e) {
        e.preventDefault();

        var targetId = $(this).attr("href");

        if ($(targetId).length) {
            var targetOffset = $(targetId).offset().top;

            var headerHeight =
                parseFloat(
                    getComputedStyle(document.documentElement).getPropertyValue(
                        "--header-h"
                    )
                ) || 0;

            $("html, body").animate(
                {
                    scrollTop: targetOffset - headerHeight,
                },
                800,
                "linear"
            );
        }
    });
});

// MASONRY GRID
jQuery(function ($) {
    if ($(".masonry-grid").length) {
        $(".masonry-grid").each(function () {
            var _this = $(this);

            function initializeMasonry() {
                if (_this.data("masonry")) {
                    _this.masonry("destroy");
                }

                var isSmallScreen = window.innerWidth < 991;

                _this.masonry({
                    itemSelector: ".masonry-grid-item",
                    percentPosition: true,
                    horizontalOrder: !isSmallScreen,
                });
            }

            onWindowResize(initializeMasonry);

            _this.imagesLoaded().progress(function () {
                _this.masonry("layout");
            });
        });
    }
});

// DIRECTORY
jQuery(function ($) {
    if ($(".mapsContent-container")) {
        $(".mapsContent-container").each(function () {
            $(".map-content-trigger").on("click", function () {
                const mapContainer = $(this).closest(".map-container");
                const mapId = $(this).data("map-id");

                mapContainer.find(".map-content").removeClass("active");

                mapContainer.find(`.map-content#${mapId}`).addClass("active");
            });
        });
    }
});

// MISC
jQuery(document).ready(function ($) {
    $(".misc .space-item").each(function () {
        const spaceItem = $(this);
        const image = spaceItem.find(".image");

        onWindowResize(function () {
            spaceItem.css("--button-top", `${image.outerHeight() / 2}px`);
        });
    });
});
