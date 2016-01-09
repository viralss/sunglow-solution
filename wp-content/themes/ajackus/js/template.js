/* =Main INIT Function

-------------------------------------------------------------- */

function initializeForm() {



	"use strict";



	//IE9 RECOGNITION

	if (jQuery.browser.msie && jQuery.browser.version == 9) {



		jQuery('html').addClass('ie9');

	}



	//NAVIGATION DETECT

	(function() {

	    function navDetect(){



			var windowWidth = $(window).width();

				

			if ( windowWidth > 1199 ) {

				$('nav, header').removeClass('mobile');

				$('nav, header').addClass('desktop');

			} else {

				$('nav, header').removeClass('desktop');

				$('nav, header').addClass('mobile');

			}

			

	    }



	    $(window).on("resize", navDetect);

	    $(document).on("ready", navDetect);

	})();



	//NAVIGATION CUSTOM FUNCTION

	(function() {

		function navigationInit(){



			//MOBILE BUTTON

			$('.nav-button').click(function() {

				if($('nav').is(":visible")) {

					$('nav').slideUp();

					$('.nav-button').removeClass('open');

				} 

				else {

					$('nav').slideDown();

					$('.nav-button').addClass('open');

				}

			});



			//DROPDOWNS

			$('li.menu-item-has-children > a').click(function() {

				$('.sub-menu').slideUp();

				$('li.menu-item-has-children > a.open').removeClass('open');



				if($(this).next('ul.sub-menu').is(':visible')) {

					$(this).next('ul.sub-menu').slideUp();

					$(this).removeClass('open');

				}



				else {

					$(this).next('ul.sub-menu').slideDown();

					$(this).addClass('open');

				}



				return false;

				

			});



			/*$('li.menu-item-has-children').hover(function() {

				$('.sub-menu').slideUp();

				$('li.menu-item-has-children a.open').removeClass('open');



				$(this).find('ul.sub-menu').slideDown();

				$(this).find('> a').addClass('open');

			}, function() {

				$(this).find('ul.sub-menu').slideUp();

				$(this).find('> a').removeClass('open');

			});*/



			//MAGIC LINE

			$(function() {



			    var $el, leftPos, newWidth,

			        $mainNav = $(".nav-content");

			   

			    var $magicLine = $("#magic-line");

			    	

			    	if($('#menu-primary-menu li').hasClass('current_page_item')) {

			    		 $magicLine && $("#magic-line")

					        .width($("nav.desktop .current_page_item").width() - 35 + "px")

					        .css("left", $(".current_page_item").position().left)

					        .data("origLeft", $magicLine.position() && $magicLine.position().left)

					        .data("origWidth", $(".current_page_item").width());

			    	} 

			    	if($('#menu-primary-menu li').hasClass('current-menu-parent')) {

			    		 $magicLine && $("#magic-line")

					        .width($("nav.desktop .current-menu-parent").width() - 35 + "px")

					        .css("left", $(".current-menu-parent").position().left)

					        .data("origLeft", $magicLine.position() && $magicLine.position().left)

					        .data("origWidth", $(".current-menu-parent").width());

			    	} 

			        

			    $(".nav-content > li").hover(function() {

			        $el = $(this);

			        leftPos = $el.position().left;

			        newWidth = $el.width();

			        $magicLine.stop().animate({

			            left: leftPos,

			            width: newWidth

			        });

			    }, function() {

			        $magicLine.stop().animate({

			            left: $magicLine.data("origLeft"),

			            width: $magicLine.data("origWidth")

			        });    

			    });

			});



			//SEARCH TRIGGER

			$('.search-trigger').click(function() {

				if($('.search-form').hasClass('disabled')) {

					$(".search-form").fadeIn();

					$('nav.desktop .nav-content, .fa').fadeOut();

					$('.search-trigger').addClass('open');

					$('.search-form').removeClass('disabled');

				} 

				else {

					$(".search-form").fadeOut();

					$('nav.desktop .nav-content, .fa').fadeIn();

					$('.search-trigger').removeClass('open');

					$('.search-trigger:before').fadeOut();

					$('.search-form').addClass('disabled');

				}

			});



		}



		$(document).on("ready", navigationInit);

	})();



	(function() {

		function navigationSticky(){

			var scrollTop = $(window).scrollTop();



			if (scrollTop > 550 ) {   

				$('nav, header').addClass('sticky');

				$('.sticky-head').slideDown();

				$('nav.desktop.sticky').stop().animate({

					top: $(document.body).hasClass('admin-bar') ? 47 : 15

				});

				$('header.desktop.sticky').stop().animate({

					top: $(document.body).hasClass('admin-bar') ? 47 : 20

				});

			} else {

				$('header.desktop.sticky, nav.desktop.sticky').stop().animate({

					top: 0,},

					1, function() {

						$('nav, header').removeClass('sticky');

						$('.sticky-head').fadeOut('slow'); 

				}); 

			}

		

		}



		$(window).on("scroll", navigationSticky);

		$(window).on("resize", navigationSticky);

	})();



	//HERO DIMENSTION AND CENTER

	(function() {

	    function heroInit(){



			var heroContent = $('.hero-content'),

				contentHeight = heroContent.height(),

				parentHeight = $('.hero').height(),

				topMargin = (parentHeight - contentHeight) / 2,

				heroContentSmall = $('.hero.small .hero-content'),

				contentSmallHeight = heroContentSmall.height(),

				topMagrinSmall = (parentHeight - contentSmallHeight) / 2;



			heroContent.css({

				"margin-top" : topMargin+"px"

			});



			if ( $(window).width() > 767 ) {



				heroContentSmall.css({

					"margin-top" : topMagrinSmall+ 75 + "px"

				});



			} else {



				heroContentSmall.css({

					"margin-top" : topMagrinSmall + 35 +  "px"

				});

			}

	    }



	    $(window).on("resize", heroInit);

	    $(document).on("ready", heroInit);

	})();



	//ANIMATIONS

	$('.animated').appear();



	$(document.body).on('appear', '.fade', function() {

		$(this).each(function(){ $(this).addClass('ae-animation-fade') });

	});

	$(document.body).on('appear', '.slide', function() {

		$(this).each(function(){ $(this).addClass('ae-animation-slide') });

	});

	$(document.body).on('appear', '.hatch', function() {

		$(this).each(function(){ $(this).addClass('ae-animation-hatch') });

	});

	$(document.body).on('appear', '.entrance', function() {

		$(this).each(function(){ $(this).addClass('ae-animation-entrance') });

	});



	//PARALLAX EFFECTS

	$('.parallax').each(function() {

		$(this).parallax("50%", 0.1);

	});



	//TESTIMONIALS

	$('.testimonials').bxSlider({

		touchEnabled: true,

		slideWidth: 1400,

		controls: false,

		pager: true,

		pagerSelector: ".testimonial-pager",

		adaptiveHeight: true

	});



	//RECENT WORK SLIDER

	$(document).ready(function($) {

		var si = $('#recent-gallery').royalSlider({

			addActiveClass: true,

			arrowsNav: false,

			controlNavigation: 'none',

			autoScaleSlider: true, 

			autoScaleSliderWidth: 1200,     

			autoScaleSliderHeight: 475,

			loop: true,

			fadeinLoadedSlide: false,

			keyboardNavEnabled: true,

			globalCaptionInside: false,



			visibleNearby: {

			enabled: true,

			centerArea: 0.4,

			center: true,

			breakpoint: 1199,

			breakpointCenterArea: 0.6,

			navigateByCenterClick: true

		}

		

		}).data('royalSlider');

	});



	//HOVERS



	$(document).on('mouseenter','.thumbnail a', function () {

        $(this).children('.projectinfo').fadeIn('fast', function(){

			$(this).children('.meta').animate({

				bottom: 55 + "px"

			});

		});

    });

    $(document).on('mouseleave','.thumbnail a', function () {

        $(this).children('.projectinfo').fadeOut('fast', function(){

			$(this).children('.meta').animate({

				bottom: - 55 + "px"

			}, 1);

		});

    });



	//TIMER

	jQuery('.timer').appear();

	jQuery(document.body).on('appear', '.timer', function() {

		jQuery(this).countTo();

	});



	jQuery(document.body).on('disappear', '.timer', function() {

		jQuery(this).removeClass('timer');

	});



	//VIDEO

	 $(function() {

        var videobackground = new $.backgroundVideo($('#bgVideo'), {

            "align" : "centerXY",

            "path" : "video/",

            "width": 960,

            "height": 540,

            "filename" : "video",

            "types" : ["mp4", "ogg"]

        });

    });



	//PORTFOLIO FILTER

	var page_slug = document.URL;

	if(page_slug.indexOf("web")> -1) {

		if ( ($(window).width() > 750) ) {

			jQuery('.portfolio-block').mixitup({

				effects: ['fade','scale', 'rotateX'],

				easing: 'smooth',

				layoutMode: 'list',

				showOnLoad: 'featured'

			});

		} else {

			jQuery('.portfolio-block').mixitup({

				effects: ['fade','scale', 'rotateX'],

				easing: 'smooth',

				layoutMode: 'list',

				showOnLoad: 'all'

			});

		}

	} else {

			jQuery('.portfolio-block').mixitup({

				effects: ['fade','scale', 'rotateX'],

				easing: 'smooth',

				layoutMode: 'list',

				

			});



	}



	//PROJECT SLIDER

	$('.project-slider').bxSlider({

		touchEnabled: true,

		nextSelector: ".project-next",

		prevSelector: ".project-prev",

		pager: true,

		pagerSelector: ".project-controls",

		adaptiveHeight: true,

		onSliderLoad: function () {

	        BackgroundCheck.init({

	          targets: '.bx-prev, .bx-next, .bx-pager-link',

	          images: '.project-slider img'

	        });

     	},

     	onSlideAfter: function () {

            BackgroundCheck.refresh();

      	}

	});



	//GALLERY

	$('.lightbox').iLightBox({

		skin: 'dark'

	});



	 // $('.filtering li:first-child').removeClass('active');

       

	//RESPONSIVE VIDEO

	jQuery(".container").fitVids();

    



};

/* END ------------------------------------------------------- */



/* =Document Ready Trigger

-------------------------------------------------------------- */

$(document).ready(function(){



	initializeForm();



});

/* END ------------------------------------------------------- */