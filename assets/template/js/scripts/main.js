$(document).ready(function(){
	var swiper = new Swiper('.swiper-container', {
	  spaceBetween: 30,
	  centeredSlides: true,
	  loop: true,
	  autoplay: {
	    delay: 9000,
	    disableOnInteraction: false,
	  },
	  pagination: {
	    el: '.swiper-pagination',
	    clickable: true,
	  },
	  navigation: {
	  	el: '.swiper-pagination',
	  	clickable: true,
	  },
	});

	$(".open-submenu").click(function(){
		console.log("teste");
	    $(".sub-menu").toggleClass("active");
	});

	window.sr = ScrollReveal({ reset: true });
	sr.reveal('.foo', { duration: 1000, delay: 2 });
	sr.reveal('.bar', { duration: 1500, delay: 2 });
	sr.reveal('.valores-intro', { duration: 1100 });
	sr.reveal('.visao-intro', { duration: 1300 });
	sr.reveal('.missao-intro', { duration: 1500 });
	
	$('.header-home').scrollToFixed();

});

