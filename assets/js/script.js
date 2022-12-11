const sr = ScrollReveal({
    origin: 'top',
    distance: '60px',
    duration: 2000,
    delay: 400,
});

sr.reveal('.msg__success', {origin: 'left'});
sr.reveal('.msg__warning', {origin: 'right'});
sr.reveal('.msg__alert', {origin: 'left'});
sr.reveal('.msg__dump', {origin: 'right'});