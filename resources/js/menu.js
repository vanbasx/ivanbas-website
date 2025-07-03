import { gsap } from "gsap";

export default function initMenu() {
  const menuButton = document.querySelector('#menu-btn');
  const menuContainer = document.querySelector('#menu');
  const menuLinks = menuContainer.querySelectorAll('a');

  const tl = gsap.timeline({ paused: true });
  const mm = gsap.matchMedia();

  mm.add("(max-width: 1023px)", () => {
    tl.to('html', {
      duration: 0.1,
      overflow: 'hidden',
      ease: 'none',
    });

    tl.to(menu, {
      duration: 0.1,
      visibility: 'visible',
      ease: 'expo.inOut',
    });

    tl.to("header", {
      duration: 1.5,
      height: '100%',
      ease: 'expo.inOut',
      onReverseComplete: () => {
        gsap.set("header", { clearProps: "height" });
      }
    });

    tl.fromTo(menuLinks, {
      y: 100,
      opacity: 0,
    }, {
      duration: 1.5,
      y: 0,
      opacity: 1,
      stagger: 0.2,
      ease: 'expo.out',
    }, '-=1');

    tl.reverse();

    return () => { // optional
      // custom cleanup code here (runs when it STOPS matching)
    };
  });

  menuButton.addEventListener('click', () => {
    const isReversed = tl.reversed();
    tl.reversed(!isReversed);
  });
}