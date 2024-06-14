if (document.getElementById('hero_section_thumbnails_container')) {
    new Splide('#hero_section_thumbnails_container', {
        type: 'loop',
        perPage: 3,
        rewind: true,
        autoplay: true,
        interval: 2000,
        gap: 40

    }).mount();
}
