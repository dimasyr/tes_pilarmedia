$('.page-scroll').on('click', function(e){
    
    var href = $(this).attr('href');

    var elementHref = $(href);

    $('html,body').animate({
        scrollTop: elementHref.offset().top - 50
    }, 900);

    e.preventDefault();
})