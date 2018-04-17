$('#file-upload').change(function() {
	for (let i = 0; i < this.files.length; ++i) {
		let photo = new Photo(this, i);
		let photoDOM = photo.addPhoto($(this));
		photoDOM.find('.photo-upload-item').first().click(function() {
			photo.selectPhoto();
		});
		photoDOM.find('.remove').first().click(function(event) {
			photo.removePhoto(event);
		});
	}
});
