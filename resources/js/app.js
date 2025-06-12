import.meta.glob([
  '../images/**',
  '../fonts/**',
]);
import { gsap } from "gsap";
import { ScrollSmoother } from "gsap/all";
import { ScrollTrigger } from "gsap/all";

document.addEventListener('DOMContentLoaded', () => {

  gsap.registerPlugin(ScrollTrigger, ScrollSmoother);

  ScrollSmoother.create({
    content: '#app',
    smooth: 1.5,
    effects: true
  });

  // function initMarquee() {
  //   const marquees = [...document.getElementsByClassName('marquee-item')];

  //   marquees.forEach((marquee) => {
  //     const totalWidth = marquee.scrollWidth;

  //     gsap.fromTo(marquee, {
  //       x: 0
  //     }, {
  //       x: -totalWidth,
  //       duration: 5,
  //       ease: "none",
  //       repeat: -1,
  //       modifiers: {
  //         x: gsap.utils.unitize(x => parseFloat(x) % totalWidth)
  //       }
  //     });
  //   })
  // }

  // window.addEventListener('load', initMarquee);
  // window.addEventListener('resize', initMarquee);

});