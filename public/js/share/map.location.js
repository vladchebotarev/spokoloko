(function() {
	let height = window.innerHeight;
	let headerHeight = $('.header-content').css('height');
	headerHeight = parseInt(headerHeight.substr(0, headerHeight.length - 2));
	let footerHeight = $('.add-listing-footer').css('height');
	footerHeight = parseInt(footerHeight.substr(0, footerHeight.length - 2));
	let mapHeight = height - headerHeight - footerHeight - 80;
	let map = $('.map-wrapper');
	let styles = {
		height: `${mapHeight}px`,
		// top: `${headerHeight}`,
		bottom: `${footerHeight}`,
	};
	map.css(styles);
	$('.active-block').scroll(function() {
		clearTimeout($.data(this, "scrollCheck"));
		$.data(this, "scrollCheck", setTimeout(function() {
			// map.css('top', $('.active-block').scrollTop());
			map.velocity({
				top: $('.active-block').scrollTop()
			}, {
				duration: 'slow',
				easing: "easeInSine"
			});
		}, 300));
	});
})();