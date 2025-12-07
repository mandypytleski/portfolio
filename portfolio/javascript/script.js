document.addEventListener('DOMContentLoaded', () => {
  const container = document.querySelector('.carousel-container');
  if (!container) return;

  const track = container.querySelector('.carousel-track');
  const btnPrev = container.querySelector('.carousel-btn.left');
  const btnNext = container.querySelector('.carousel-btn.right');

  let originalCards = [];
  let cards = [];
  let index = 0;
  let clonesBefore = 0;
  let clonesAfter = 0;
  let originalCount = 0;

  function getVisibleCount() {
    const card = track.querySelector('.carousel-card');
    if (!card) return 1;
    const cardWidth = card.getBoundingClientRect().width;
    return Math.max(1, Math.floor(document.querySelector('.carousel').clientWidth / cardWidth));
  }

  function clearClones() {
    Array.from(track.querySelectorAll('[data-clone]')).forEach(n => n.remove());
  }

  function buildClones() {
    // capture originals (only once)
    originalCards = Array.from(track.querySelectorAll('.carousel-card')).filter(c => !c.dataset.clone);
    originalCount = originalCards.length;
    clearClones();

    const visible = getVisibleCount();
    clonesBefore = visible;
    clonesAfter = visible;

    // clone last N to the front
    const lastItems = originalCards.slice(-clonesBefore);
    lastItems.forEach(node => {
      const clone = node.cloneNode(true);
      clone.dataset.clone = 'true';
      track.prepend(clone);
    });

    // clone first N to the end
    const firstItems = originalCards.slice(0, clonesAfter);
    firstItems.forEach(node => {
      const clone = node.cloneNode(true);
      clone.dataset.clone = 'true';
      track.append(clone);
    });

    cards = Array.from(track.children);
  }

  function firstOriginalIndex() {
    return clonesBefore;
  }
  function lastOriginalIndex() {
    return clonesBefore + originalCount - 1;
  }

  function setPosition(noTransition = false) {
    const target = cards[index];
    if (!target) return;
    if (noTransition) track.style.transition = 'none';
    else track.style.transition = 'transform 400ms ease';
    track.style.transform = `translateX(-${target.offsetLeft}px)`;
    if (noTransition) {
      // force reflow then restore transition
      // eslint-disable-next-line no-unused-expressions
      track.offsetHeight;
      track.style.transition = 'transform 400ms ease';
    }
    markCenter();
  }

  function markCenter() {
    const visible = getVisibleCount();
    const centerOffset = Math.floor(visible / 2);
    const centerIndex = Math.min(cards.length - 1, index + centerOffset);

    cards.forEach((card, i) => {
      // only the true center gets the class; remove from all others
      if (i === centerIndex) {
        card.classList.add('is-center');
      } else {
        card.classList.remove('is-center');
      }
    });
  }

  function handleTransitionEnd() {
    // if we landed on a clone, jump to corresponding original without transition
    if (!cards[index]) return;
    if (cards[index].dataset.clone === 'true') {
      const rel = (index - firstOriginalIndex()) % originalCount;
      const wrapped = (rel + originalCount) % originalCount; // positive modulo
      index = firstOriginalIndex() + wrapped;
      setPosition(true); // no transition jump
    }
  }

  function prev() {
    index = (index <= 0) ? cards.length - 1 : index - 1;
    setPosition();
  }
  function next() {
    index = (index >= cards.length - 1) ? 0 : index + 1;
    setPosition();
  }

  // initialize / rebuild (call on load and resize)
  function initCarousel(startOnSecond = true) {
    // remove any existing inline transforms/transitions
    track.style.transition = 'none';
    track.style.transform = '';

    buildClones();

    // start on second original (as requested)
    const fo = firstOriginalIndex();
    index = startOnSecond ? Math.min(fo + 1, lastOriginalIndex()) : fo;
    // position without animation
    setPosition(true);
  }

  // events
  btnPrev.addEventListener('click', () => {
    prev();
  });
  btnNext.addEventListener('click', () => {
    next();
  });

  // keyboard
  container.addEventListener('keydown', (e) => {
    if (e.key === 'ArrowLeft') prev();
    if (e.key === 'ArrowRight') next();
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
    if (dx > 40) prev();
    if (dx < -40) next();
    isTouch = false;
  });

  // transitionend handler for seamless jump
  track.addEventListener('transitionend', handleTransitionEnd);

  // rebuild on resize (debounced)
  let resizeTimer;
  window.addEventListener('resize', () => {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(() => {
      initCarousel(true);
    }, 120);
  });

  // initial start
  initCarousel(true);
});

