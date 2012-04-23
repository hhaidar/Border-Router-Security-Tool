$(document).ready(function() {

	$('#main-carousel .slider').carouFredSel({
		items: 1,
		circular: false,
		infinite: false,
		auto: false,
		prev: {
			button: '.previous'
		},
		next: {
			button: '.next'
		}
	});

});