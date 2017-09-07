/*
 * M-Store | Modern E-Commerce Template
 * Copyright 2016 rokaux
 * Theme Custom Scripts
 */

jQuery(document).ready(function($) {
	'use strict';

	// Check if Page Scrollbar is visible
	//------------------------------------------------------------------------------
	var hasScrollbar = function() {
	  // The Modern solution
	  if (typeof window.innerWidth === 'number') {
	    return window.innerWidth > document.documentElement.clientWidth;
		}

	  // rootElem for quirksmode
	  var rootElem = document.documentElement || document.body;

	  // Check overflow style property on body for fauxscrollbars
	  var overflowStyle;

	  if (typeof rootElem.currentStyle !== 'undefined') {
			overflowStyle = rootElem.currentStyle.overflow;
		}

	  overflowStyle = overflowStyle || window.getComputedStyle(rootElem, '').overflow;

	    // Also need to check the Y axis overflow
	  var overflowYStyle;

	  if (typeof rootElem.currentStyle !== 'undefined') {
			overflowYStyle = rootElem.currentStyle.overflowY;
		}

	  overflowYStyle = overflowYStyle || window.getComputedStyle(rootElem, '').overflowY;

	  var contentOverflows = rootElem.scrollHeight > rootElem.clientHeight;
	  var overflowShown    = /^(visible|auto)$/.test(overflowStyle) || /^(visible|auto)$/.test(overflowYStyle);
	  var alwaysShowScroll = overflowStyle === 'scroll' || overflowYStyle === 'scroll';

	  return (contentOverflows && overflowShown) || (alwaysShowScroll);
	};
	if (hasScrollbar()) {
		$('body').addClass('hasScrollbar');
	}


	// Disable default link behavior for dummy links that have href='#'
	//------------------------------------------------------------------------------
	var $emptyLink = $('a[href=#]');
	$emptyLink.on('click', function(e){
		e.preventDefault();
	});


	// Page Transitions
	//------------------------------------------------------------------------------
	if($('.page-preloading').length) {
		$('a:not([href^="#"])').on('click', function(e) {
	    if($(this).attr('class') !== 'video-popup-btn' && $(this).attr('class') !== 'gallery-item' && $(this).attr('class') !== 'ajax-post-link' && $(this).attr('class') !== 'read-more ajax-post-link') {
				console.log($(this).attr('class'));
	      e.preventDefault();
	      var linkUrl = $(this).attr('href');
	      $('.page-preloading').addClass('link-clicked');
	      setTimeout(function(){
	        window.open(linkUrl , '_self');
	      }, 550);
	    }
	  });
	}


	// Animated Scroll to Top Button
	//------------------------------------------------------------------------------
	var $scrollTop = $('.scroll-to-top-btn');
	if ($scrollTop.length > 0) {
		$(window).on('scroll', function(){
	    if ($(window).scrollTop() > 600) {
	      $scrollTop.addClass('visible');
	    } else {
	      $scrollTop.removeClass('visible');
	    }
		});
		$scrollTop.on('click', function(e){
			e.preventDefault();
			$('html').velocity("scroll", { offset: 0, duration: 1000, easing:'easeOutExpo', mobileHA: false });
		});
	}


	// Smooth scroll to element
	//------------------------------------------------------------------------------
	var $scrollTo = $('.scroll-to');
	$scrollTo.on('click', function(event) {
		var $elemOffsetTop = $(this).data('offset-top');
		$('html').velocity("scroll", { offset:$(this.hash).offset().top-$elemOffsetTop, duration: 1000, easing:'easeOutExpo', mobileHA: false});
		event.preventDefault();
	});


	// Language Dropdown
	//------------------------------------------------------------------------------
	var langSwitcher = $('.lang-switcher'),
			langToggle = $('.lang-toggle');
	langToggle.on('click', function() {
		$(this).parent().toggleClass('open');
	});
	langSwitcher.on('click', function(e) {
    e.stopPropagation();
	});
	$(document).on('click', function(e) {
		langSwitcher.removeClass('open');
	});


	// Toolbar Dropdown
	//------------------------------------------------------------------------------
	var toolbarToggle = $('.toolbar-toggle'),
			toolbarDropdown = $('.toolbar-dropdown'),
			toolbarSection = $('.toolbar-section');

	function closeToolBox() {
		toolbarToggle.removeClass('active');
		toolbarSection.removeClass('current');
	}

	toolbarToggle.on('click', function(e) {
		var currentValue = $(this).attr('href');
		if($(e.target).is('.active')) {
			closeToolBox();
			toolbarDropdown.removeClass('open');
		} else {
			toolbarDropdown.addClass('open');

			closeToolBox();
			$(this).addClass('active');
			$(currentValue).addClass('current');
		}
		e.preventDefault();
	});
	$(toolbarDropdown).on('click', '.close-dropdown', function() {
		toolbarDropdown.removeClass('open');
		toolbarToggle.removeClass('active');
		toolbarSection.removeClass('current');
	});

	// var toggleSection = $('.toggle-section');
    //
	// toggleSection.on('click', function(e) {
	// 	var currentValue = $(this).attr('href');
	// 	toolbarSection.removeClass('current');
	// 	$(currentValue).addClass('current');
	// 	e.preventDefault();
	// });

    var toggleSection = $('.toggle-section');
    var bool = false;

    $(toolbarDropdown).on('click', '.toggle-section', function(e) {
        var currentValue = $(this).attr('href');

        $('.toolbar-section').removeClass('current');

            $(currentValue).addClass('current');

        e.preventDefault();
    });





	// Toggle Submenu
	//------------------------------------------------------------------------------
	var $hasSubmenu = $('.menu-item-has-children > a');

	function closeSubmenu() {
		$hasSubmenu.parent().removeClass('active');
	}
	$hasSubmenu.on('click', function(e) {
		if($(e.target).parent().is('.active')) {
			closeSubmenu();
		} else {
			closeSubmenu();
			$(this).parent().addClass('active');
		}
	});


	// Isotope Grid / Filters (Gallery)
	//------------------------------------------------------------------------------
	$(window).on('load', function(){

		// Isotope Grid
		var $grid = $('.isotope-grid');
		if($grid.length > 0) {
		  $grid.isotope({
			  itemSelector: '.grid-item',
			  transitionDuration: '0.7s',
			  masonry: {
			    columnWidth: '.grid-sizer',
			    gutter: '.gutter-sizer'
			  }
		  });
			setTimeout( function () {
        $grid.isotope( 'layout' );
      }, 1 );
		}

		// Filtering
		if($('.filter-grid').length > 0) {
		  var $filterGrid = $('.filter-grid');
			$('.nav-filters').on( 'click', 'a', function(e) {
				e.preventDefault();
				$('.nav-filters li').removeClass('active');
				$(this).parent().addClass('active');
			  var $filterValue = $(this).attr('data-filter');
			  $filterGrid.isotope({ filter: $filterValue });
			});
		}
	});


	// Shop Filters Toggle
	//------------------------------------------------------------------------------
	var filtersToggle = $('[data-toggle="filters"]'),
			filtersWrap = $('.filters'),
			filtersPane = $('.filters-pane');
	function closeFilterPane() {
		filtersToggle.removeClass('active');
		filtersPane.removeClass('open');
		filtersWrap.css('height', 0);
	}
	filtersToggle.on('click', function(e) {
		var currentFilter = $(this).attr('href');
		if($(this).is('.active')) {
			closeFilterPane();
		} else {
			closeFilterPane();
			$(this).addClass('active');
			filtersWrap.css('height', $(currentFilter).outerHeight());
			$(currentFilter).addClass('open');
		}
		e.preventDefault();
	});
	if(typeof window.Modernizr !== "undefined" && !Modernizr.touch) {
		$(window).on('resize', function() {
			closeFilterPane();
		});
	}

	// Sidebar Toggle on Mobile
	//------------------------------------------------------------------------------
	var sidebar = $('.sidebar'),
			sidebarToggle = $('.sidebar-toggle');
	sidebarToggle.on('click', function() {
		$(this).addClass('sidebar-open');
		sidebar.addClass('open');
	});
	$('.sidebar-close').on('click', function() {
		sidebarToggle.removeClass('sidebar-open');
		sidebar.removeClass('open');
	});


	// Count Input (Quantity)
	//------------------------------------------------------------------------------

	$(".toolbar-section").on("click", ".incr-btn", function(e) {
		var $button = $(this);
		var oldValue = $button.parent().find('.quantity').val();
		var oldValueCount = $('.count').html();
        var oldValueAmount = $('.amount').html();
        var oldItemPrice = $button.parent().parent().find('.item-price').html();
        var id = $button.parent().find('.quantity_hidden').val();
        var id_price = $button.parent().find('.price_hidden').val();
        var absolutePath = $('.absolute-path').val();
		$button.parent().find('.incr-btn[data-action="decrease"]').removeClass('inactive');
		if ($button.data('action') == "increase") {
			var newVal = parseFloat(oldValue) + 1;
			var newValItemPrice = parseFloat(oldItemPrice) + parseFloat(id_price);
            var newValCount = parseFloat(oldValueCount) + 1;
            var newValAmount = parseFloat(oldValueAmount) + parseFloat(id_price);
            $.get(absolutePath+"/add/"+id, function(data){
                $('.count').text(data['totalQty']);
            });
		} else {
			if (oldValue > 1) {
				var newVal = parseFloat(oldValue) - 1;
                var newValItemPrice = parseFloat(oldItemPrice) - parseFloat(id_price);
				var newValCount = parseFloat(oldValueCount) - 1;
                var newValAmount = parseFloat(oldValueAmount) - parseFloat(id_price);
			} else {
				if(oldValue < 1 || oldValue == 1) {
                    var newValCount = parseFloat(oldValueCount) - parseFloat(oldValue);
                    var newValAmount = parseFloat(oldValueAmount) - parseFloat(id_price);
                    $button.parent().parent().parent().css('display', 'none');
				}
			}
            $.get(absolutePath+"reduce/"+id, function(data){
                $('.count').text(data['totalQty']);
            });
		}

		$button.parent().find('.quantity').val(newVal);
        $button.parent().parent().find('.item-price').text(newValItemPrice);
        $('.count').text(newValCount);
        $('.amount').text(newValAmount);
		e.preventDefault();
	});


    // Count Input Single Page(Quantity)
    //------------------------------------------------------------------------------
    $(".incr-btn-single").on("click", function(e) {
        var $button = $(this);
        var oldValue = $button.parent().find('.quantity').val();
        if ($button.data('action') == "increase") {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            if (oldValue > 1) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                if(oldValue < 1 || oldValue == 1) {
                    newVal = 1;
                    $button.addClass('inactive');
                }
            }
        }

        $button.parent().find('.quantity').val(newVal);
        $button.parent().parent().find('.item-price').text(newValItemPrice);
        $('.count').text(newValCount);
        $('.amount').text(newValAmount);
        e.preventDefault();
    });


    // Remove item from cart
    //------------------------------------------------------------------------------
    $(".toolbar-section").on("click", ".item-remove", function(e) {
        var absolutePath = $('.absolute-path').val();
        var id = $(this).parent().find('.quantity_hidden').val();
        var oldValue = $(this).parent().find('.quantity').val();
        var oldValueCount = $('.count').html();
        var oldValueAmount = $('.amount').html();
        var oldItemPrice = $(this).parent().find('.item-price').html();
        $.get(absolutePath+"remove/"+id, function(data){
            $('.count').text(data['totalQty']);
            $('.amount').text(data['totalPrice']);
        });

        var newValCount = parseFloat(oldValueCount) - parseFloat(oldValue);
        var newValAmount = parseFloat(oldValueAmount) - parseFloat(oldItemPrice);
        $('.count').text(newValCount);
        $('.amount').text(newValAmount);
        $(this).parent().css('display', 'none');
    });

    // Checkout confirm
    //------------------------------------------------------------------------------
    //
    Stripe.setPublishableKey('pk_test_op482rfaagYh5NrxQVRlqEYG');
    var form = $('#checkout-form');

    $(".checkout_butn").on("click",function(event){
        $('#charge-error').addClass('hidden');
        $(".checkout_butn").prop('disabled', true);
        Stripe.card.createToken({
            number: $('#cart-number').val(),
            cvc: $('#cart-cvc').val(),
            exp_month: $('#cart-expiry-month').val(),
            exp_year: $('#cart-expiry-year').val(),
            name: $('#cart-name').val()
        }, stripeResponseHandler);
        return false;
    });

    function stripeResponseHandler(status, response) {
        if(response.error){
            $('#charge-error').removeClass('hidden');
            $('#charge-error').text(response.error.message);
            $(".checkout_butn").prop('disabled', false);
        } else {
            var token = response.id;
            form.append($('<input type="hidden" id="stripe-token" name="stripeToken"/>').val(token));
            var absolutePath = $('.absolute-path').val();
            var form_name = $('#name').val();
            var form_address = $('#address').val();
            var form_cart_name = $('#cart-name').val();
            var form_cart_number = $('#cart-number').val();
            var form_cart_month = $('#cart-expiry-month').val();
            var form_cart_year = $('#cart-expiry-year').val();
            var form_cart_cvc = $('#cart-cvc').val();
            var form_token = $('#stripe-token').val();
            $.ajax({
                type: "POST",
                url: url,
                data: {
                    name: form_name,
                    address: form_address,
                    cart_name: form_cart_name,
                    cart_number: form_cart_number,
                    cart_month: form_cart_month,
                    cart_year: form_cart_year,
                    cart_cvc: form_cart_cvc,
					_token: token_chekout,
                    token: form_token
                }
            })
                .done(function (msg) {
                    $('.modal-button').trigger('click');
                    $('.modal-body h4').text(msg);
                    if(msg == 'Successfully purchased'){
                        $('.toolbar-dropdown ').removeClass('open');
                        $('.count').text('0');
                        $('.toolbar-toggle').removeClass('active');
					}

                });
        }
    }


    // Category filter
    //------------------------------------------------------------------------------
	$('.modal-button').on("click", function () {
        $('.modal-title').html('Please logged in or signup');
    });

    $(function() {
        function reposition() {
            var modal = $(this),
                dialog = modal.find('.modal-dialog');
            modal.css('display', 'block');
            // Dividing by two centers the modal exactly, but dividing by three
            // or four works better for larger screens.
            dialog.css("margin-top", Math.max(0, ($(window).height() - dialog.height()) / 2));
        }
        // Reposition when a modal is shown
        $('.modal').on('show.bs.modal', reposition);
        // Reposition when the window is resized
        $(window).on('resize', function() {
            $('.modal:visible').each(reposition);
        });
    });

    // Category filter
    //------------------------------------------------------------------------------
    $('.product-category a').on("click", function(e) {
                $('.widget-color .active').removeClass('active');
                var category = $(this).attr('href').slice(1);
                $(".product-category").removeClass("active");
                $(this).parent().addClass('active');
                $.get("get-product-category/" + category, function (data) {
                    $('.container-products').html(data);
                });

    });

    $('.choose-color a').on("click", function(e) {
    	var category = $('.nav-filters li.active a').attr('href').slice(1);
        var atr = $(this).attr('href').slice(1);
        $(".choose-color").removeClass("active");
        $(this).parent().addClass('active');
        $.get("get-product-category-atr/"+category+"/"+atr, function(data){
            $('.container-products').html(data);
        });
    });

    $('.price-range-slider button').on("click", function(e) {
        var category = $('.nav-filters li.active a').attr('href').slice(1);
        var atr = $('.widget-color .active a').attr('href');
        	if(!atr){
        		atr = "all"
			} else {
                atr = $('.widget-color .active a').attr('href').slice(1);
			}
        var min = $('.ui-range-value-min span').text();
        var max = $('.ui-range-value-max span').text();

        $.get("get-product-price/"+category+"/"+atr+"/"+min+"/"+max, function(data){
            $('.container-products').html(data);
        });
	});
	// Waves Effect (on Buttons)
	//------------------------------------------------------------------------------
	if($('.waves-effect').length) {
		Waves.displayEffect( { duration: 600 } );
	}

	//Add to cart
    //------------------------------------------------------------------------------
    $('.single-page').on("click", '.add-to-cart', function(e) {
       var id = $(this).parent().find('.item-id').val(); //prod id
		console.log(id);
       var quantity = $('.numb').val(); // quantity input
       var oldValueCount = $('.count').html(); // general count in header
       var newValCount = parseFloat(oldValueCount) + parseFloat(quantity);
        var absolutePath = $('.absolute-path').val();
        $('.count').text(newValCount);
       $.get(absolutePath+"/add-to-cart/"+id+"/"+quantity, function(data){
           $('.toolbar-section-cart').html(data);
       });

    });

	// Add to Cart Button Effect
	//------------------------------------------------------------------------------
	var animating = false;
	$('.shop-item').each(function() {
		var addToCartBtn = $(this).find('.add-to-cart');
		addToCartBtn.on('click', function() {
			if(!animating) {
				//animate if not already animating
				animating =  true;
				// resetCustomization(addToCartBtn);

				addToCartBtn.addClass('is-added').find('path').eq(0).animate({
					//draw the check icon
					'stroke-dashoffset':0
				}, 300, function(){
					setTimeout(function(){
						// updateCart();
						addToCartBtn.removeClass('is-added').find('em').on('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
							//wait for the end of the transition to reset the check icon
							addToCartBtn.find('path').eq(0).css('stroke-dashoffset', '19.79');
							animating =  false;
						});

						if( $('.no-csstransitions').length > 0 ) {
							// check if browser doesn't support css transitions
							addToCartBtn.find('path').eq(0).css('stroke-dashoffset', '19.79');
							animating =  false;
						}
					}, 600);
				});
			}
		});
	});


	// Product Gallery
	//------------------------------------------------------------------------------
	var galleryThumb = $('.product-gallery-thumblist a'),
			galleryPreview = $('.product-gallery-preview > li');

	// Thumbnails
	//------------------------------------------------------------------------------
	galleryThumb.on('click', function(e) {
		var target = $(this).attr('href');

		galleryThumb.parent().removeClass('active');
		$(this).parent().addClass('active');
		galleryPreview.removeClass('current');
		$(target).addClass('current');

		e.preventDefault();
	});


	// Color Select
	//------------------------------------------------------------------------------
	$('.color-select').on('change', function() {
		var target = $(this).find(':selected').data('image');
		$('[href="#' + target + '"]').trigger('click');
	});


	// Single Post via Ajax
	//------------------------------------------------------------------------------
	var ajaxPostLink = $('.ajax-post-link'),
			postBackdrop = $('.single-post-backdrop'),
			postContainer = $('.single-post-wrap'),
			postContentWrap = $('.single-post-wrap .inner'),
			postContent = $('.single-post-wrap .inner .post-content'),
			closeBtn = $('.single-post-wrap .close-btn'),
			postPreloader = $('.single-post-wrap .preloader');

	// Get Data via Ajax
	function getData(url) {
		$.ajax({
			url: url,
			type: "GET",
			dataType: "html",
			success: successFn,
			error: errorFn,
			complete: function(xhr, status) {
				console.log('Request is complete!');
			}
		});
	}

	// Success
	function successFn(result, status) {
		postContent.prepend(result);
		postContentWrap.addClass('loaded');
		console.log('Data has been received!');
	}

	// Error
	function errorFn(xhr, status, strErr) {
		postContent.prepend('<p>' + strErr + '</p>');
		postContentWrap.addClass('loaded');
		console.log(strErr);
	}

	// Open Post
	function openPost(postUrl) {

		$('body').addClass('blog-post-open');
		postBackdrop.addClass('active');
		postContainer.addClass('open');
		postPreloader.addClass('active');

		setTimeout(function() {
			postPreloader.removeClass('active');
			getData(postUrl);
		}, 900);
	}

	// Close Post
	function closePost() {
		$('body').removeClass('blog-post-open');
		postBackdrop.removeClass('active');
		postContainer.removeClass('open');
		postContentWrap.removeClass('loaded');
		setTimeout(function() {
			postContent.empty();
		}, 500);
	}

	ajaxPostLink.on('click', function(e) {
		var targetPost = $(this).attr('href');

		openPost(targetPost);

		e.preventDefault();
	});

	closeBtn.on('click', closePost);


	// Tooltips
	//------------------------------------------------------------------------------
	var $tooltip = $('[data-toggle="tooltip"]');
	if ( $tooltip.length > 0 ) {
		$tooltip.tooltip();
	}


	// Custom checkboxes and radios
	//------------------------------------------------------------------------------
	var $checkbox = $('input[type="checkbox"], input[type="radio"]');
	if($checkbox.length) {
		$('input').iCheck();
	}


	// Countdown Function
	//------------------------------------------------------------------------------
	function countDownFunc( items, trigger ) {
		items.each( function() {
			var countDown = $(this),
					dateTime = $(this).data('date-time');

			var countDownTrigger = ( trigger ) ? trigger : countDown;
			countDownTrigger.downCount({
		      date: dateTime,
		      offset: +10
		  });
		});
	}
	countDownFunc( $('.countdown') );


	// Image Carousel
	//------------------------------------------------------------------------------
	var $imageCarousel = $( '.image-carousel .inner' );
	if ( $imageCarousel.length > 0 ) {
		$imageCarousel.each( function () {

			var dataLoop 	 = $( this ).parent().data( 'loop' ),
					autoPlay   = $( this ).parent().data( 'autoplay' ),
					timeOut    = $( this ).parent().data( 'interval' ),
					autoheight = $( this ).parent().data( 'autoheight' ),
					dataDots 	 = $( this ).parent().data( 'dots' );

			$( this ).owlCarousel( {
				items: 1,
				loop: dataLoop,
				margin: 0,
				nav: true,
				dots: dataDots,
				navText: [ , ],
				autoplay: autoPlay,
				autoplayTimeout: timeOut,
				autoHeight: autoheight
			} );
		} );
	}


	// Hero Slider
	//------------------------------------------------------------------------------
	var $heroSlider = $( '.hero-slider .inner' );
	if ( $heroSlider.length > 0 ) {
		$heroSlider.each( function () {

		var	loop = $(this).parent().data('loop'),
				autoplay = $(this).parent().data('autoplay'),
				interval = $(this).parent().data('interval') || 3000;

			$(this).owlCarousel({
				items: 1,
				loop: loop,
				margin: 0,
				nav: true,
				dots: true,
				navText: [ , ],
				autoplay: autoplay,
				autoplayTimeout: interval,
				autoplayHoverPause: true,
				smartSpeed: 450
			});
		});
	}


	// Video Popup
	//------------------------------------------------------------------------------
	var $videoBtn = $( '.video-popup-btn, .gallery-video, .video-popup-placeholder .play-btn' );
	if( $videoBtn.length > 0 ) {
		$videoBtn.magnificPopup( {
		  type: 'iframe',
		  mainClass: 'mfp-fade',
		  removalDelay: 500,
		  gallery: {
		    enabled: true
		  }
		} );
	}


	// Gallery Popup
	//------------------------------------------------------------------------------
	var $galleryItem = $( '.gallery-item' );
	if( $galleryItem.length > 0 ) {
		$galleryItem.magnificPopup( {
		  type: 'image',
		  mainClass: 'mfp-fade',
		  removalDelay: 500,
		  gallery: {
		    enabled: true
		  }
		} );
	}


	// Range Slider
	//------------------------------------------------------------------------------
	var rangeSlider  = document.querySelector('.ui-range-slider');
	if(typeof rangeSlider !== 'undefined' && rangeSlider !== null) {
		var dataStartMin = parseInt(rangeSlider.parentNode.getAttribute( 'data-start-min' ), 10),
				dataStartMax = parseInt(rangeSlider.parentNode.getAttribute( 'data-start-max' ), 10),
				dataMin 		 = parseInt(rangeSlider.parentNode.getAttribute( 'data-min' ), 10),
				dataMax   	 = parseInt(rangeSlider.parentNode.getAttribute( 'data-max' ), 10),
				dataStep  	 = parseInt(rangeSlider.parentNode.getAttribute( 'data-step' ), 10);
		var valueMin 			= document.querySelector('.ui-range-value-min span'),
				valueMax 			= document.querySelector('.ui-range-value-max span'),
				valueMinInput = document.querySelector('.ui-range-value-min input'),
				valueMaxInput = document.querySelector('.ui-range-value-max input');
		noUiSlider.create(rangeSlider, {
			start: [ dataStartMin, dataStartMax ],
			connect: true,
			step: dataStep,
			range: {
				'min': dataMin,
				'max': dataMax
			}
		});
		rangeSlider.noUiSlider.on('update', function(values, handle) {
			var value = values[handle];
			if ( handle ) {
				valueMax.innerHTML  = Math.round(value);
				valueMaxInput.value = Math.round(value);
			} else {
				valueMin.innerHTML  = Math.round(value);
				valueMinInput.value = Math.round(value);
			}
		});

	}


	// Google Maps API
	//------------------------------------------------------------------------------
	var $googleMap = $('.google-map');
	if($googleMap.length > 0) {
		$googleMap.each(function(){
			var mapHeight = $(this).data('height'),
					address = $(this).data('address'),
					zoom = $(this).data('zoom'),
					controls = $(this).data('disable-controls'),
					scrollwheel = $(this).data('scrollwheel'),
					marker = $(this).data('marker'),
					markerTitle = $(this).data('marker-title'),
					styles = $(this).data('styles');
			$(this).height(mapHeight);
			$(this).gmap3({
          marker:{
            address: address,
            data: markerTitle,
            options: {
            	icon: marker
            },
            events: {
              mouseover: function(marker, event, context){
                var map = $(this).gmap3("get"),
                  	infowindow = $(this).gmap3({get:{name:"infowindow"}});
                if (infowindow){
                  infowindow.open(map, marker);
                  infowindow.setContent(context.data);
                } else {
                  $(this).gmap3({
                    infowindow:{
                      anchor:marker,
                      options:{content: context.data}
                    }
                  });
                }
              },
              mouseout: function(){
                var infowindow = $(this).gmap3({get:{name:"infowindow"}});
                if (infowindow){
                  infowindow.close();
                }
              }
            }
          },
          map:{
            options:{
              zoom: zoom,
              disableDefaultUI: controls,
              scrollwheel: scrollwheel,
              styles: styles
            }
          }
			});
		});
	}

});/*Document Ready End*/
