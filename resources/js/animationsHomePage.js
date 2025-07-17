import { gsap } from "gsap";

export default function initAnimationsHomePage() {
  const heroTitle = document.querySelector('#hero-title');
  const list = document.querySelector('#list');
  const works = document.querySelector('#works');
  const info = document.querySelector('#info');

  if (!heroTitle || !list || !works || !info) return;
  
  const tl = gsap.timeline();

  tl.fromTo(heroTitle, {
    y: 100,
    opacity: 0
  }, {
    duration: 1.5,
    y: 0,
    opacity: 1,
    ease: 'expo.out',
  });

  tl.fromTo(list, {
    y: 100,
    opacity: 0
  }, {
    duration: 1,
    y: 0,
    opacity: 1,
    ease: 'expo.out',
    delay: -0.5
  });

  tl.fromTo(works, {
    opacity: 0
  }, {
    duration: 2,
    opacity: 1,
    ease: 'expo.out',
    delay: -0.5
  });

  tl.fromTo(info, {
    opacity: 0
  }, {
    duration: 2,
    opacity: 1,
    ease: 'expo.out',
    delay: -1.5
  });

}