/* AJAX Login Function*/
$(function () {
    $(document).on('submit', '#formLogin', function (e) {
        e.preventDefault();

        $('#loginError').fadeOut();

        $.ajax({
            url: $(this).attr('action'),
            type: $(this).attr('method'),
            dataType: "json",
            data: $(this)laravel ,

        })
            .always(function (data) {
                if (data.status === 200) {
                    location.reload();
                } else {
                    $('#loginError').text(data.responseJSON.errors.email[0]).fadeIn();

                }

            });
    });
})
/* END */

/* AJAX Email Register Function*/
$(function(){

    $(document).on('submit', '#formRegisterEmail', function(e) {
        e.preventDefault();

        $('input+small').text('').fadeOut();
        $('input').removeClass('has-error');

        $.ajax({
            method: $(this).attr('method'),
            url: $(this).attr('action'),
            data: $(this).serialize(),
            dataType: "json"
        })
            .always(function (data) {
                if (data.status === 200) {
                    location.reload();
                } else {
                    $.each(data.responseJSON.errors, function (key, value) {
                        var input = '#formRegisterEmail input[name=' + key + ']';
                        $(input + '+small').text(value).fadeIn();
                        $(input).addClass('has-error');
                    });
                }

            });

    });

})
/* END */