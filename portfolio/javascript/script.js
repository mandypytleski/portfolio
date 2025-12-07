document.addEventListener('DOMContentLoaded', () => {
  const container = document.querySelector('.carousel-container');
  if (!container) return;

  const track = container.querySelector('.carousel-track');
  const cards = Array.from(track.children);
  const btnPrev = container.querySelector('.carousel-btn.left');
  const btnNext = container.querySelector('.carousel-btn.right');

  let index = 0;

  function getVisibleCount() {
    const cardWidth = cards[0].getBoundingClientRect().width;
    return Math.max(1, Math.floor(document.querySelector('.carousel').clientWidth / cardWidth));
  }

  function getLastVisibleIndex() {
    return Math.max(0, cards.length - getVisibleCount());
  }

  function update() {
    const target = cards[Math.min(index, cards.length - 1)];
    track.style.transition = 'transform 400ms ease';
    track.style.transform = `translateX(-${target.offsetLeft}px)`;

    // Highlight active card
    cards.forEach((card, i) => {
      card.classList.toggle('active', i === index);
    });
  }

  btnPrev.addEventListener('click', () => {
    const last = getLastVisibleIndex();
    index = (index <= 0) ? last : index - 1; // wrap to end
    update();
  });

  btnNext.addEventListener('click', () => {
    const last = getLastVisibleIndex();
    index = (index >= last) ? 0 : index + 1; // wrap to start
    update();
  });

  // keyboard accessibility
  container.addEventListener('keydown', (e) => {
    if (e.key === 'ArrowLeft') btnPrev.click();
    if (e.key === 'ArrowRight') btnNext.click();
  });

  // touch support (swipe)
  let startX = 0;
  let isTouch = false;
  track.addEventListener('touchstart', (e) => {
    isTouch = true;
    startX = e.touches[0].clientX;
  }, { passive: true });
  track.addEventListener('touchend', (e) => {
    if (!isTouch) return;
    const dx = (e.changedTouches[0].clientX - startX);
    if (dx > 40) btnPrev.click();
    if (dx < -40) btnNext.click();
    isTouch = false;
  });

  // recalc on resize
  window.addEventListener('resize', () => {
    index = Math.min(index, getLastVisibleIndex());
    update();
  });

  // initial layout
  update();
});
