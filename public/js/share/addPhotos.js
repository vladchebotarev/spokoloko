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
}

function readURL(input, newPhoto) {
	var reader = new FileReader();

	reader.onload = function(e) {
		newPhoto.attr('src', e.target.result);
	}

	reader.readAsDataURL(input);
}

function newPhoto() {
	return $(
		`<div class="ui three wide computer six wide tablet twelve wide mobile column">

		<div class="photo-upload-item">
		<div class="image-wrapper">
		<img class="image-sq" alt="">
		</div>

		<a class="remove"><i class="icon icon-close"></i></a>
		<!-- <a href="" class="cover-photo-sq"><i class="icon icon-pin1"></i></a> -->

		<!-- <textarea  cols="30" rows="2" placeholder="What are the highlights of this photo?"></textarea> -->


		</div>
		</div>`
	);
}

function removePhoto(event, object) {
	event.stopPropagation();
	$(object).parent().removeClass('selected').parent().velocity({
		opacity: 0,
		// flexGrow: 0
	}, {
		display: 'none',
		duration: 'fast',
		complete: function() {
			$(this).remove();
		}
	});
}

function selectPhoto(object) {
	// let pins = $(this).find('.cover-photo-sq');
	let currentlySelected = selected();
	if ($(object).hasClass('selected')) {
		$(object).removeClass('selected');
		// pins.css(pinStyleOff);
	} else if (currentlySelected.exists) {
		currentlySelected.obj.removeClass('selected');
		$(object).addClass('selected');
		// pins.css(pinStyleOn);
	} else {
		$(object).addClass('selected');
		// pins.css(pinStyleOn);
	}
}

$('.photo-upload-item:not(#add-photo)').click(function() {
	selectPhoto(this);
});

$('.photo-upload-item .remove').click(function(event) {
	removePhoto(event, this);
});

$('#file-upload').change(function() {
	for (let i = 0; i < this.files.length; ++i) {
		let photo = newPhoto();
		let imgTag = photo.find('.image-sq');
		readURL(this.files[i], imgTag);
		photo.find('.image-wrapper').css('opacity', '0');
		let photoDOM = $(this).parent().parent().parent().prepend(photo);
		photo.find('.image-wrapper').velocity({
			opacity: 1
		}, {
			duration: 'fast',
			easing: 'ease-in-out'
		});
		photoDOM.find('.photo-upload-item').first().click(function() {
			selectPhoto(this);
		});
		photoDOM.find('.remove').click(function(event) {
			removePhoto(event, this);
		});
	}
});