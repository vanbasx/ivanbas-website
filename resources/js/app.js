import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { ScrollSmoother } from "gsap/ScrollSmoother";

import.meta.glob([
  '../images/**',
  '../fonts/**',
]);

import initMenu from "./menu";
import responsiveText from "./responsiveText";
import initAnimationsHomePage from "./animationsHomePage";
import initAnimationsWorksPage from "./animationsWorksPage";
import initAnimationsWorkSinglePage from "./animationsWorkSinglePage";
import initAnimationsNotFoundPage from "./animationsNotFoundPage";


// wait until DOM is ready
document.addEventListener("DOMContentLoaded", function(event){

  initAnimationsHomePage();
  initAnimationsWorksPage();
  initAnimationsWorkSinglePage();
  initAnimationsNotFoundPage();

  window.addEventListener("load", function(e){

    gsap.registerPlugin(ScrollTrigger, ScrollSmoother);

    ScrollSmoother.create({
      wrapper: "#app",
      content: "#wrapper",
      smooth: 1.5,
    });

    initMenu();
    responsiveText();

  }, false);
});

document.addEventListener('dblclick', function(event) {
  event.preventDefault();
}, { passive: false });