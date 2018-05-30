var today = new Date();

$("#mycalendar").calendar({
    type: "date",
    maxDate: new Date(today.getFullYear(), today.getMonth(), today.getDate()),
    className: {
        prevIcon: "icon icon-arrow-left-122",
        nextIcon: "icon icon-arrow-right-122"
    },
    formatter: {
        date: function (date, settings) {
            if (!date) return '';
            var day = date.getDate();
            var month = date.getMonth() + 1;
            var year = date.getFullYear();
            if (month < 9) {
                return year + '-0' + month + '-' + day;
            } else {
                return year + '-' + month + '-' + day;
            }

        }
    }
});

$("#uploadAvatar").click(function () {
    $('#inputImage').trigger('click');
});

$('#inputImage').change(function () {
    $('#formUpdateImage').submit();
});