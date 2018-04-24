function validate() {
  let required = $('.active-block .req-check');
  let values = required.map(function() {
    // console.log(this.value, $(this), $(this).val());
    return $(this).val();
  }).get();
  if ($('.active-block').find('#select_city').length) values.unshift(parseInt($('.active-block').find('#select_city').val()));
  else if ($('.active-block').find('#select_venue_type').length) {
    values.unshift(eventType());
    values.unshift(parseInt($('.active-block').find('#select_venue_type').val()));
  } else if ($('.active-block').find('#select_venue_style').length) values.unshift(parseInt($('.active-block').find('#select_venue_style').val()));
  else if ($('.active-block').find('input:radio[name="radio-group-01"]').length) values.unshift(...days());
  console.log(values);
  for (let i = 0; i < values.length; ++i) {
    if (typeof values[i] === 'string') values[i] = values[i].trim();
    if (!values[i]) {
      // console.log(i, values[i], required[i], $(required[i]).val());
      // console.log($(required[i]).val());
      return i;
    }
  }
  return true;
}

function submitForm() {

}

function displayWarning(index) {
  let required = $('.active-block .req-check');
  // console.log(required, required[index]);
  $('.active-block').velocity('scroll', {
    begin: function() {
      console.log('zaczynamy');
    },
    complete: function() {
      console.log('konczymy');
    },
    container: $(required[index]),
    duration: 'fast',
    easing: 'ease-in-out'
  });
}

function eventType() {
  let types = $('input:checkbox:checked[name="event_types[]"]');
  let checked = [];
  types.each(function(i, el) {
    checked.push(parseInt($(el).val()));
  });
  return checked;
}

function days() {
  let array = [];
  let radio = $('input:radio:checked[name="radio-group-01"]');
  if (radio.is('#timeweek')) {
    $('#setres input').removeClass('req-check').val('');
    let hours = $('input:radio:checked[name="radio-group-02"]');
    if (hours.is('#timeonce')) {
      $('#setonce .filter').addClass('req-check');
      $('#setseven input:checkbox:checked').parent().next().find('.filter').removeClass('req-check').val('');
      $('#setseven input:checkbox:checked').prop('checked',false);
    } else {
      $('#setonce .filter').removeClass('req-check').val('');
      if($('#setseven input:checkbox:checked').length) $('#setseven input:checkbox:checked').parent().next().find('.filter').addClass('req-check');
      else array.push(undefined);
    }
  } else {
    $('#setonce input, #setseven input:not(:checkbox)').removeClass('req-check').val('');
    $('#setseven input:checkbox:checked').prop('checked',false);
  }
  $('#setres input:not(:checkbox)').addClass('req-check');
  $('.active-block').find('.req-check').each(function(i, el) {
    array.push($(el).val());
  });
  return array;
}
