import { gsap } from "gsap";

export default function initAnimationsWorksPage() {
  const heroTitle = document.querySelector('#hero-title');
  const works = document.querySelector('#works');

  if (!heroTitle || !works) return;

  const tl = gsap.timeline();

  tl.fromTo('#hero-title', {
    y: 100,
    opacity: 0
  }, {
    duration: 1.5,
    y: 0,
    opacity: 1,
    ease: 'expo.out',
  });

  tl.fromTo('#works', {
    opacity: 0
  }, {
    duration: 2,
    opacity: 1,
    ease: 'expo.out',
    delay: -0.5
  });

}