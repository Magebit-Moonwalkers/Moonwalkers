const tracker = document.querySelector('.tracker');

const hero = document.querySelector('.hero-image');

hero.addEventListener("mousemove", e => {
    tracker.style.left = `${e.clientX}px`;
    tracker.style.top = `${e.clientY}px`;
})