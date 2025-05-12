// Bootstrap carousel otomatik hız ayarı
const carousel = document.querySelector('#carouselExample');
if (carousel) new bootstrap.Carousel(carousel, { interval: 3000 });