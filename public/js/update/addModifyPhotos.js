$(document).ready(function() {
  let venueUrl = window.location.href;
  venueUrl = venueUrl.substring(venueUrl.indexOf('update-venue/') + 'update-venue/'.length, venueUrl.length);
  $('.photo-upload-item').click(function() {
      $(this).addClass('selected');
      console.log($(this).find('.image-sq').attr('id'),`http://localhost:8000/user/update-venue/${venueUrl}/cover-image/${$(this).find('.image-sq').attr('id')}`);
      $.get(`http://localhost:8000/user/update-venue/${venueUrl}/cover-image/${$(this).find('.image-sq').attr('id')}`).then(res => console.log(res));
    });
});
