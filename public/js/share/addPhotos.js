let pinStyleOn = {
	background: '#21BA45',
	opacity: '1'
};

let pinStyleOff = {
	background: 'transparent',
	opacity: '0'
};

$('.photo-upload-item').click(function() {
	let pins = $(this).find('.cover-photo');
	if ($(this).hasClass('selected')) {
		$(this).removeClass('selected');
		pins.css(pinStyleOff);
	} else {
		$(this).addClass('selected');
		pins.css(pinStyleOn);
	}
});