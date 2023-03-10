"use strict";

import {addLazyLoad} from "../addLazyLoad.js";

addLazyLoad();

(function ($) {
    $(document).ready(function () {
        $(".section-accordion-v2").each(function () {
            const $accordion = $(this);
            const $toggle = $(this).find(".js--toggle");
            $toggle.on("click", function () {
                if ($accordion.attr("data-mode") === "single") {
                    $toggle.not($(this)).removeAttr("open");
                    $toggle.not($(this)).find(".js--content").slideUp(500);
                }
                $(this).attr("open", !$(this).attr("open"));
                $(this).find(".js--content").slideToggle(500);
            })
        });
    });
})(jQuery);