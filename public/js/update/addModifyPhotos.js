$(document).ready(function() {
  let venueUrl = window.location.href;
  venueUrl = venueUrl.substring(venueUrl.indexOf('update-venue/') + 'update-venue/'.length, venueUrl.length);
  let loaded = $('.photo-upload-item').find('.image-sq');
  let imageID = loaded.map(function(i, el) {
    return $(el).attr('id');
  }).get();
  for(let i = 0; i < imageID.length; ++i) {
    console.log(`user/update-venue/${venueUrl}/cover-image/${imageID[ i ]}`);
    console.log($.get(`user/update-venue/${venueUrl}/cover-image/${imageID[ i ]}`));
    
  }
});
