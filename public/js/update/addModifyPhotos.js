$(document).ready(function() {
  let venueUrl = window.location.href;
  venueUrl = venueUrl.substring(venueUrl.indexOf('update-venue/') + 'update-venue/'.length, venueUrl.length);
  let loaded = $('.photo-upload').find('.four').not(':has(#add-photo)');
  loaded.each(function(i, el) {
    let photo = new Photo(null);
    photo.obj = $(el);
    photo.img = photo.obj.find('.image-sq');
    photo.src = photo.img.attr('src');
    let img = new Image();
    img.onload = function() {
      if(this.width >= this.height) photo.img.addClass('bigger-width');
      else photo.img.addClass('bigger-height');
    };
    img.src = photo.src;
    if(photo.obj.find('.photo-upload-item').hasClass('selected')) photo.select = true;
    else photo.select = false;
    
    photoArray.push(photo);
    
    let imageID = photo.img.attr('id');
    photo.obj.find('.photo-upload-item').click(() => {
      if($(this).find('.photo-upload-item').hasClass('selected')) {
      
      }
      else {
        photo.selectPhoto();
        $.ajax({
          url: `http://localhost:8000/user/update-venue/${venueUrl}/cover-image/${imageID}`,
          type: 'GET',
          success(res) {
            console.log('GET', res);
          }
        });
      }
    });
    photo.obj.find('.remove').click((e) => {
      if($(this).find('.photo-upload-item').hasClass('selected')) {
      
      }
      else {
        photo.removePhoto(e);
        $.ajax({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          url: `http://localhost:8000/user/update-venue/${venueUrl}/delete-image/${imageID}`,
          type: 'DELETE',
          success(res) {
            console.log('DELETE', res);
          },
          error(jqXHR, textStatus, errorThrown) {
            console.log(`jqXHR:`, jqXHR);
            console.log(`textStatus: `, textStatus);
            console.log(`errorThrown: `, errorThrown);
          }
        });
      }
    });
    
  });
});

