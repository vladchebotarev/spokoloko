// let pinStyleOn = {
// 	background: '#21BA45',
// 	opacity: '1'
// };
//
// let pinStyleOff = {
// 	background: 'transparent',
// 	opacity: '0'
// };

function selected() {
	if ($('.photo-upload-item:not(#add-photo)').hasClass('selected')) {
		return {
			obj: $('.selected'),
			exists: true
		};
	}
	return {
		obj: undefined,
		exists: false
	};
};

$('.photo-upload-item:not(#add-photo)').click(function() {
	// let pins = $(this).find('.cover-photo-sq');
	let currentlySelected = selected();
	if ($(this).hasClass('selected')) {
		$(this).removeClass('selected');
		// pins.css(pinStyleOff);
	} else if (currentlySelected.exists) {
		currentlySelected.obj.removeClass('selected');
		$(this).addClass('selected');
		// pins.css(pinStyleOn);
	} else {
		$(this).addClass('selected');
		// pins.css(pinStyleOn);
	}
});

$('.photo-upload-item .remove').click(function(event) {
	event.stopPropagation();
	$(this).parent().removeClass('selected').parent().velocity({
		opacity: 0,
		// flexGrow: 0
	}, {
		display: 'none',
		duration: 'fast'
	});
});