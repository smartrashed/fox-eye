(function($) {

	"use strict";
	$(document).ready(function() {

		//--------------for-loading-page
		$(window).on("load",function() {
		    $("#loading").delay(2000).fadeOut(500);
		    $("#loading-center").click(function() {
		    $("#loading").fadeOut(500);
		    })
		});

		//for-menu-bg
		$(window).on('scroll', function (){
		if ($(window).scrollTop() >200){
		  $('#for-menu-fixed').addClass('fixed-add fadeInDown animated');
		} else {
		  $('#for-menu-fixed').removeClass('fixed-add fadeInDown animated');
		}
		});


		//----for-search-box
		$('.search-clas').on('click', function(){
			$('.search-box').addClass("open");
		});

		$('.search-close').on('click', function(){
			$('.search-box').removeClass("open");
		});


		//--------------for-swipper-slider
				var swiper = new Swiper('.swiper-container', { 
					paginationClickable: true,
					spaceBetween: 30,
					centeredSlides: true,
					 slidesPerView: 3,
					loop:true,
					autoplay: 2500, 
					breakpoints: {
						768:{
							slidesPerView: 1
						}
					}
				});

		//--------------for-swipper-slider		 
		    var swiper = new Swiper('.swiper-container2', {  
		        spaceBetween: 20,
				slidesPerView: 4, 
				loop:true, 
				breakpoints: {
						320:{
							slidesPerView: 2
						}
					},
					breakpoints: {
						479:{
							slidesPerView: 3
						}
					}
		    }); 
				
				
		//--------------for-scrollTop-fadeOut	
		$(window).on("scroll",function () {
			if ($(this).scrollTop() > 200) {
				$('.scrollup').fadeIn();
			} else {
				$('.scrollup').fadeOut();
			}
		});
		//--------------for-click-scrollTop
		$('.scrollup').on("click",function () {
			$("html, body").animate({
				scrollTop: 0
			}, 2000);
			return false;
		});

				
		//--------------for-counter-up
		$('.counter').counterUp({
			delay: 10,
			time: 3000
		});



		 
		// Masonry For Photo Gallery
		$('.grid').masonry({
		  itemSelector: '.grid-item',
		  columnWidth: 1,
		  percentPosition: true
		});




		//jQuery for page scrolling feature - requires jQuery Easing plugin
			$('ul.nav').each( function( i, liList ) {
			  var $liList = $( liList );
			  $liList.on( 'click', 'li a', function(event) {
				var $anchor = $(this);
				$('html, body').stop().animate({
					scrollTop: $($anchor.attr('href')).offset().top
				}, 1500, 'easeInOutExpo');
				event.preventDefault();
			  });
			});



		new WOW().init();





		$('a[data-rel^=lightcase]').lightcase();




	});

})(jQuery);