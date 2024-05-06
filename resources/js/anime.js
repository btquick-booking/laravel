import anime from 'animejs/lib/anime.es.js';

window.anime = anime

anime({
    targets: '.rotate-div',
    rotate: '360deg',
    backgroundColor: '#FFF',
    duration: 1000
});

anime({
    targets: '.translateX-div',
    translateX: [250, 0],
    duration: 1000
});
anime({
    targets: '.scale1-div',
    scale: [0, 1],
    // rotate: '1turn',
    // backgroundColor: '#FFF',
    duration: 1000
});
