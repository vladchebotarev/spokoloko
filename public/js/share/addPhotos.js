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
	return new Promise(res => {
		var reader = new FileReader();

		reader.onload = function(e) {
			newPhoto.attr('src', e.target.result);
			let bool = newPhoto.css('width') >= newPhoto.css('height') ? true : false;
			console.log(bool, newPhoto.css('width'), newPhoto.css('height'));
			res(bool);
		}

		reader.readAsDataURL(input);
	});
}

async function biggerWidth(obj, index, imgTag) {
	let imageLoaded = await readURL(obj.files[index], imgTag);
	return imageLoaded;
}

function newPhoto() {
	return $(
		`<div class="ui three wide computer six wide tablet six wide mobile column">

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
		biggerWidth(this, i, imgTag).then(isBiggerWidth => {
			if (isBiggerWidth) {
				photo.find('.image-wrapper img').addClass('bigger-width');
			} else {
				photo.find('.image-wrapper img').addClass('bigger-height');
			}
			// photo.find('.image-wrapper').css({
			// 	opacity: '0',
			// 	width: `${!res ? '100%' : 'auto'} !important`,
			// 	height: `${!res ? 'auto' : '100%'} !important`
			// });
		});
		photo.find('.image-wrapper').css('opacity', '0');
		// let biggerWidth = imgTag.css('width') >= imgTag.css('height') ? true : false;
		// console.log(biggerWidth, imgTag.css('width'), imgTag.css('height'));
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
