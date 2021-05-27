const titreSpans = document.querySelectorAll('h1 span');

window.addEventListener('load', () => {

    const TL = gsap.timeline({paused: true});

    TL
    .staggerFrom(titreSpans, 2, {top: -50, opacity: 0, ease: "power2.out"})
    TL.play();
})