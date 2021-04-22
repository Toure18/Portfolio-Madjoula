require('../js/app.js')
require('../styles/course.css')

$(document).keydown(function (e) {
    var pWidth = $('li').width();

    // right arrow
    if (e.keyCode === 39) {
        $('.container-timeline').animate({
            scrollLeft: '+=' + (pWidth + 60)
        }, 500);
    }


    // left arrow
    if (e.keyCode === 37) {
        $('.container-timeline').animate({
            scrollLeft: '-=' + (pWidth + 60)
        }, 500);
    }
});

$(document).ready(function(){
    $('[data-toggle="popover"]').popover({placement:'bottom'});

    var pWidth = $('li').width();


    $(document).on('click', 'button[id="right"]', function () {
        $('.container-timeline').animate({
            scrollLeft: '+=' + (pWidth + 60)
        }, 500);
    });

    $(document).on('click', 'button[id="left"]', function () {
        $('.container-timeline').animate({
            scrollLeft: '-=' + (pWidth + 60)
        }, 500);
    });


});