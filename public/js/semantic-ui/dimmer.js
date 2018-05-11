$("form").submit(function (e) {
    e.preventDefault();
    $('button[type=submit], input[type=submit]').prop('disabled', true);
    $("#dimmer").show();
    this.submit();
});