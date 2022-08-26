const tracker = document.querySelector('.tracker');

const hero = document.querySelector('.hero-image');

const products = document.querySelector('.products');

hero.addEventListener("mousemove", e => {
    tracker.style.left = `${e.clientX}px`;
    tracker.style.top = `${e.clientY}px`;
})

let options = {
    threshold: 0,
    rootMargin: '0px',
}

let callback = (entries, observer) => {
    tracker.classList.toggle("shown");
};

let observer = new IntersectionObserver(callback, options);

observer.observe(products);