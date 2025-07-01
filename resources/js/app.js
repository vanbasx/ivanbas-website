import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { ScrollSmoother } from "gsap/ScrollSmoother";

import.meta.glob([
  '../images/**',
  '../fonts/**',
]);



function setupResponsiveViewBoxHeroText() {
  const svg = document.getElementById("hero-svg");
  if (!svg) return;

  const update = () => {
    if (window.innerWidth < 1200) {
      svg.setAttribute("viewBox", "0 0 133 32");
    } else {
      svg.setAttribute("viewBox", "0 0 220 16");
    }
  };

  update();
  window.addEventListener("resize", update);
}

setupResponsiveViewBoxHeroText();



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

  console.log("window loaded");
  }, false);

});



function initMenu() {
  const btn = document.querySelector('#menu-btn');
  const menu = document.querySelector('#menu');
  const html = document.documentElement;

  function closeMenuForMobile() {
    if (window.innerWidth > 1024) {
      menu.classList.add('max-lg:hidden');
      menu.classList.remove('touch-none');
      html.classList.remove('overflow-hidden');
    }
  }

  btn.addEventListener('click', () => {
    menu.classList.toggle('max-lg:hidden');
    menu.classList.toggle('touch-none');
    html.classList.toggle('overflow-hidden');
  });

  window.addEventListener('resize', closeMenuForMobile);
}

initMenu();




document.addEventListener('dblclick', function(event) {
  event.preventDefault();
}, { passive: false });
