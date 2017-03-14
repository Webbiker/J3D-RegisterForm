$(document).ready(function(){

	$(document).on('click', '#openMenu', function(){
		$('.header').addClass('header--active');
		$('.header__navlist').addClass('header__navlist--active');
	});

	$(document).on('click', '#closeMenu', function(){
		$('.header').removeClass('header--active');
		$('.header__navlist').removeClass('header__navlist--active');
	});

	$(document).ready(function(){
		$(window).scroll(stickyHeader);
	});
	stickyHeader();

});

var stickyHeader = function(){
	// behaviour of the main navigation on scroll
	// var height = $(window).scrollTop();
	var height = $('body').scrollTop();
	if(height  > 160) {
		$('#closeMenu').css('opacity', 0);
	} else {
		$('#closeMenu').css('opacity', 0.3);
	}
}