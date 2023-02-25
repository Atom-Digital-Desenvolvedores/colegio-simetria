$(document).ready(function() {

	$(".wsg-banner").owlCarousel({
		items:1,
		loop:true,
		nav: false,
		autoplay:true,
		autoplayTimeout:5000,
		autoplayHoverPause:true,
		smartSpeed:2000,
		navText: [ '<span class="flaticon-prev"></span>', '<span class="flaticon-next"></span>' ],
	});

	$(".wsg-parceiros-carousel").owlCarousel({
		loop:true,
		nav: false,
		navText:false,
		smartSpeed:550,
		autoplay:true,
		autoplayTimeout:5000,
		autoplayHoverPause:true,
		responsiveClass:true,
		responsive:{
			0:{
				items:1
			},
			500:{
				items:2
			},
			740:{
				items:3
			},
			1000:{
				items:5
			}
		}
	});

	$(".wsg-04-carousel").owlCarousel({
		loop:true,
		margin:20,
		nav: false,
		navText:false,
		smartSpeed:550,
		autoplay:true,
		autoplayTimeout:5000,
		autoplayHoverPause:true,
		responsiveClass:true,
		responsive:{
			0:{
				items:1
			},
			500:{
				items:1
			},
			740:{
				items:2
			},
			1000:{
				items:3
			}
		}
	});

	$(".wsg-05-carousel").owlCarousel({
		loop:true,
		margin:30,
		nav: false,
		navText:false,
		smartSpeed:550,
		autoplay:true,
		autoplayTimeout:5000,
		autoplayHoverPause:true,
		responsiveClass:true,
		responsive:{
			0:{
				items:1
			},
			500:{
				items:2
			},
			740:{
				items:2
			},
			1000:{
				items:3
			}
		}
	});

	$(".wsg-07_carousel").owlCarousel({
		loop:true,
		margin:20,
		nav: false,
		navText:false,
		smartSpeed:550,
		autoplay:true,
		autoplayTimeout:5000,
		autoplayHoverPause:true,
		responsiveClass:true,
		responsive:{
			0:{
				items:1
			},
			500:{
				items:1
			},
			740:{
				items:1
			},
			1000:{
				items:2
			}
		}
	});

	$(".wsg-09_carousel").owlCarousel({
		loop:true,
		nav: false,
		navText:false,
		smartSpeed:550,
		autoplay:true,
		autoplayTimeout:5000,
		autoplayHoverPause:true,
		responsiveClass:true,
		navText: [ '<span class="flaticon-prev"></span>', '<span class="flaticon-next"></span>' ],
		responsive:{
			0:{
				items:2
			},
			500:{
				items:3
			},
			740:{
				items:4
			},
			1000:{
				items:5
			}
		}
	});

	$(".wsg-carousel_projetos").owlCarousel({
		items: 1,
		loop: true,
		nav: false,
		autoplay: true,
		autoplayTimeout: 5000,
		autoplayHoverPause: true,
		smartSpeed: 2000,
		navText: false,
		//navText: [ '<span class="flaticon-prev"></span>', '<span class="flaticon-next"></span>' ],
	});

	$('.wsg-carousel-modal-01').slick({
		dots: true,
		arrows:false,
		infinite: true,
		speed: 500,
		fade: true,
		cssEase: 'linear'
	});

	
});
