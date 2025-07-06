/**
 * Initializes responsive viewBox for SVG elements.
 * 
 * Searches for an SVG element with [data-responsive-text] 
 * and updates its viewBox based on the window width 
 * (<1200px — mobile, otherwise desktop).
 * 
 * Depends on: /resources/views/components/responsive-text.blade.php
 */

export default function responsiveText() {
  const svg = document.querySelector("[data-responsive-text]");
  if (!svg) return;

  const desktop = svg.getAttribute("data-size-desktop");
  const mobile = svg.getAttribute("data-size-mobile");

  const update = () => {
    if (window.innerWidth < 1200 && mobile) {
      svg.setAttribute("viewBox", mobile);
    } else if (desktop) {
      svg.setAttribute("viewBox", desktop);
    }
  };

  update();
  window.addEventListener("resize", update);
}