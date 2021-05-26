$(document).ready(function () {
	$('.list-brand').flickity({
		// options
		cellAlign: 'left',
		contain: true,
		wrapAround: true
	});
	    
	var bannerSlide = new Swiper('.swiper-content', {
	    zoom: true,
	    speed: 400,
	    loop: true,
	    autoplay: {
			delay: 5000,
		},
	    navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
	    }
	});
    bannerSlide;
});