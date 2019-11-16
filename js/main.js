$(document).ready(function(){

	$('#nav-icon3').click(function(){
		$(this).toggleClass('open');
		$('.men').toggleClass('active');
		$('.mobile-menu').toggleClass('white');
	});
	$('.redArrow').click(function(){
		$(this).toggleClass('redOpen');
		$(this).parent().parent().toggleClass('liOpen');
		$(this).parent().next().slideToggle('200');
	});
	$('.type-cargo').click(function(){
		$('.type-car').removeClass('active');
		$('.type-car-row').removeClass('show');
		$(this).addClass('active');
		$('.type-cargo-row').addClass('show');
	});
	$('.type-car').click(function(){
		$('.type-cargo').removeClass('active');
		$('.type-cargo-row').removeClass('show');
		$(this).addClass('active');
		$('.type-car-row').addClass('show');
	}); 
	$('.country').click(function(){
		$(this).children().find('.country-name-p').toggleClass('show');
	});

	$(function() {
		$(window).scroll(function() {
			if($(this).scrollTop() >= 300) {
				$('#toTop').fadeIn();
			} else {
				$('#toTop').fadeOut();
			}
		});
		$('#toTop').click(function() {
			$('body,html').animate({scrollTop:0},300);
		});
	});


	$('.slider-main').slick({
		infinite: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		dots: true,
		dotsClass: "my-dots-dekstop",
		autoplay: true,
		vertical: true,
		swipeToSlide: true,
		verticalSwiping: true,
  		autoplaySpeed: 5000,
  		responsive: [
  			{
  				breakpoint: 960,
  				settings: {
  					vertical: false,
  					dotsClass: "my-dots",
  				}
  			}
  		]
	});
	$('.slider-partners').slick({
		infinite: false,
		slidesToShow: 4,
		slidesToScroll: 1,
		arrows: false,
		dots: true,
		dotsClass: "my-dots-line",
		autoplay: true,
		swipeToSlide: true,
  		autoplaySpeed: 5000,
  		responsive: [
  			{
  				breakpoint: 960,
  				settings: {
  					slidesToShow: 1,
  				}
  			}
  		]
	});
	$('.slider-employee').slick({
		infinite: false,
		slidesToShow: 4,
		slidesToScroll: 1,
		arrows: false,
		dots: true,
		swipeToSlide: true,
		dotsClass: "my-dots-line",
		autoplay: true,
  		autoplaySpeed: 5000,
  		responsive: [
  			{
  				breakpoint: 960,
  				settings: {
  					slidesToShow: 1,
  				}
  			}
  		]
	});
	$('.slider-car-type').slick({
		infinite: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		swipeToSlide: true,
		dots: true,
		dotsClass: "my-dots-line",
		autoplay: true,
  		autoplaySpeed: 5000,
	});
	$('.slider-car-type-mobile').slick({
		infinite: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		dots: true,
		swipeToSlide: true,
		dotsClass: "my-dots-line",
		autoplay: true,
  		autoplaySpeed: 5000,
	});
	$('.slider-sertificates').slick({
		infinite: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		dots: false,
		swipeToSlide: true,
		responsive: [
			{
				breakpoint: 6000,
				settings: "unslick",
			},
			{
				breakpoint: 960,
				settings: {
					dots: true,
					dotsClass: "my-dots-line",
					slidesToShow: 1,
					slidesToScroll: 1,
					autoplay: true,
  					autoplaySpeed: 5000,
				}
			}
		]
	});
	$('.slider-advantages').slick({
		infinite: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		dots: false,
		swipeToSlide: true,
		responsive: [
			{
				breakpoint: 6000,
				settings: "unslick",
			},
			{
				breakpoint: 960,
				settings: {
					dots: true,
					dotsClass: "my-dots",
					slidesToShow: 1,
					slidesToScroll: 1,
					autoplay: true,
  					autoplaySpeed: 5000,
				}
			}
		]
	});






});