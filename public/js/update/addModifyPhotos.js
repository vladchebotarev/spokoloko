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
    photo.select = !!photo.obj.find('.photo-upload-item').hasClass('selected');
    
    photoArray.push(photo);
    
    let imageID = photo.img.attr('id');
    photo.obj.find('.photo-upload-item').click(() => {
      if($(this).find('.photo-upload-item').hasClass('selected')) {
      
      }
      else {
        photo.selectPhoto();
        $.ajax({
          url: `/user/update-venue/${venueUrl}/cover-image/${imageID}`,
          type: 'GET',
          success(res) {
            console.log('GET', res);
          }
        });
      }
    });
    photo.obj.find('.remove').click((e) => {
      if($(this).find('.photo-upload-item').hasClass('selected')) {
        e.stopPropagation();
      }
      else if($('.photo-upload-item:not(#add-photo)').length <= 5) {
        e.stopPropagation();
      }
      else {
        photo.removePhoto(e);
        $.ajax({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          url: `/user/update-venue/${venueUrl}/delete-image/${imageID}`,
          type: 'DELETE',
          success(res) {
            console.log('DELETE', res);
          },
          error(jqXHR) {
            console.log(jqXHR);
          }
        });
      }
    });
    
  });
})
;

