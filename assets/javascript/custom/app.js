$('*[data-thumb]').each(function () {
    var dt = $(this).data('thumb');
    $(this).css('backgroundImage','url('+ dt +')').addClass('bg-cover');
});
