const sliderBreakpoint = window.matchMedia('(min-width: 450px)');
const mobileWidth = window.matchMedia('(max-width: 599px)');
const tabletWidth = window.matchMedia('(min-width: 600px) and (max-width: 1099px)');
const desktopWidth = window.matchMedia('(min-width: 1100px)');

let mediaQuery = [];

function getMediaQuery() {
	if (mobileWidth.matches) {
		mediaQuery = ['isMobile']
	}

	if (tabletWidth.matches) {
		mediaQuery = ['isTablet']
	}

	if (desktopWidth.matches) {
		mediaQuery = ['isDesktop']
	}

	if (sliderBreakpoint.matches) {
		mediaQuery.push('slider')
	}

	return mediaQuery;
}


function inArray(needle, arr) {
	return jQuery.inArray(needle, arr) !== -1;
}

