(function() {
    jQuery(function($) {

        var $body   = $('body'),
            $header = $('.header'),
            $footer = $('.footer'),
            $window = $(window),
            height = $(window).height(),
            isTouch = (('ontouchstart' in window) || (navigator.msMaxTouchPoints > 0));
            
            ACApp = {
                filterFinish: false,
                scrollFinish: false,

                init: function() {
                    this.loadBindings();
                    this.loadProjects();

                    setTimeout(this.type, 2000);
                },

                loadBindings: function () {
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
                },

                loadProjects : function() {
                    var filterName = $('.filter.active').data('filter');
                    var thisApp = this;
                    count_project = 1;

                    $(window).scroll(function(){
                        if($(window).scrollTop() == $(document).height() - $(window).height()) {
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
                                    $('.spinner').removeClass('hide-loader').addClass('show-loader');
                                },

                                complete: function(){
                                    $('.spinner').removeClass('show-loader').addClass('hide-loader');
                                },

                                success: function(html){
                                    $('.portfolio-grid').append(html);
                                    if($( 'div.no-more' ).text() == 'No More Posts To Display') {
                                        thisApp.scrollFinish = true;
                                        $('.spinner-parent').hide();
                                    }
                                }
                            });
                        }
                        return false;
                    }

                },

            };

        ACApp.init();

    });
})();
