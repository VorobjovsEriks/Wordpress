(function ($) {
	$(document).ready(function () {

		$('#child-primary-mobile-menu').on('click', function () {
			$('.primary-menu-container').toggleClass('open');
			$('#child-primary-mobile-menu').toggleClass('open');
		})

		$('#child-primary-menu-list').on('click', function () {
			$('.primary-menu-container').removeClass('open');
			$('#child-primary-mobile-menu').removeClass('open');

		})
	});
})(jQuery);
