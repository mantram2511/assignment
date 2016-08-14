$('#menu > li').on('click', function(e) {
    $('#menu > li').removeClass('active');
    $(this).addClass('active');
});