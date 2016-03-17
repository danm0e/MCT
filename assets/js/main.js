/************************************************************************\
	MCT – Management Construction Technology
	---------------------------------------------------------------------
	MODULE:		main.js
	PURPOSE:	main scripts for interactive functionality
	@author:	dan moe

 	CODEMAP
	---------------------------------------------------------------------
	^1	HOME INTRO ANIMATION
	^2	HOME SLIDER
	^3	SECTION SLIDER
	^4	SELECT DROP DOWN NAV
	^5	PAGE TRANSITIONS

/************************************************************************/

// https://codyhouse.co/gem/animated-page-transition/

$(document).ready(function() {
/*----------------------------------------------------------------------*/	

	// ^1 HOME INTRO ANIMATION
	/********************************************************************/

	// only fire the animation on the home page to prevent console errors
	if( $('body').hasClass('home') ) {

		$(function bounceInRight() {

			$('.folio--project').each(function(i) {

				var self = this

				// incrementally add the bounce class to the home navigation 
				// boxes in order to stagger the animation
				setTimeout(function () {
					$(self).toggleClass('bounceInRight')
				}, i*200) // speed in ms

			})

		})

	}


	// ^2 HOME SLIDER
	/********************************************************************/

	$('.folio').slick({

		infinite: false,
		slidesToShow: 5,
		slidesToScroll: 5,
		prevArrow: '.slidenav-prev',
		nextArrow: '.slidenav-next',

		responsive: [
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 4,
				}
			},
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3,
				}
			},
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2,
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				}
			}
		]
	})

	$('.folio').on('afterChange', function(event, slick, currentSlide) {
        // console.log(slick.slideCount);
		if( currentSlide >= 1 ) {
			$('.slidenav-prev').removeClass('hidden')
		} else {
			$('.slidenav-prev').addClass('hidden')
		}
	})

	// ^3 SECTION SLIDER
	/********************************************************************/

	// $('.next, .prev').click(function(e) {
	// 	e.preventDefault();
	// })

	$('.section-slider').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		infinite: false,
		// nextArrow: '.next',
		// prevArrow: '.prev',
	})

	// ^4 SELECT DROP DOWN NAV
	/********************************************************************/

	$('.select-nav').change(function() {
		// console.log($(this).val())
		var url = $(this).val()
		if ( url != '' ) window.location = url
	})


	// ^5 PAGE TRANSITIONS
	/********************************************************************/

	// redirect to the page link
	function redirectPage() {
		window.location = linkLocation
	}

	// select all links containing html in the href
	$('a[href*=php]').click(function(e){
		e.preventDefault()

		// cache the url
		linkLocation = this.href
		
		// fade out the main section and redirect on callback
		$('body').fadeOut(500, redirectPage) 

	})

	/*----------------------------------------------------------------------*/	
}) // END doc ready