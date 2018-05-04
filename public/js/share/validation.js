function validate() {
  let required = $('.active-block .req-check, .active-block .req-select');
  required.removeClass('warning');
  $('#setseven input:checkbox').first().parent().parent().parent().removeClass('warning');
  required = $('.active-block .req-check');
  let values = required.map(function () {
    if (!$(this).val()) return $(this);
  }).get();
  if ($('.active-block').find('#select_city').length && !$('.active-block').find('#select_city').val()) values.unshift($('.active-block').find('#select_city').parent());
  else if ($('.active-block').find('#select_venue_type').length) {
    if (eventType()) values.unshift(eventType());
    if (!$('.active-block').find('#select_venue_type').val()) values.unshift($('.active-block').find('#select_venue_type').parent());
  } else if ($('.active-block').find('#select_venue_style').length && !$('.active-block').find('#select_venue_style').val()) values.unshift($('.active-block').find('#select_venue_style').parent());
  else if ($('.active-block').find('input:radio[name="availability"]').length) {
    if (days()) {
      values.unshift(...days());
      if (!values.length) {
        $('.next-sq').velocity({
          opacity: 0
        }, {
          display: 'none',
          duration: animationTime,
          easing: 'ease'
        });
        $('.button-submit').velocity({
          opacity: 1
        }, {
          delay: animationTime,
          duration: animationTime,
          easing: 'ease',
          display: 'flex'
        });
      }
    }
  } else if ($('.active-block').find('.photo-upload').length) {
    if (submitForm()) values.unshift(submitForm());
  }
  console.log('Values: ', values);
  if (values.length) return values;
  return true;
}

function displayWarning($array) {
  for (let i = 0; i < $array.length; ++i) {
    $array[ i ].addClass('warning');
  }
  $('.active-block').animate({
    scrollTop: $array[ 0 ].offset().top
  }, 500);
}


function submitForm() {
  let data = Photo.fetchData();
  console.log(data);
  let check = false;
  if (data.srcArray.length < 5 || data.srcArray.length > 10) {
    console.log('Nie może być mniej niż 5 zdjęć i więcej niż 10.');
    check = true;
  }
  if (data.selected) {
    console.log(data.selected.width, data.selected.height);
    if (data.selected.width < 1200 || data.selected.height < 750) {
      console.log('Zdjęcie główne musi mieć minimalne wymiary 1200 x 750.');
      check = true;
    }
  } else {
    console.log('Zdjęcie główne nie zostało wybrane.');
    check = true;
  }
  if (check) return $('.active-block .photo-upload');
  else {
    console.log('Submit me!!');
    // $('.button-submit').submit();
  }
}

function eventType() {
  let types = $('.active-block input:checkbox:checked');
  let checked = [];
  types.each(function (i, el) {
    checked.push(parseInt($(el).val()));
  });
  if (checked === []) {
    return $('.active-block input:checkbox').first().parent().parent();
  }
}

function days() {
  let array = [];
  let radio = $('input:radio:checked[name="availability"]');
  if (radio.is('#timeweek')) {
    let hours = $('input:radio:checked[name="week_availability"]');
    if (hours.is('#timeonce')) {
      $('#setonce .filter').addClass('req-check');
      $('#setseven input:checkbox:checked').parent().next().find('.filter').removeClass('req-check').val('');
      $('#setseven input:checkbox:checked').prop('checked', false);
    } else {
      $('#setonce .filter').removeClass('req-check').val('');
      if ($('#setseven input:checkbox:checked').length) $('#setseven input:checkbox:checked').parent().next().find('.filter').addClass('req-check');
      else array.push($('#setseven input:checkbox').first().parent().parent().parent());
    }
  } else {
    $('#setonce input, #setseven input:not(:checkbox)').removeClass('req-check').val('');
    $('#setseven input:checkbox:checked').prop('checked', false);
  }
  $('#setres input:not(:checkbox)').addClass('req-check');
  $('.active-block').find('.req-check').each(function (i, el) {
    if (!$(el).val()) array.push($(el));
  });
  return array;
}

$('#security_deposit_not_required').change(function () {
  notRequired($(this));
});

$('#book_in_eventday').change(function () {
  notRequired($(this));
});

$('#cancel_book_in_eventday').change(function () {
  notRequired($(this));
});

function notRequired(checkbox) {
  let input = checkbox.parent().prev().find('input');
  let label = checkbox.parent().prev().find('label');
  if (checkbox.is(':checked')) {
    input.removeClass('req-check');
    label.removeClass('required');
  } else {
    input.addClass('req-check');
    label.addClass('required');
  }
}
