<link href="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
" rel="stylesheet">

<script>
    document.addEventListener('DOMContentLoaded', function() {
      var splide = new Splide('.splide', {
        type: 'loop',
        lazyLoad: true,
        autoplay: true,
        interval: 4000,
        pauseOnHover: false,
        arrows: false,
        autoHeight: true,
        autoWidth: true,
        speed: 2600,
        preloadPages: 3,
        easing: 'ease',
        pagination: false,
      });
      splide.mount();
    });
</script>

<script src="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
"></script>