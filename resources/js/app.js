import.meta.glob([
  '../images/**',
  '../fonts/**',
]);



function setupResponsiveViewBoxHeroText() {
  const svg = document.getElementById("hero-svg");
  if (!svg) return;

  const update = () => {
    if (window.innerWidth < 1200) {
      svg.setAttribute("viewBox", "0 0 122 32");
    } else {
      svg.setAttribute("viewBox", "0 0 206 16");
    }
  };

  update();
  window.addEventListener("resize", update);
}

setupResponsiveViewBoxHeroText();