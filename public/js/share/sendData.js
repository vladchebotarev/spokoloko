function sendData() {
  $('#file-upload').attr('disabled', true);
  let data = new FormData($('.venue-form')[ 0 ]);
  console.log(photoArray[0].file);
  for(let i = 0; i < photoArray.length; ++i) data.append('images[]', photoArray[ i ].file);
  $.ajax({
    url: '',
    data: data,
    cache: false,
    contentType: false,
    processData: false,
    method: 'POST',
    success(data) {
      console.log('POST', data);
    },
    error(jqXHR) {
      console.log(jqXHR);
    }
  });
}