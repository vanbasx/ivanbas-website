import { gsap } from "gsap";

export default function initAnimationsWorksPage() {
  const heroTitle = document.querySelector('#hero-title');
  const about = document.querySelector('#about');
  const images = document.querySelector('#images');
  const info = document.querySelector('#info');

  if (!heroTitle || !about || !images || !info) return;

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

  tl.fromTo(about, {
    y: 100,
    opacity: 0
  }, {
    duration: 1.5,
    y: 0,
    opacity: 1,
    ease: 'expo.out',
    delay: -1
  });

  tl.fromTo(images, {
    y: 100,
    opacity: 0
  }, {
    duration: 1.5,
    y: 0,
    opacity: 1,
    ease: 'expo.out',
    delay: -1
  });

  tl.fromTo(info, {
    opacity: 0
  }, {
    duration: 1.5,
    opacity: 1,
    ease: 'expo.out',
    delay: -1
  });

}