(function ($) {
	const cCards = $('.slider__cards')
	const card = $('.card');
	// const cardInfoDescription = $('.card--info__description');
	let lastElement = cCards.data('count') - 1;
	let currentElement = 0;
	let scroll = 0;
	let scrollDistance = 440;
	let resizeTimer;
	let sliderElement;
	let sliderElementMargin;
	let device;

	$(document).ready(function () {
		setVariables();
		setScrollDistance();
		setSliderMargin();
	});

	$(window).on('resize', function () {
		clearTimeout(resizeTimer);
		resizeTimer = setTimeout(function () {
			setVariables();
			setScrollDistance();
			setSliderMargin();
		}, 250);
	})

	function setVariables() {
		sliderElement = card.width();
		sliderElementMargin = parseInt(card.css('marginLeft'));
		device = getMediaQuery();
	}

	function setScrollDistance() {
		scrollDistance = sliderElement + (2 * sliderElementMargin);
	}

	function setSliderMargin() {
		let mLeft = (($( window ).width() / 3) - (sliderElement + ( 2 * sliderElementMargin)) / 2);

		if(mLeft > 800) {
			mLeft = 800 - (sliderElement + ( 2 * sliderElementMargin)) / 2;
		}

		if(mLeft < 0) {
			mLeft = 0;
		}

		cCards.css('margin-left', mLeft)
	}

	$('#sliderNext').on('click', function () {
		if(currentElement >= lastElement) {
			return;
		}
		currentElement += 1;
		scroll -= scrollDistance
		cCards.css('transform', 'translate3d(' + scroll + 'px, 0px, 0px)')
	})
	$('#sliderPrev').on('click', function () {
		if(currentElement <= 0) {
			return;
		}
		currentElement -= 1;
		scroll += scrollDistance
		cCards.css('transform', 'translate3d(' + scroll + 'px, 0px, 0px)')
	})
})(jQuery);
