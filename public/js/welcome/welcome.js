$("#searchSubmit").click(function () {
    $('#searchForm').attr('action', 'venues/' + $("#select_city").val()).submit();
});