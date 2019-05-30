/**
* This code was adapted from the following source: https://html-online.com/articles/dynamic-scroll-back-top-page-button-javascript
 **/

//Scroll to the top when the arrow up clicked
$(window).scroll(() => {
	const height = $(window).scrollTop();
	if (height > 100) {
		$('#backToTop').fadeIn();
	} else {
		$('#backToTop').fadeOut();
	}
});
$(document).ready(() => {
	$("#backToTop").click((event) => {
		event.preventDefault();
		$("html, body").animate({scrollTop: 0}, "slow");
		return false;
	});

});