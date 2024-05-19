

// 	/*	=========================================================================
// 	When document is Scrollig, do
// 	========================================================================== */

// 	jQuery(document).on('ready', function () {
// 		(function ($) {
// 			// add your functions
// 			directionswitch();
// 			swithcerMenu();
// 			datepicker ();
// 			timepicker ();
// 		})(jQuery);
// 	});



// 	/* ==========================================================================
//    When document is Scrollig, do
//    ========================================================================== */
	
// 	$(window).on('scroll', function() {
// 		headerStyle();
// 	});

	
	
// 	/* ==========================================================================
//    When document is loaded, do
//    ========================================================================== */
	

(function($) {
	
	"use strict";
	
	//Hide Loading Box (Preloader)
	function handlePreloader() {
		if($('.loader-wrap').length){
			$('.loader-wrap').delay(1000).fadeOut(500);
		}
	}

	if ($(".preloader-close").length) {
        $(".preloader-close").on("click", function(){
            $('.loader-wrap').delay(200).fadeOut(500);
        })
    }

    if ($(".switch_btn_one").length) {
	    $(".search__toggler").on("click", function(){
	    	$(".search-field .switch_btn_one").addClass("active");
	    })     
	    $(".switch_btn_one .close-btn").on("click", function(){
	    	$(".search-field .switch_btn_one").removeClass("active");
	    }) 
    }
	
	//Update Header Style and Scroll to Top
	function headerStyle() {
		if($('.main-header').length){
			var windowpos = $(window).scrollTop();
			var siteHeader = $('.main-header');
			var scrollLink = $('.scroll-top');
			if (windowpos >= 110) {
				siteHeader.addClass('fixed-header');
				scrollLink.addClass('open');
			} else {
				siteHeader.removeClass('fixed-header');
				scrollLink.removeClass('open');
			}
		}
	}
	
	headerStyle();


	//Submenu Dropdown Toggle
	if($('.main-header li.dropdown ul').length){
		$('.main-header .navigation li.dropdown').append('<div class="dropdown-btn"><span class="fas fa-angle-down"></span></div>');
		
	}

	//Mobile Nav Hide Show
	if($('.mobile-menu').length){
		
		$('.mobile-menu .menu-box').mCustomScrollbar();
		
		var mobileMenuContent = $('.main-header .menu-area .main-menu').html();
		$('.mobile-menu .menu-box .menu-outer').append(mobileMenuContent);
		$('.sticky-header .main-menu').append(mobileMenuContent);
		
		//Dropdown Button
		$('.mobile-menu li.dropdown .dropdown-btn').on('click', function() {
			$(this).toggleClass('open');
			$(this).prev('ul').slideToggle(500);
		});
		//Dropdown Button
		$('.mobile-menu li.dropdown .dropdown-btn').on('click', function() {
			$(this).prev('.megamenu').slideToggle(900);
		});
		//Menu Toggle Btn
		$('.mobile-nav-toggler').on('click', function() {
			$('body').addClass('mobile-menu-visible');
		});

		//Menu Toggle Btn
		$('.mobile-menu .menu-backdrop,.mobile-menu .close-btn').on('click', function() {
			$('body').removeClass('mobile-menu-visible');
		});
	}


	// Scroll to a Specific Div
	if($('.scroll-to-target').length){
		$(".scroll-to-target").on('click', function() {
			var target = $(this).attr('data-target');
		   // animate
		   $('html, body').animate({
			   scrollTop: $(target).offset().top
			 }, 1000);
	
		});
	}

	// Elements Animation
	if($('.wow').length){
		var wow = new WOW({
		mobile:       false
		});
		wow.init();
	}

	//Contact Form Validation
	if($('#contact-form').length){
		$('#contact-form').validate({
			rules: {
				username: {
					required: true
				},
				email: {
					required: true,
					email: true
				},
				phone: {
					required: true
				},
				subject: {
					required: true
				},
				message: {
					required: true
				}
			}
		});
	}

	//Fact Counter + Text Count
	if($('.count-box').length){
		$('.count-box').appear(function(){
	
			var $t = $(this),
				n = $t.find(".count-text").attr("data-stop"),
				r = parseInt($t.find(".count-text").attr("data-speed"), 10);
				
			if (!$t.hasClass("counted")) {
				$t.addClass("counted");
				$({
					countNum: $t.find(".count-text").text()
				}).animate({
					countNum: n
				}, {
					duration: r,
					easing: "linear",
					step: function() {
						$t.find(".count-text").text(Math.floor(this.countNum));
					},
					complete: function() {
						$t.find(".count-text").text(this.countNum);
					}
				});
			}
			
		},{accY: 0});
	}


	//LightBox / Fancybox
	if($('.lightbox-image').length) {
		$('.lightbox-image').fancybox({
			openEffect  : 'fade',
			closeEffect : 'fade',
			helpers : {
				media : {}
			}
		});
	}


	//Tabs Box
	if($('.tabs-box').length){
		$('.tabs-box .tab-buttons .tab-btn').on('click', function(e) {
			e.preventDefault();
			var target = $($(this).attr('data-tab'));
			
			if ($(target).is(':visible')){
				return false;
			}else{
				target.parents('.tabs-box').find('.tab-buttons').find('.tab-btn').removeClass('active-btn');
				$(this).addClass('active-btn');
				target.parents('.tabs-box').find('.tabs-content').find('.tab').fadeOut(0);
				target.parents('.tabs-box').find('.tabs-content').find('.tab').removeClass('active-tab');
				$(target).fadeIn(300);
				$(target).addClass('active-tab');
			}
		});
	}



	//Accordion Box
	if($('.accordion-box').length){
		$(".accordion-box").on('click', '.acc-btn', function() {
			
			var outerBox = $(this).parents('.accordion-box');
			var target = $(this).parents('.accordion');
			
			if($(this).hasClass('active')!==true){
				$(outerBox).find('.accordion .acc-btn').removeClass('active');
			}
			
			if ($(this).next('.acc-content').is(':visible')){
				return false;
			}else{
				$(this).addClass('active');
				$(outerBox).children('.accordion').removeClass('active-block');
				$(outerBox).find('.accordion').children('.acc-content').slideUp(300);
				target.addClass('active-block');
				$(this).next('.acc-content').slideDown(300);	
			}
		});	
	}


    //two-column-carousel
	if ($('.two-column-carousel').length) {
		$('.two-column-carousel').owlCarousel({
			loop:true,
			margin:30,
			nav:true,
			smartSpeed: 1000,
			autoplay: 500,
			navText: [ '<span class="fas fa-algle-left"></span>', '<span class="fas fa-algle-left-right"></span>' ],
			responsive:{
				0:{
					items:1
				},
				480:{
					items:1
				},
				600:{
					items:1
				},
				800:{
					items:2
				},
				1024:{
					items:2
				}
			}
		});    		
	}


    //three-item-carousel
	if ($('.three-item-carousel').length) {
		$('.three-item-carousel').owlCarousel({
			loop:true,
			margin:30,
			nav:true,
			smartSpeed: 1000,
			autoplay: 500,
			navText: [ '<span class="far fa-angle-left"></span>', '<span class="far fa-angle-right"></span>' ],
			responsive:{
				0:{
					items:1
				},
				480:{
					items:1
				},
				600:{
					items:2
				},
				800:{
					items:2
				},
				1024:{
					items:3
				}
			}
		});    		
	}


	// Five Item Carousel
	if ($('.five-item-carousel').length) {
		$('.five-item-carousel').owlCarousel({
			loop:true,
			margin:30,
			nav:true,
			smartSpeed: 500,
			autoplay: 5000,
			navText: [ '<span class="fas fa-angle-left"></span>', '<span class="fas fa-angle-right"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:2
				},
				800:{
					items:3
				},
				1024:{
					items:4
				},
				1200:{
					items:5
				}
			}
		});    		
	}

	// Four Item Carousel
	if ($('.four-item-carousel').length) {
		$('.four-item-carousel').owlCarousel({
			loop:true,
			margin:30,
			nav:true,
			smartSpeed: 500,
			autoplay: 5000,
			navText: [ '<span class="fas fa-angle-left"></span>', '<span class="fas fa-angle-right"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:2
				},
				800:{
					items:3
				},
				1024:{
					items:4
				},
				1200:{
					items:4
				}
			}
		});    		
	}


	// single-item-carousel
	if ($('.single-item-carousel').length) {
		$('.single-item-carousel').owlCarousel({
			loop:true,
			margin:30,
			nav:false,
			smartSpeed: 500,
			autoplay: 1000,
			navText: [ '<span class="far fa-angle-left"></span>', '<span class="far fa-angle-right"></span>' ],
			responsive:{
				0:{
					items:1
				},
				480:{
					items:1
				},
				600:{
					items:1
				},
				800:{
					items:1
				},			
				1200:{
					items:1
				}

			}
		});    		
	}




	// deals Carousel
	if ($('.deals-carousel').length) {
		$('.deals-carousel').owlCarousel({
			loop:true,
			margin:50,
			nav:true,
			smartSpeed: 500,
			autoplay: 5000,
			navText: [ '<span class="far fa-angle-left"></span>', '<span class="far fa-angle-right"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				800:{
					items:1
				},
				1024:{
					items:1
				},
				1200:{
					items:1
				}
			}
		});    		
	}


	// banner-carousel
	if ($('.banner-carousel').length) {
        $('.banner-carousel').owlCarousel({
            loop:true,
			margin:0,
			nav:true,
			animateOut: 'fadeOut',
    		animateIn: 'fadeIn',
    		active: true,
			smartSpeed: 1000,
			autoplay: 6000,
            navText: [ '<span class="far fa-angle-left"></span>', '<span class="far fa-angle-right"></span>' ],
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                800:{
                    items:1
                },
                1024:{
                    items:1
                }
            }
        });
    }


	//Add One Page nav
	if($('.scroll-nav').length) {
		$('.scroll-nav').onePageNav();
	}

	//Sortable Masonary with Filters
	function enableMasonry() {
		if($('.sortable-masonry').length){
	
			var winDow = $(window);
			// Needed variables
			var $container=$('.sortable-masonry .items-container');
			var $filter=$('.filter-btns');
	
			$container.isotope({
				filter:'*',
				 masonry: {
					columnWidth : '.masonry-item.small-column'
				 },
				animationOptions:{
					duration:500,
					easing:'linear'
				}
			});
			
	
			// Isotope Filter 
			$filter.find('li').on('click', function(){
				var selector = $(this).attr('data-filter');
	
				try {
					$container.isotope({ 
						filter	: selector,
						animationOptions: {
							duration: 500,
							easing	: 'linear',
							queue	: false
						}
					});
				} catch(err) {
	
				}
				return false;
			});
	
	
			winDow.on('resize', function(){
				var selector = $filter.find('li.active').attr('data-filter');

				$container.isotope({ 
					filter	: selector,
					animationOptions: {
						duration: 500,
						easing	: 'linear',
						queue	: false
					}
				});
			});
	
	
			var filterItemA	= $('.filter-btns li');
	
			filterItemA.on('click', function(){
				var $this = $(this);
				if ( !$this.hasClass('active')) {
					filterItemA.removeClass('active');
					$this.addClass('active');
				}
			});
		}
	}
	
	enableMasonry();


	//Price Range Slider
	if($('.price-range-slider').length){
		$( ".price-range-slider" ).slider({
			range: true,
			min: 0,
			max: 10000,
			values: [ 1000, 5000 ],
			slide: function( event, ui ) {
			$( "input.property-amount" ).val( ui.values[ 0 ] + " - " + ui.values[ 1 ] );
			}
		});
		
		$( "input.property-amount" ).val( $( ".price-range-slider" ).slider( "values", 0 ) + " - $" + $( ".price-range-slider" ).slider( "values", 1 ) );	
	}

	//Area Range Slider
	if($('.area-range-slider').length){
		$( ".area-range-slider" ).slider({
			range: true,
			min: 0,
			max: 7000,
			values: [ 700, 4000 ],
			slide: function( event, ui ) {
			$( "input.area-range" ).val( ui.values[ 0 ] + " - " + ui.values[ 1 ] );
			}
		});
		
		$( "input.area-range" ).val( $( ".area-range-slider" ).slider( "values", 0 ) + " - sq ft" + $( ".area-range-slider" ).slider( "values", 1 ) );	
	}


    // Progress Bar
	if ($('.count-bar').length) {
		$('.count-bar').appear(function(){
			var el = $(this);
			var percent = el.data('percent');
			$(el).css('width',percent).addClass('counted');
		},{accY: -50});

	}


	$(document).ready(function() {
      $('select:not(.ignore)').niceSelect();
    });


    // color switcher
	function swithcerMenu() {
	  	if ($('.switch_menu').length) {

	    	$('.switch_btn button').on('click', function(){
	      	$('.switch_menu').toggle(500)
	    	});

	    	$('#styleOptions').styleSwitcher({
	        hasPreview: true,
	        fullPath: 'assets/css/color/',
	         	cookie: {
	          	expires: 30,
	          	isManagingLoad: true
	      		}
	    	});

	  	};
	}


	// page direction
	function directionswitch() {
	  	if ($('.page_direction').length) {

	    	$('.direction_switch button').on('click', function() {
			   $('body').toggleClass(function(){
			      return $(this).is('.rtl, .ltr') ? 'rtl ltr' : 'rtl';
			  })
			});
	  	};
	}


	if($('.paroller').length){
		$('.paroller').paroller({
			  factor: 0.1,            // multiplier for scrolling speed and offset, +- values for direction control  
			  factorLg: 0.1,          // multiplier for scrolling speed and offset if window width is less than 1200px, +- values for direction control  
			  type: 'foreground',     // background, foreground  
			  direction: 'vertical' // vertical, horizontal  
		});
	}

	if($('.paroller-2').length){
		$('.paroller-2').paroller({
			  factor: -0.1,            // multiplier for scrolling speed and offset, +- values for direction control  
			  factorLg: -0.1,          // multiplier for scrolling speed and offset if window width is less than 1200px, +- values for direction control  
			  type: 'foreground',     // background, foreground  
			  direction: 'vertical' // vertical, horizontal  
		});
	}

	// Date picker
	function datepicker () {
	    if ($('#datepicker').length) {
	        $('#datepicker').datepicker();
	    };
	}



	// Time picker
	function timepicker () {
	    if ($('input[name="time"]').length) {
	        $('input[name="time"]').ptTimeSelect();
	    }
	}


	if ($('.property-details .bxslider').length) {
		$('.property-details .bxslider').bxSlider({
			auto:true,
	        nextSelector: '.property-details #slider-next',
	        prevSelector: '.property-details #slider-prev',
	        nextText: '<i class="fa fa-angle-right"></i>',
	        prevText: '<i class="fa fa-angle-left"></i>',
	        mode: 'fade',
	        auto: 'true',
	        speed: '700',
	        pagerCustom: '.property-details .slider-pager .thumb-box'
	    });
	};


	/*	=========================================================================
	When document is Scrollig, do
	========================================================================== */

	jQuery(document).on('ready', function () {
		(function ($) {
			// add your functions
			directionswitch();
			swithcerMenu();
			datepicker ();
			timepicker ();
		})(jQuery);
	});



	/* ==========================================================================
   When document is Scrollig, do
   ========================================================================== */
	
	$(window).on('scroll', function() {
		headerStyle();
	});

	
	
	/* ==========================================================================
   When document is loaded, do
   ========================================================================== */
	
	$(window).on('load', function() {
		handlePreloader();
		enableMasonry();
	});

	

})(window.jQuery);

// mayur added js

function openImagePopup(index) {
    var images = [
        'assets/images/propertyImg/1.jpg',
        'assets/images/propertyImg/2.jpg',
        'assets/images/propertyImg/3.jpg',
        'assets/images/propertyImg/4.jpg',
        'assets/images/propertyImg/5.jpg',
        // Add more image URLs as needed
		// add images to property details section here
    ];

    var currentIndex = index || 0;

    // Create a new image element
    var img = document.createElement('img');
    img.src = images[currentIndex];

    // Create a container div for the popup
    var popup = document.createElement('div');
    popup.classList.add('image-popup');
    popup.appendChild(img);

    // Add previous and next buttons
    var prevBtn = document.createElement('button');
    prevBtn.textContent = 'Previous';
    prevBtn.classList.add('prev-btn');
    prevBtn.addEventListener('click', function() {
        navigateImages(-1);
    });

    var nextBtn = document.createElement('button');
    nextBtn.textContent = 'Next';
    nextBtn.classList.add('next-btn');
    nextBtn.addEventListener('click', function() {
        navigateImages(1);
    });

    popup.appendChild(prevBtn);
    popup.appendChild(nextBtn);

    // Append the popup to the body
    document.body.appendChild(popup);

    // Close the popup when clicked outside the image
    popup.addEventListener('click', function(event) {
        if (event.target === popup) {
            popup.remove();
        }
    });

    function navigateImages(step) {
        currentIndex += step;
        if (currentIndex < 0) {
            currentIndex = images.length - 1;
        } else if (currentIndex >= images.length) {
            currentIndex = 0;
        }

        img.src = images[currentIndex];
    }
}



// added for the map
function initMap() {
	const mapElement = document.getElementById('map');
	const locationForm = document.getElementById('locationForm');

	locationForm.addEventListener('submit', function(event) {
		event.preventDefault();
		
		const locationInput = document.getElementById('location').value;

		// Use Geocoding service to convert location input into coordinates
		const geocoder = new google.maps.Geocoder();
		geocoder.geocode({ address: locationInput }, function(results, status) {
			if (status === 'OK') {
				const map = new google.maps.Map(mapElement, {
					center: results[0].geometry.location,
					zoom: 8
				});

				const marker = new google.maps.Marker({
					map: map,
					position: results[0].geometry.location
				});
			} else {
				alert('Geocode was not successful for the following reason: ' + status);
			}
		});
	});
}



// basic details 
function toggleBasicDetails() {
	var basicDetails = document.getElementById("basicDetails");
	var div1 = document.getElementById("div1");


	if (basicDetails.classList.contains("d-none")) {

		basicDetails.classList.remove("d-none");
		localityDetails.classList.add("d-none");
		propertyDetails.classList.add("d-none");
		amenitiesDetails.classList.add("d-none");
		pricingDetails.classList.add("d-none");
		galleryDetails.classList.add("d-none");
		brouchureDetails.classList.add("d-none");
		informationDetails.classList.add("d-none");
		ownerDetails.classList.add("d-none");
		scheduleDetails.classList.add("d-none");

		// adding active class
		div1.classList.add("active");

		// adding active class
		div2.classList.remove("active");
		div3.classList.remove("active");
		div4.classList.remove("active");
		div5.classList.remove("active");
		div6.classList.remove("active");
		div7.classList.remove("active");
		div8.classList.remove("active");
		div9.classList.remove("active");
		div10.classList.remove("active");
	}
}


// locality Details
function toggleLocalityDetails() {
	var localityDetails = document.getElementById("localityDetails");
	var div2 = document.getElementById("div2");

	if (localityDetails.classList.contains("d-none")) {
		basicDetails.classList.add("d-none");
		localityDetails.classList.remove("d-none");
		propertyDetails.classList.add("d-none");
		amenitiesDetails.classList.add("d-none");
		pricingDetails.classList.add("d-none");
		galleryDetails.classList.add("d-none");
		brouchureDetails.classList.add("d-none");
		informationDetails.classList.add("d-none");
		ownerDetails.classList.add("d-none");
		scheduleDetails.classList.add("d-none");
		

		// adding active class
		div2.classList.add("active");


		// adding active class
		div1.classList.remove("active");
		div3.classList.remove("active");
		div4.classList.remove("active");
		div5.classList.remove("active");
		div6.classList.remove("active");
		div7.classList.remove("active");
		div8.classList.remove("active");
		div9.classList.remove("active");
		div10.classList.remove("active");
	} 
//     else {
//         localityDetails.classList.add("d-none");
}

// property Details  
function togglePropertyDetails() {
	var propertyDetails = document.getElementById("propertyDetails");
	var div3 = document.getElementById("div3");


	if (propertyDetails.classList.contains("d-none")) {
		basicDetails.classList.add("d-none");
		localityDetails.classList.add("d-none");
		propertyDetails.classList.remove("d-none");
		amenitiesDetails.classList.add("d-none");
		pricingDetails.classList.add("d-none");
		galleryDetails.classList.add("d-none");
		brouchureDetails.classList.add("d-none");
		informationDetails.classList.add("d-none");
		ownerDetails.classList.add("d-none");
		scheduleDetails.classList.add("d-none");

		// adding active class
		div3.classList.add("active");

		// adding active class
		div1.classList.remove("active");
		div2.classList.remove("active");
		div4.classList.remove("active");
		div5.classList.remove("active");
		div6.classList.remove("active");
		div7.classList.remove("active");
		div8.classList.remove("active");
		div9.classList.remove("active");
		div10.classList.remove("active");
	}
	
}


// amenities   
function toggleAmenitiesDetails() {
	var amenitiesDetails = document.getElementById("amenitiesDetails");
	var div4 = document.getElementById("div4");


	if (amenitiesDetails.classList.contains("d-none")) {
		basicDetails.classList.add("d-none");
		localityDetails.classList.add("d-none");
		propertyDetails.classList.add("d-none");
		amenitiesDetails.classList.remove("d-none");
		pricingDetails.classList.add("d-none");
		galleryDetails.classList.add("d-none");
		brouchureDetails.classList.add("d-none");
		informationDetails.classList.add("d-none");
		ownerDetails.classList.add("d-none");
		scheduleDetails.classList.add("d-none");

		// adding active class
		div4.classList.add("active");

		// adding active class
		div1.classList.remove("active");
		div2.classList.remove("active");
		div3.classList.remove("active");
		div5.classList.remove("active");
		div6.classList.remove("active");
		div7.classList.remove("active");
		div8.classList.remove("active");
		div9.classList.remove("active");
		div10.classList.remove("active");
	}
}


// pricing details   
function togglePricingDetails() {
	var pricingDetails = document.getElementById("pricingDetails");
	var div5= document.getElementById("div5");


	if (pricingDetails.classList.contains("d-none")) {
		basicDetails.classList.add("d-none");
		localityDetails.classList.add("d-none");
		propertyDetails.classList.add("d-none");
		amenitiesDetails.classList.add("d-none");
		pricingDetails.classList.remove("d-none");
		galleryDetails.classList.add("d-none");
		brouchureDetails.classList.add("d-none");
		informationDetails.classList.add("d-none");
		ownerDetails.classList.add("d-none");
		scheduleDetails.classList.add("d-none");

		// adding active class
		div5.classList.add("active");

		// adding active class
		div1.classList.remove("active");
		div2.classList.remove("active");
		div3.classList.remove("active");
		div4.classList.remove("active");
		div6.classList.remove("active");
		div7.classList.remove("active");
		div8.classList.remove("active");
		div9.classList.remove("active");
		div10.classList.remove("active");
	}
}


// gallery Details
function toggleGalleryDetails() {
	var galleryDetails = document.getElementById("galleryDetails");
	var div6 = document.getElementById("div6");

	if (galleryDetails.classList.contains("d-none")) {
		basicDetails.classList.add("d-none");
		localityDetails.classList.add("d-none");
		propertyDetails.classList.add("d-none");
		amenitiesDetails.classList.add("d-none");
		pricingDetails.classList.add("d-none");
		galleryDetails.classList.remove("d-none");
		brouchureDetails.classList.add("d-none");
		informationDetails.classList.add("d-none");
		ownerDetails.classList.add("d-none");
		scheduleDetails.classList.add("d-none");

		// adding active class
		div6.classList.add("active");

		// adding active class
		div1.classList.remove("active");
		div2.classList.remove("active");
		div3.classList.remove("active");
		div4.classList.remove("active");
		div5.classList.remove("active");
		div7.classList.remove("active");
		div8.classList.remove("active");
		div9.classList.remove("active");
		div10.classList.remove("active");
	}
}

// brouchure Details
function toggleBrouchureDetails() {
	var brouchureDetails = document.getElementById("brouchureDetails");
	var div7 = document.getElementById("div7");

	if (brouchureDetails.classList.contains("d-none")) {
		basicDetails.classList.add("d-none");
		localityDetails.classList.add("d-none");
		propertyDetails.classList.add("d-none");
		amenitiesDetails.classList.add("d-none");
		pricingDetails.classList.add("d-none");
		galleryDetails.classList.add("d-none");
		brouchureDetails.classList.remove("d-none");
		informationDetails.classList.add("d-none");
		ownerDetails.classList.add("d-none");
		scheduleDetails.classList.add("d-none");

		// adding active class
		div7.classList.add("active");

		// adding active class
		div1.classList.remove("active");
		div2.classList.remove("active");
		div3.classList.remove("active");
		div4.classList.remove("active");
		div5.classList.remove("active");
		div6.classList.remove("active");
		div8.classList.remove("active");
		div9.classList.remove("active");
		div10.classList.remove("active");
	}
}
// developer / builder information
function toggleInformationDetails() {
	var informationDetails = document.getElementById("informationDetails");
	var div8= document.getElementById("div8");

	if (informationDetails.classList.contains("d-none")) {
		basicDetails.classList.add("d-none");
		localityDetails.classList.add("d-none");
		propertyDetails.classList.add("d-none");
		amenitiesDetails.classList.add("d-none");
		pricingDetails.classList.add("d-none");
		galleryDetails.classList.add("d-none");
		brouchureDetails.classList.add("d-none");
		informationDetails.classList.remove("d-none");
		ownerDetails.classList.add("d-none");
		scheduleDetails.classList.add("d-none");

		// adding active class
		div8.classList.add("active");

		// adding active class
		div1.classList.remove("active");
		div2.classList.remove("active");
		div3.classList.remove("active");
		div4.classList.remove("active");
		div5.classList.remove("active");
		div6.classList.remove("active");
		div7.classList.remove("active");
		div9.classList.remove("active");
		div10.classList.remove("active");
	}
}


// owner information
function toggleOwnerDetails() {
	var ownerDetails = document.getElementById("ownerDetails");
	var div9= document.getElementById("div9");

	if (ownerDetails.classList.contains("d-none")) {
		basicDetails.classList.add("d-none");
		localityDetails.classList.add("d-none");
		propertyDetails.classList.add("d-none");
		amenitiesDetails.classList.add("d-none");
		pricingDetails.classList.add("d-none");
		galleryDetails.classList.add("d-none");
		brouchureDetails.classList.add("d-none");
		informationDetails.classList.add("d-none");
		ownerDetails.classList.remove("d-none");
		scheduleDetails.classList.add("d-none");

		// adding active class
		div9.classList.add("active");

		// adding active class
		div1.classList.remove("active");
		div2.classList.remove("active");
		div3.classList.remove("active");
		div4.classList.remove("active");
		div5.classList.remove("active");
		div6.classList.remove("active");
		div7.classList.remove("active");
		div8.classList.remove("active");
		div10.classList.remove("active");
	}
}

// schedule Details
function toggleScheduleDetails() {
	var scheduleDetails = document.getElementById("scheduleDetails");
	var div10 = document.getElementById("div10");

	if (scheduleDetails.classList.contains("d-none")) {
		basicDetails.classList.add("d-none");
		localityDetails.classList.add("d-none");
		propertyDetails.classList.add("d-none");
		amenitiesDetails.classList.add("d-none");
		pricingDetails.classList.add("d-none");
		galleryDetails.classList.add("d-none");
		brouchureDetails.classList.add("d-none");
		informationDetails.classList.add("d-none");
		ownerDetails.classList.add("d-none");
		scheduleDetails.classList.remove("d-none");

		// adding active class
		div10.classList.add("active");

		// adding active class
		div1.classList.remove("active");
		div2.classList.remove("active");
		div3.classList.remove("active");
		div4.classList.remove("active");
		div5.classList.remove("active");
		div6.classList.remove("active");
		div7.classList.remove("active");
		div8.classList.remove("active");
		div9.classList.remove("active");
		
	}
}

function selectDay(id) {
	// Remove 'selected' class from all elements
	var elements = document.querySelectorAll('.availability2');
	elements.forEach(function(element) {
		element.classList.remove('selected');
	});

	// Add 'selected' class to the clicked element
	var selectedElement = document.getElementById(id);
	selectedElement.classList.add('selected');
}
///// mAP code
let map;
let geocoder;

function initMap() {
    map = new google.maps.Map(document.getElementById("property-map"), {
        zoom: 8,
        center: { lat: -34.397, lng: 150.644 }, // Default center
    });
    geocoder = new google.maps.Geocoder();
    document.getElementById('property-location-input').addEventListener('change', function() {
        geocodeAddress(geocoder, map);
    });
}

function geocodeAddress(geocoder, resultMap) {
    const address = document.getElementById("property-location-input").value;
    geocoder.geocode({ 'address': address }, function(results, status) {
        if (status === 'OK') {
            resultMap.setCenter(results[0].geometry.location);
            new google.maps.Marker({
                map: resultMap,
                position: results[0].geometry.location
            });
        } else {
            alert("Geocode was not successful for the following reason: " + status);
        }
    });
}

////// area convertor 
// Conversion factors for different units
const conversionFactors = {
    "guntha": 0.00485642,
    "square-inch": 1550.0031,
    "Hectare": 0.0001,
    "Ground": 0.01,
    "Bigha": 0.0002,
    "square-mile": 3.861e-7,
    "Square-Karam": 0.00484042,
    "Square Kilometer": 1e-6,
    "Murabba": 0.0001,
    "Decimal": 0.0001,
    "Lessa": 0.0001,
    "Cent": 0.01,
    "Biswa-Kacha": 0.002,
    "Marla": 0.005,
    "Chatak": 0.00484042,
    "Dhur": 0.00484042,
    "Biswa": 0.002,
    "Acre": 0.000247105,
    "Square Yard": 1.19599,
    "Kanal": 0.000506707,
    "Gaj": 0.836127,
    "Killa": 0.0001,
    "Pura": 0.00484042,
    "Katha": 0.012,
    "Square Feet": 10.7639,
    "Square Centimeter": 10000,
    // Add conversion factors for other units as needed
};

// Function to perform unit conversion
function convertUnits() {
    const inputUnits = parseFloat(document.getElementById("units").value);
    const fromUnit = document.getElementById("from-units").value;
    const toUnit = document.getElementById("to-units").value;

    // Convert units
    let convertedValue;
    if (fromUnit === toUnit) {
        convertedValue = inputUnits;
    } else {
        const conversionFactor = conversionFactors[fromUnit] / conversionFactors[toUnit];
        convertedValue = inputUnits * conversionFactor;
    }

    // Display the result
    document.getElementById("conversion").value = convertedValue.toFixed(2);
}

// Populate select dropdowns with options
function populateDropdowns() {
    const fromUnitsSelect = document.getElementById("from-units");
    const toUnitsSelect = document.getElementById("to-units");

    for (const unit in conversionFactors) {
        const option = document.createElement("option");
        option.value = unit;
        option.text = unit;
        fromUnitsSelect.add(option.cloneNode(true));
        toUnitsSelect.add(option);
    }
}

// Trigger the population of select dropdowns
populateDropdowns();

// Trigger the conversion function initially
convertUnits();



 
document.addEventListener("DOMContentLoaded", function() {
    const conversionList = document.getElementById("conversionList");

 // Define an array of conversion objects
 const conversions = [
    { unit: "kilometer", value: 1000, targetUnit: "meter" },
    { unit: "decimeter", value: 0.1, targetUnit: "meter" },
    { unit: "centimeter", value: 0.01, targetUnit: "meter" },
    { unit: "millimeter", value: 0.001, targetUnit: "meter" },
    { unit: "micrometer", value: 1.0E-6, targetUnit: "meter" },
    { unit: "nanometer", value: 1.0E-9, targetUnit: "meter" },
    { unit: "mile", value: 1609.344, targetUnit: "meter" },
    { unit: "yard", value: 0.9144, targetUnit: "meter" },
    { unit: "foot", value: 0.3048, targetUnit: "meter" },
    { unit: "inch", value: 0.0254, targetUnit: "meter" },
    { unit: "light year", value: 9.46073047258E+15, targetUnit: "meter" },
    { unit: "exameter", value: 1.0E+18, targetUnit: "meter" },
    { unit: "petameter", value: 1.0E+15, targetUnit: "meter" },
    { unit: "terameter", value: 1000000000000, targetUnit: "meter" },
    { unit: "gigameter", value: 1000000000, targetUnit: "meter" },
    { unit: "megameter", value: 1000000, targetUnit: "meter" },
    { unit: "hectometer", value: 100, targetUnit: "meter" },
    { unit: "dekameter", value: 10, targetUnit: "meter" },
    { unit: "micron", value: 1.0E-6, targetUnit: "meter" },
    { unit: "picometer", value: 1.0E-12, targetUnit: "meter" },
    { unit: "femtometer", value: 1.0E-15, targetUnit: "meter" },
    { unit: "attometer", value: 1.0E-18, targetUnit: "meter" },
    { unit: "megaparsec", value: 3.08567758128E+22, targetUnit: "meter" },
    { unit: "kiloparsec", value: 3.08567758128E+19, targetUnit: "meter" },
    { unit: "parsec", value: 3.08567758128E+16, targetUnit: "meter" },
    { unit: "astronomical unit", value: 149597870691, targetUnit: "meter" },
    { unit: "league", value: 4828.032, targetUnit: "meter" },
    { unit: "nautical league (UK)", value: 5559.552, targetUnit: "meter" },
    { unit: "nautical league (int.)", value: 5556, targetUnit: "meter" },
    { unit: "league (statute)", value: 4828.0416560833, targetUnit: "meter" },
    { unit: "nautical mile (UK)", value: 1853.184, targetUnit: "meter" },
    { unit: "nautical mile (international)", value: 1852, targetUnit: "meter" },
    { unit: "mile (statute)", value: 1609.3472186944, targetUnit: "meter" },
    { unit: "mile (US survey)", value: 1609.3472186944, targetUnit: "meter" },
    { unit: "mile (Roman)", value: 1479.804, targetUnit: "meter" },
    { unit: "kiloyard", value: 914.4, targetUnit: "meter" },
    { unit: "furlong", value: 201.168, targetUnit: "meter" },
    { unit: "furlong (US survey)", value: 201.1684023368, targetUnit: "meter" },
    { unit: "chain", value: 20.1168, targetUnit: "meter" },
    { unit: "chain (US survey)", value: 20.1168402337, targetUnit: "meter" },
    { unit: "rope", value: 6.096, targetUnit: "meter" },
    { unit: "rod", value: 5.0292, targetUnit: "meter" },
    { unit: "rod (US survey)", value: 5.0292100584, targetUnit: "meter" },
    { unit: "perch", value: 5.0292, targetUnit: "meter" },
    { unit: "pole", value: 5.0292, targetUnit: "meter" },
    { unit: "fathom", value: 1.8288, targetUnit: "meter" },
    { unit: "fathom (US survey)", value: 1.8288036576, targetUnit: "meter" },
    { unit: "ell", value: 1.143, targetUnit: "meter" },
    { unit: "foot (US survey)", value: 0.3048006096, targetUnit: "meter" },
    { unit: "link", value: 0.201168, targetUnit: "meter" },
    { unit: "link (US survey)", value: 0.2011684023, targetUnit: "meter" },
    { unit: "cubit (UK)", value: 0.4572, targetUnit: "meter" },
    { unit: "hand", value: 0.1016, targetUnit: "meter" },
    { unit: "span (cloth)", value: 0.2286, targetUnit: "meter" },
    { unit: "finger (cloth)", value: 0.1143, targetUnit: "meter" },
    { unit: "nail (cloth)", value: 0.05715, targetUnit: "meter" },
    { unit: "inch (US survey)", value: 0.0254000508, targetUnit: "meter" },
    { unit: "barleycorn", value: 0.0084666667, targetUnit: "meter" },
    { unit: "mil", value: 2.54E-5, targetUnit: "meter" },
    { unit: "microinch", value: 2.54E-8, targetUnit: "meter" },
    { unit: "angstrom", value: 1.0E-10, targetUnit: "meter" },
    { unit: "a.u. of length", value: 5.2917724900001E-11, targetUnit: "meter" },
    { unit: "X-unit", value: 1.00208E-13, targetUnit: "meter" },
    { unit: "fermi", value: 1.0E-15, targetUnit: "meter" },
    { unit: "arpent", value: 58.5216, targetUnit: "meter" },
    { unit: "pica", value: 0.0042333333, targetUnit: "meter" },
    { unit: "point", value: 0.0003527778, targetUnit: "meter" },
    { unit: "twip", value: 1.76389E-5, targetUnit: "meter" },
    { unit: "aln", value: 0.5937777778, targetUnit: "meter" },
    { unit: "famn", value: 1.7813333333, targetUnit: "meter" },
    { unit: "caliber", value: 0.000254, targetUnit: "meter" },
    { unit: "centiinch", value: 0.000254, targetUnit: "meter" },
    { unit: "ken", value: 2.11836, targetUnit: "meter" },
    { unit: "Russian archin", value: 0.7112, targetUnit: "meter" },
    { unit: "Roman actus", value: 35.47872, targetUnit: "meter" },
    { unit: "vara de tarea", value: 2.505456, targetUnit: "meter" },
    { unit: "vara conuquera", value: 2.505456, targetUnit: "meter" },
    { unit: "vara castellana", value: 0.835152, targetUnit: "meter" },
    { unit: "cubit (Greek)", value: 0.462788, targetUnit: "meter" },
    { unit: "long reed", value: 3.2004, targetUnit: "meter" },
    { unit: "reed", value: 2.7432, targetUnit: "meter" },
    { unit: "long cubit", value: 0.5334, targetUnit: "meter" },
    { unit: "handbreadth", value: 0.0762, targetUnit: "meter" },
    { unit: "fingerbreadth", value: 0.01905, targetUnit: "meter" },
    { unit: "Planck length", value: 1.61605E-35, targetUnit: "meter" },
    { unit: "Electron radius (classical)", value: 2.81794092E-15, targetUnit: "meter" },
    { unit: "Bohr radius", value: 5.2917724900001E-11, targetUnit: "meter" },
    { unit: "Earth's equatorial radius", value: 6378160, targetUnit: "meter" },
    { unit: "Earth's polar radius", value: 6356776.9999999, targetUnit: "meter" },
    { unit: "Earth's distance from sun", value: 149600000000, targetUnit: "meter" },
    { unit: "Sun's radius", value: 696000000, targetUnit: "meter" }
];

    // Populate the list
    conversions.forEach(conversion => {
        const listItem = document.createElement("li");
        listItem.textContent = conversion.unit;
        listItem.addEventListener("click", function() {
            // Redirect to another page with the selected units for conversion
            const selectedConversion = JSON.stringify(conversion);
            window.location.href = "conversionPage.html?conversion=" + encodeURIComponent(selectedConversion);
        });
        conversionList.appendChild(listItem);
    });
});


// Add event listener to property type dropdown

document.addEventListener('DOMContentLoaded', function() {
    // Function to handle the save builder button click
    function saveBuilder() {
        var builderName = document.getElementById('new-builder-name').value;
        var builderSelect = document.getElementById('builder-select');

        if (builderName) {
            var newOption = document.createElement('option');
            newOption.value = builderName.toLowerCase().replace(/\s+/g, '-');
            newOption.textContent = builderName;
            builderSelect.appendChild(newOption);
            
            // Reset and close modal
            document.getElementById('new-builder-form').reset();
            var modal = bootstrap.Modal.getInstance(document.getElementById('addBuilderModal'));
            modal.hide();
        }
    }

    // Add event listener to the save builder button
    document.getElementById('save-builder-btn').addEventListener('click', saveBuilder);
});

