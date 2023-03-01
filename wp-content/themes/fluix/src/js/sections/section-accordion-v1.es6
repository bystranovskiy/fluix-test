"use strict";

import {addLazyLoad} from "../addLazyLoad.js";

addLazyLoad();

let slideUp = (target, duration = 500) => {
    target.style.transitionProperty = 'height';
    target.style.transitionDuration = duration + 'ms';
    target.style.height = target.offsetHeight + 'px';
    target.offsetHeight;
    target.style.overflow = 'hidden';
    target.style.height = 0;
    window.setTimeout(() => {
        target.style.display = 'none';
        target.style.removeProperty('height');
        target.style.removeProperty('overflow');
        target.style.removeProperty('transition-duration');
        target.style.removeProperty('transition-property');
        //alert("!");
    }, duration);
}

let slideDown = (target, duration = 500) => {
    target.style.removeProperty('display');
    let display = window.getComputedStyle(target).display;

    if (display === 'none') {
        display = 'block';
    }

    target.style.display = display;
    let height = target.offsetHeight;
    target.style.overflow = 'hidden';
    target.style.height = 0;
    target.offsetHeight;
    target.style.transitionProperty = "height";
    target.style.transitionDuration = duration + 'ms';
    target.style.height = height + 'px';
    window.setTimeout(() => {
        target.style.removeProperty('height');
        target.style.removeProperty('overflow');
        target.style.removeProperty('transition-duration');
        target.style.removeProperty('transition-property');
    }, duration);
}
let slideToggle = (target, duration = 500) => {
    if (window.getComputedStyle(target).display === 'none') {
        return slideDown(target, duration);
    } else {
        return slideUp(target, duration);
    }
}


const accordions = document.querySelectorAll(".section-accordion-v1");
accordions.forEach(function (accordion) {
    const toggles = accordion.querySelectorAll(".js--toggle");
    for (let i = 0; i < toggles.length; i++) {
        toggles[i].addEventListener("click", () => {
            const content = toggles[i].querySelector(".js--content");
            if (!toggles[i].hasAttribute("open")) {
                toggles[i].setAttribute("open", "");
                slideDown(content);
            } else {
                slideUp(content);
                toggles[i].removeAttribute("open");
            }

            if (accordion.getAttribute("data-mode") === "single") {
                for (let j = 0; j < toggles.length; j++) {
                    if (i !== j) {
                        slideUp(toggles[j].querySelector(".js--content"));
                        toggles[j].removeAttribute("open");
                    }
                }
            }

        });
    }
});