$('#file-upload').change(function() {
  $('.active-block').find('.error').addClass('hide');
  $('.active-block').find('.error').find('.list').find('li').empty();
  let check = false;
  for(let i = 0; i < this.files.length; ++i) {
    let ext = this.files[ i ].name.match(/\.([^\.]+)$/)[ 1 ].toLowerCase();
    switch(ext) {
      case 'jpg':
      case 'png':
      case 'bmp':
      case 'jpeg':
        let photo = new Photo(this, i);
        let photoDOM = photo.addPhoto($(this));
        photoDOM.find('.photo-upload-item').first().click(function() {
          photo.selectPhoto();
        });
        photoDOM.find('.remove').first().click(function(event) {
          photo.removePhoto(event);
        });
        break;
      case null:
      default:
        check = true;
    }
  }
  if(check) {
    console.log('not allowed');
    $('.active-block').find('.error').removeClass('hide');
    $('.active-block').find('.error').find('.list').append(`<li>Dozwolone formaty: .jpeg, .jpg, .png, .bmp.</li>`);
  }
});