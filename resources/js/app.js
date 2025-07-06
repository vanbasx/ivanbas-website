import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { ScrollSmoother } from "gsap/ScrollSmoother";

import.meta.glob([
  '../images/**',
  '../fonts/**',
]);

import responsiveText from "./responsiveText";
import initMenu from "./menu";


// wait until DOM is ready
document.addEventListener("DOMContentLoaded", function(event){

 console.log("DOM loaded");

 //wait until images, links, fonts, stylesheets, and js is loaded
 window.addEventListener("load", function(e){

  gsap.registerPlugin(ScrollTrigger, ScrollSmoother);

  ScrollSmoother.create({
    wrapper: "#app",
    content: "#wrapper",
    smooth: 1.5,
    effects: true
  });

  responsiveText();
  initMenu();

  console.log("window loaded");
  }, false);

});


document.addEventListener('dblclick', function(event) {
  event.preventDefault();
}, { passive: false });