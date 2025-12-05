// Simple accessible tab behavior
document.addEventListener('DOMContentLoaded', function () {
  const tabs = Array.from(document.querySelectorAll('.tab-button'));
  const panels = Array.from(document.querySelectorAll('.tabs-content'));

  function activateTab(selectedTab) {
    tabs.forEach(tab => {
      const isSelected = tab === selectedTab;
      tab.setAttribute('aria-selected', isSelected ? 'true' : 'false');
      tab.tabIndex = isSelected ? 0 : -1;
    });

    panels.forEach(panel => {
      const shouldShow = panel.id === selectedTab.getAttribute('aria-controls');
      panel.hidden = !shouldShow;
    });
    selectedTab.focus();
  }

  tabs.forEach(tab => {
    tab.addEventListener('click', () => activateTab(tab));
    tab.addEventListener('keydown', (e) => {
      const idx = tabs.indexOf(tab);
      if (e.key === 'ArrowUp' || e.key === 'ArrowLeft') {
        e.preventDefault();
        activateTab(tabs[(idx - 1 + tabs.length) % tabs.length]);
      } else if (e.key === 'ArrowDown' || e.key === 'ArrowRight') {
        e.preventDefault();
        activateTab(tabs[(idx + 1) % tabs.length]);
      }
    });
  });
});


    const questions = document.querySelectorAll(".faq-question");

    questions.forEach(q => {
        q.addEventListener("click", () => {
            q.classList.toggle("active");

            let answer = q.nextElementSibling;
            if (answer.style.maxHeight) {
                answer.style.maxHeight = null;
            } else {
                answer.style.maxHeight = answer.scrollHeight + "px";
            }
        });
    });

