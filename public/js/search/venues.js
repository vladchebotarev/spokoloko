var startSlider = document.getElementById('price-range-slider');

if (startSlider) {
    noUiSlider.create(startSlider, {
        start: [$( "#minPrice" ).val(),  $( "#maxPrice" ).val()],
    tooltips: true,
        format: wNumb({
        decimals: 0,
        postfix: 'zł'
    }),
        connect: true,
        range: {
        'min': [0],
            'max': [10000]
    }
});
}

startSlider.noUiSlider.on('change.one', function(){
    var prices = startSlider.noUiSlider.get();
    $( "#minPrice" ).val(parseInt(prices[0].replace('zł','')));
    $( "#maxPrice" ).val(parseInt(prices[1].replace('zł','')));
    $('#search_form').submit();
});

$( "#select_city" ).change(function() {
    $('#search_form').attr('action', $( "#select_city" ).val()).submit();
});

$( "#select_event_type" ).change(function() {
    $('#search_form').submit();
});

$( "#clearFilters" ).on('click', function(){
    $('input:checkbox').removeAttr('checked');
});