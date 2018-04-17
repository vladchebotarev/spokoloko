(function() {
	let height = window.innerHeight;
	let headerHeight = $('.header-content').css('height');
	headerHeight = parseInt(headerHeight.substr(0, headerHeight.length - 2));
	let footerHeight = $('.add-listing-footer').css('height');
	footerHeight = parseInt(footerHeight.substr(0, footerHeight.length - 2));
	let paddingHeight = $('.active-block').css('padding-top');
	paddingHeight = parseInt(paddingHeight.substr(0, paddingHeight.length - 2));
	let mapHeight = height - headerHeight - footerHeight - paddingHeight;
	let map = $('.map-wrapper');
	map.css({
		height: `${mapHeight}px`,
		bottom: `${footerHeight}`
	});
	$('.add-listing-content').scroll(function() {
		height = window.innerHeight;
		mapHeight = height - headerHeight - footerHeight - paddingHeight;
		map.css({
			height: `${mapHeight}px`,
			bottom: `${footerHeight}`
		});
		let object = $(this).find('.image-inner').length ? '.active-block .image-inner' : '.map-wrapper';
		clearTimeout($.data(this, "scrollCheck"));
		$.data(this, "scrollCheck", setTimeout(function() {
			move(object).ease('in-out').translate(0, $('.active-block').scrollTop()).end();
		}, 200));
	});
})();
