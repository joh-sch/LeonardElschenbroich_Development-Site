jQuery(document).ready(function($) {

	var $about = $('.category-images-wrapper').imagesLoaded( function() {
		// init Packery after all images have loaded
		$about.packery({
			itemSelector: '.about-image-wrapper'
		});
	});

	var $highlights = $('.highlights-wrapper').imagesLoaded( function() {
		// init Packery after all images have loaded
		$highlights.packery({
			itemSelector: '.highlight-wrapper'
		});
	});

	$('a').each(function(){
		if ($(this).attr('href').indexOf('youtube') > 0 || $(this).attr('href').indexOf('vimeo') > 0) $(this).addClass('fancybox')
	})
	$('.fancybox').fancybox({
		helpers: {
			media: {}
		}
	})

	if ($('.future').length > 0) {
		$('html, body').animate({
			scrollTop: $('.future').first().offset().top
		}, 1000)
	}

	/*
	 * SOCIAL
	 */

	$('.social-twitter').click(function(){
		window.open('https://twitter.com/LElschenbroich', '_blank');
	})

	$('.social-facebook').click(function(){
		window.open('https://www.facebook.com/Leonard-Elschenbroich-127467940779151/', '_blank');
	})

	$('.social-itunes').click(function(){
		window.open('https://itunes.apple.com/us/artist/leonard-elschenbroich/id337364598?uo=4', '_blank');
	})

	/*
	 *  HERO CAROUSEL
	 */

	var current = 0

	$('.pill').click(function(){
		var target = $(this).attr('data-id')
		current = $(this).attr('data-index')
		updateCurrent(target)
	})

	$('.left').click(function(){
		if (current>0) {
			current--
			lookupCurrent(current)
		}
	})

	$('.right').click(function(){
		if (current<3) {
			current++
			lookupCurrent(current)
		}
	})

	// start slideshow
	setInterval(function(){
		if (current<3) {
			current++
		} else {
			current = 0
		}
		lookupCurrent(current)
	}, 5000)

	var lookupCurrent = function(index){
		switch(index) {
			case 0:
				updateCurrent('leonard-elschenbroich')
				break
			case 1:
				updateCurrent('listen-watch')
				break
			case 2:
				updateCurrent('bolivia')
				break
			case 3:
				updateCurrent('new-music')
				break
		}
	}

	var updateCurrent = function(id){
		// update current active title
		$('.hero span').hide()
		$('#'+id+'-title').show()
		// update current active pill
		$('.pill').removeClass('active')
		$('#'+id+'-pill').addClass('active')
		// update current active image
		$('.hero .image-wrapper').fadeOut(1000)
		$('#'+id+'-img').fadeIn(1000)
	}

	// EXPAND CONTENT
	$('.main-section-more').click(function(){
		$(this).hide()
		$(this).siblings('.main-section-less').show()
		$(this).siblings('.main-section-full').css('max-height', 'none')
	})

	// COLLAPSE CONTENT
	$('.main-section-less').click(function(){
		$(this).hide()
		$(this).siblings('.main-section-more').show()
		$(this).siblings('.main-section-full').css('max-height', '14em')
	})

	// MOBILE
	$('.toggle').click(function(){
		$('.menu-wrapper').toggleClass('hidden')
	})
})

console.log('LEONARD ELSCHENBROICH')
console.log('#####################')
console.log('design: Stahl R, stahl-r.de')
console.log('code: Thibault Brevet, www.thibault.io')