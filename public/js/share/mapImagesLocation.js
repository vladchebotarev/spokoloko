(function() {
	let height = window.innerHeight;
	let headerHeight = $('.header-content').css('height');
	headerHeight = parseInt(headerHeight.substr(0, headerHeight.length - 2));
	let footerHeight = $('.add-listing-footer').css('height');
	footerHeight = parseInt(footerHeight.substr(0, footerHeight.length - 2));
	let mapHeight = height - headerHeight - footerHeight - 80;
	let map = $('.map-wrapper');
	// let image = $('.image-wrapper');
	let styles = {
		height: `${mapHeight}px`,
		// top: `${headerHeight}`,
		bottom: `${footerHeight}`
	};
	map.css(styles);
	$('.active-block').scroll(function() {
		clearTimeout($.data(this, "scrollCheck"));
		$.data(this, "scrollCheck", setTimeout(function() {
			move('.map-wrapper').ease('in-out').translate(0, $('.active-block').scrollTop()).end();
			move('.sticky-img').ease('in-out').translate(0, $('.active-block').scrollTop()).end();
			// map.velocity({
			// 	translateY: `${$('.active-block').scrollTop()}`
			// }, {
			// 	duration: 'slow',
			// 	easing: 'ease-in-out'
			// });
			// image.velocity({
			// 	top: $('.active-block').scrollTop()
			// }, {
			// 	duration: 'slow',
			// 	easing: 'ease-in-out'
			// });
		}, 300));
	});
})();