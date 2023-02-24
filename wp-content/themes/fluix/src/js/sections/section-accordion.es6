"use strict";

import "../../scss/sections/section-accordion.scss";
import {addLazyLoad} from "../addLazyLoad.js";

addLazyLoad();

const accordions = document.querySelectorAll(".section-accordion[data-mode='single']");
accordions.forEach(function (accordion) {
    const details = accordion.querySelectorAll("details");
    for (let i = 0; i < details.length; i++) {
        details[i].addEventListener("click", () => {
            for (let j = 0; j < details.length; j++) {
                if (i !== j) {
                    details[j].removeAttribute("open");
                }
            }
        });
    }
});