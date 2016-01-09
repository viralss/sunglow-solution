(function() {
	$(function() {

		var height = $(window).height();
		var isTouch = (('ontouchstart' in window) || (navigator.msMaxTouchPoints > 0));

		$('[data-toggle="tooltip"]').tooltip();

		if(isFrontPage == '1') {
			$('.hero').css('min-height', height);
			/*$('.learn-more').click(function(e) { 
				e.preventDefault();
				var minusHeight = $(window).width() > 1199 ? 65 : 0;
				$('html, body').animate({ scrollTop : height - minusHeight }, 1000); 
			});*/
		}

		if(isAboutPage == '1') {
			$('a[href^="/about/#"]').on('click',function (e) {
			    e.preventDefault();

			    var target = this.hash,
			    $target = $(target);

			    $('html, body').stop().animate({
			        'scrollTop': $target.offset().top - 95
			    }, 900, 'swing', function () {
			        window.location.hash = target;
			    });
			});

			if(location.hash) {
				$('html, body').stop().animate({
			        'scrollTop': $(location.hash).offset().top - 95
			    }, 900, 'swing');
			}
		}

		if(isTouch) {
			$('.show-on-mobile').show();
		}else {
			$('.show-on-desktop').show();
		}
	});
	
	//Preloading client section image

		$("#client-1").hover(function() {
			$(this).attr("src", cdnImagesUrl + "/logos/hrx-new.png");
		});
		$("#client-1").mouseleave(function() {
			$(this).attr("src",  templateUrl + "/images/logos/hrx.png");
		});

		$("#client-2").hover(function() {
			$(this).attr("src", cdnImagesUrl + "/logos/growhouse-new.png");
		});
		$("#client-2").mouseleave(function() {
			$(this).attr("src",  templateUrl + "/images/logos/growhouse.png");
		});

		$("#client-3").hover(function() {
			$(this).attr("src", cdnImagesUrl + "/logos/vogue-new.png");
		});
		$("#client-3").mouseleave(function() {
			$(this).attr("src",  templateUrl + "/images/logos/vogue.png");
		});

		$("#client-4").hover(function() {
			$(this).attr("src", cdnImagesUrl + "/logos/solgari-new.png");
		});
		$("#client-4").mouseleave(function() {
			$(this).attr("src",  templateUrl + "/images/logos/solgari.png");
		});

		$("#client-5").hover(function() {
			$(this).attr("src", cdnImagesUrl + "/logos/eden-new.png");
		});
		$("#client-5").mouseleave(function() {
			$(this).attr("src",  templateUrl + "/images/logos/eden.png");
		});

		$("#client-6").hover(function() {
			$(this).attr("src", cdnImagesUrl + "/logos/bha-new.png");
		});
		$("#client-6").mouseleave(function() {
			$(this).attr("src",  templateUrl + "/images/logos/bha.png");
		});

		$("#client-7").hover(function() {
			$(this).attr("src", cdnImagesUrl + "/logos/cm-new.png");
		});
		$("#client-7").mouseleave(function() {
			$(this).attr("src",  templateUrl + "/images/logos/cm.png");
		});
		
		$("#client-8").hover(function() {
			$(this).attr("src", cdnImagesUrl + "/logos/weg-new.png");
		});
		$("#client-8").mouseleave(function() {
			$(this).attr("src",  templateUrl + "/images/logos/weg.png");
		});

		$("#client-9").hover(function() {
			$(this).attr("src", cdnImagesUrl + "/logos/instarem-hover.png");
		});
		$("#client-9").mouseleave(function() {
			$(this).attr("src",  templateUrl + "/images/logos/instarem.png");
		});

		$("#client-10").hover(function() {
			$(this).attr("src", cdnImagesUrl + "/logos/zoiro-hover.png");
		});
		$("#client-10").mouseleave(function() {
			$(this).attr("src",  templateUrl + "/images/logos/zoiro.png");
		});

		$("#client-11").hover(function() {
			$(this).attr("src", cdnImagesUrl + "/logos/pinax-hover.png");
		});
		$("#client-11").mouseleave(function() {
			$(this).attr("src",  templateUrl + "/images/logos/pinax.png");
		});

		$("#client-12").hover(function() {
			$(this).attr("src", cdnImagesUrl + "/logos/writer-hover.png");
		});
		$("#client-12").mouseleave(function() {
			$(this).attr("src",  templateUrl + "/images/logos/writer.png");
		});

		// Infinite scroll	

		var filterName = $('.filter.active').data('filter');

        var scrollFinish = false;

        var thisApp = this;
        count_project = 1; 
        $(window).scroll(function(){
            if($(window).scrollTop() + 100 > $(document).height() - $(window).height()) {
            	//alert('bottom');
            	//$(window).unbind('scroll');
                loadMoreProjects(++count_project,$('.filter.active').data('filter'));
            }
        }); 

        function loadMoreProjects(pageNumber,filterName){ 
            if(!thisApp.scrollFinish) {
                $.ajax({
                    url: wpUrl + '/wp-admin/admin-ajax.php',
                    type:'POST',
                    data: 'action=infinite_scroll_project&page_no='+pageNumber+'&filter_name='+filterName+'&current_url='+window.location.href,
                    
                    beforeSend: function() {
                    	$('.spinner').removeClass('hide-loader');
                        $('.spinner').addClass('show-loader');
                    },

                    complete: function(){
                    	$('.spinner').removeClass('show-loader');
                        $('.spinner').addClass('hide-loader');
                    },

                    success: function(html){
                        if($( 'div.no-more' ).text() == 'No More Posts To Display') {
                            thisApp.scrollFinish = true;
                            $('.spinner-parent').hide();
                        } else {                           	
                           //$(window).bind('scroll');
                           $('.portfolio-grid').append(html);
                           $('.spinner-parent').show();
                        }
                    }
                });
            }
            return false;
        }

        // Typed js

        function type() {
			$('.typed').typed({
	            strings: ['Mobile.'],
	            typeSpeed: 35
	        });
		}

		setTimeout(type, 2000);

})();