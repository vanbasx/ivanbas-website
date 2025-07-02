import { gsap } from "gsap";

export default function initMenu() {
  const menuButton = document.querySelector('#menu-btn');
  const menuContainer = document.querySelector('#menu');
  const menuLinks = menuContainer.querySelectorAll('a');

  // Таймлайн GSAP, изначально на паузе
  const timeline = gsap.timeline({ paused: true });

  // Блокировка скролла при открытом меню
  timeline.to('html', {
    duration: 0.1,
    overflow: 'hidden',
    ease: 'none',
  });

  // Анимация раскрытия контейнера меню
  timeline.to(menuContainer, {
    duration: 1.5,
    height: '100%',
    ease: 'expo.inOut',
  });

  // Анимация появления ссылок с задержкой
  timeline.to(menuLinks, {
    duration: 1.5,
    y: 0,
    stagger: 0.2,
    ease: 'expo.out',
  }, '-=1');

  // Изначально скрыто (реверсим сразу)
  timeline.reverse();

  // Обработчик клика по кнопке меню
  const toggleMenu = () => {
    const isReversed = timeline.reversed();
    timeline.reversed(!isReversed);
  };
  menuButton.addEventListener('click', toggleMenu);

  // Сброс анимации и стилей при смене ширины экрана
  const desktopQuery = window.matchMedia('(min-width: 1024px)');

  const resetAnimation = (e) => {
    if (e.matches) {
      // На десктопе сбрасываем стили анимации
      timeline.pause(0).reverse();
      gsap.set(menuContainer, { clearProps: 'height' });
      gsap.set(menuLinks, { clearProps: 'y' });
      gsap.set('html', { clearProps: 'overflowY' });
    }
  };

  desktopQuery.addEventListener('change', resetAnimation);
  resetAnimation(desktopQuery);
}