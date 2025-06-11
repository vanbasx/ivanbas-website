import.meta.glob([
  '../images/**',
  '../fonts/**',
]);

import { gsap } from "gsap";

document.addEventListener('DOMContentLoaded', () => {

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