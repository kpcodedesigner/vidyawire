$(function() {
	
	$('.popuar-course-carusel').owlCarousel({
		items: 2.5,
		loop: true,
		autoplay: false,
		margin: 30,
		nav: true,
		stagePadding: 60,
		navText: [ "<img src='http://vidyawire.aliansoftware.net/wp-content/uploads/2019/12/left-arrow.png'>", "<img src='http://vidyawire.aliansoftware.net/wp-content/uploads/2019/12/right-arrow.png'>" ],
		responsive: {
			320: {
				items: 1.5,
				stagePadding: 0
			},
			375: {
				items: 1.5,
				stagePadding: 0
			},
			360: {
				items: 1.5,
				stagePadding: 0
			},
			425: {
				items: 1.5,
				stagePadding: 0
			},
			600: {
				items: 1.5,
				stagePadding: 0
			},
			767: {
				items: 1.5,
				stagePadding: 0
			},
			991: {
				items: 1.5,
				stagePadding: 0
			},
			1440: {
				items: 2.1,
				stagePadding: 60
			}
		}
		});

	$('.video-carousel').owlCarousel({
		items: 1,
		loop: true,
		autoplay: true,
		margin: 30,
		nav: true,
		dots: false,
		navText: [ "<img src='img/prev.png'>", "<img src='img/next.png'>" ]
	});

	$('.testi-slider').owlCarousel({
		items: 1,
		loop: true,
		autoplay: true,
		margin: 30,
		nav: true,
		navText: [ "<img src='img/prev.png'>", "<img src='img/next.png'>" ]
	});

});
