import { gsap } from "gsap";

export default function initAnimationsNotFoundPage() {
  const heroTitle = document.querySelector('#hero-title');
  const subtitle = document.querySelector('#subtitle');

  if (!heroTitle || !subtitle) return;

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

  tl.fromTo('#subtitle', {
    y: 100,
    opacity: 0
  }, {
    duration: 1.5,
    y: 0,
    opacity: 1,
    ease: 'expo.out',
    delay: -1
  });

}