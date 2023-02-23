"use strict";

import "../../scss/sections/section-accordion-v2.scss";
import {addLazyLoad} from "../addLazyLoad.js";

addLazyLoad();

const accordions = document.querySelectorAll(".section-accordion-v2");
accordions.forEach(function (accordion) {
    const details = accordion.querySelectorAll(".details");
    for (let i = 0; i < details.length; i++) {
        details[i].addEventListener("click", () => {
            details[i].classList.toggle("open");

            if(accordion.classList.contains('single-mode')){
                for (let j = 0; j < details.length; j++) {
                    if (i !== j) {
                        details[j].classList.remove("open");
                    }
                }
            }

        });
    }
});