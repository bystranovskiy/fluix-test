"use strict";

import "../../scss/sections/section-accordion-v2.scss";
import {addLazyLoad} from "../addLazyLoad.js";

addLazyLoad();

const accordions = document.querySelectorAll(".section-accordion-v2");
accordions.forEach(function (accordion) {
    const toggles = accordion.querySelectorAll(".js--toggle");
    for (let i = 0; i < toggles.length; i++) {
        toggles[i].addEventListener("click", () => {

            const content = toggles[i].querySelector(".js--content");
            if (!toggles[i].hasAttribute("open")) {
                toggles[i].setAttribute("open", "");
                content.style.height = 'auto';
                const height = content.clientHeight + 'px';
                content.style.height = '0px';
                setTimeout(function () {
                    content.style.height = height;
                }, 10);

            } else {
                content.style.height = '0px';
                content.addEventListener('transitionend', function () {
                    toggles[i].removeAttribute("open");
                }, {
                    once: true
                });
            }

            if (accordion.getAttribute("data-mode") === "single") {
                for (let j = 0; j < toggles.length; j++) {
                    if (i !== j) {
                        toggles[j].removeAttribute("open");
                        toggles[j].querySelector(".js--content").style.height = '0px';
                    }
                }
            }

        });
    }
});