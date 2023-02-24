"use strict";

import "../../scss/sections/section-accordion-v2.scss";
import {addLazyLoad} from "../addLazyLoad.js";

addLazyLoad();

const accordions = document.querySelectorAll(".section-accordion-v2");
accordions.forEach(function (accordion) {
    const details = accordion.querySelectorAll(".js--details");
    for (let i = 0; i < details.length; i++) {
        details[i].addEventListener("click", () => {
            details[i].classList.toggle("section-accordion-v2__details--open");

            if (accordion.getAttribute("data-mode") === "single") {
                for (let j = 0; j < details.length; j++) {
                    if (i !== j) {
                        details[j].classList.remove("section-accordion-v2__details--open");
                    }
                }
            }

        });
    }
});