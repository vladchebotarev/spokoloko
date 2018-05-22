$('#file-upload').change(function() {
  let lowerThan10 = true;
  let update = false;
  let venueUrl = window.location.href;
  venueUrl = venueUrl.substring(venueUrl.indexOf('update-venue/') + 'update-venue/'.length, venueUrl.length);
  if(window.location.href.includes('update-venue/')) {
    update = true;
    let current = $('.photo-upload-item:not(#add-photo)').length;
    let sum = current + this.files.length;
    console.log(current, sum);
    if(sum > 10) lowerThan10 = false;
  }
  if(lowerThan10) {
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
            if(update) {
              let imageID = $(this).attr('id');
              console.log('imageID',imageID);
              $.ajax({
                url: `http://localhost:8000/user/update-venue/${venueUrl}/cover-image/${imageID}`,
                type: 'GET',
                success(res) {
                  console.log('GET', res);
                }
              });
            }
          });
          photoDOM.find('.remove').first().click(function(event) {
            photo.removePhoto(event);
            if(update) {
              let imageID = $(this).attr('id');
              console.log('imageID',imageID);
              $.ajax({
                headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: `http://localhost:8000/user/update-venue/${venueUrl}/delete-image/${imageID}`,
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
          if(update) {
            $.ajax({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              url: `http://localhost:8000/user/update-venue/${venueUrl}/images`,
              type: 'POST',
              data: {
                name: photo.name
              },
              success(res) {
                console.log('POST', res);
                console.log(this.data);
              },
              error(jqXHR) {
                console.log(jqXHR);
              }
            });
          }
          break;
        case null:
        default:
          check = true;
      }
    }
    if(check) {
      $('.active-block').find('.error').removeClass('hide');
      $('.active-block').find('.error').find('.list').append(`<li>Dozwolone formaty: .jpeg, .jpg, .png, .bmp.</li>`);
    }
  }
});