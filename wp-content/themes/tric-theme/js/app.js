$( document).ready(function() {

	//fixed mobile nav after scroll
	var nav_mob = $('.nav-mob__main-wrapper');
	var $window = $(window);
	$window.scroll(function(e) {
		if ($window.scrollTop() > 48) {
			nav_mob.addClass("nav-mob--fixed");
		}else{
			nav_mob.removeClass("nav-mob--fixed");
		}
	});

	//toggle in and out navigation bar first child
	$('.nav__item').hover(function() {
		$(this).addClass('nav__item--hover');
	}, function() {
		$(this).removeClass("nav__item--hover");
	});

	//toggle in and out navigation bar second child
	$('.nav__item-child').hover(function() {
		$(this).addClass('nav__item-child--hover');
	}, function() {
		$(this).removeClass("nav__item-child--hover");
	});

	  // toggle mobile menu
	$('.nav-mob__burgermenu').click(function(e){
			$(this).toggleClass('.nav-mob--active');
			$('body').toggleClass('nav-mob--active');

			console.log(this);
			e.preventDefault();
		});
		$('.nav-mob__burgermenu.nav-mob--active').click(function(e){
			e.preventDefault();
			$(this).toggleClass('.nav-mob--active');
			$('body').toggleClass('nav-mob--active');
		});

	 // toggle search bar
	$('.nav-mob__search').click(function(e){
		$('.nav-mob__searchbar').toggle('slow');
	});

	    var swiper = new Swiper ('#mod-slideshow', {
	      // Optional parameters
	      loop: true,
	      direction: 'horizontal',
	      wrapperClass: 'mod-slideshow__wrapper',
	      slideClass: 'mod-slideshow__slide',
	      pagination: '.mod-slideshow__pagination',
	      nextButton: '.mod-slideshow__button-next',
	      prevButton: '.mod-slideshow__button-prev',
	      paginationClickable: true,
	      keyboardControl: true
	    });

	  $('.page-nav__nav-item').accordion({
	  	"transitionSpeed": 400,
	  	"transitionEasing": 'ease',
	  	"singleOpen": false
	  });
	  $('.page-nav__nav-item').on('accordion.open', function() {
	  	$(this).find('.page-nav__nav-expander-icon').html("-");
	  });
	  $('.page-nav__nav-item').on('accordion.close', function() {
	  	$(this).find('.page-nav__nav-expander-icon').html("+");
	  });
});