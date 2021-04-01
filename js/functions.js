$(document).ready(function () {
	// Menu
	function toggleMenu() {
		$(".hamburger").toggleClass('is-active');
		$("nav").toggleClass('active');
	}
	$(".hamburger").click(function () {
		toggleMenu();
	});
	$(window).on('resize', function () {
		var width = $(this).width();
		if (width > 768) { $(".hamburger").removeClass('is-active'); $("nav").removeClass('active'); }
	});
	// Header
	var scrollTop = 0;
	$(window).scroll(function () {
		if (scrollTop == 0) {
			scrollTop = 1;
			var positionCurrent = $(window).scrollTop();
			var headerArea = $('.header-area');
			var headerBar = $('.header-bar');
			if (positionCurrent > 50) { headerArea.addClass('fixed'); headerBar.addClass('fixed'); }
			else { headerArea.removeClass('fixed'); headerBar.removeClass('fixed'); }
			scrollTop = 0;
		}
	});
	// Footer Return
	/*
	var boxBackTop = $("#box-back-top");
	boxBackTop.fadeOut(0);
	$(window).scroll(function () {
		var positionCurrent = $(window).scrollTop();
		if (positionCurrent < 300) { boxBackTop.fadeOut(300); }
		else { boxBackTop.fadeIn(300); }
	});

	boxBackTop.on('click', function () {
		$("html, body").animate({scrollTop: 0}, 300);
	});
	*/
});