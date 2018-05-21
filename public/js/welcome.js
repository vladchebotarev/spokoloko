$(document).ready(function() {
  $('input.search').click(function(){
    $(this).siblings('div.text').text('');
  });
});