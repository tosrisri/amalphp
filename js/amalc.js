$('.carousel').carousel({
    interval: 4000
  })


/* ---------------------------------------------- /*
* Preloader
/* ---------------------------------------------- */
(function () {
    $(window).on('load', function () {
        $('.loader').fadeOut();
        $('.page-loader').delay(350).fadeOut('slow');
    });

    $(document).ready(function () {
        /* ---------------------------------------------- /*
        * Set sections backgrounds
        /* ---------------------------------------------- */

        var module = $('.home-section, .module, .module-small, .side-image');
        module.each(function (i) {
            if ($(this).attr('data-background')) {
                $(this).css('background-image', 'url(' + $(this).attr('data-background') + ')');
            }
        });
    });
})(jQuery);

/* Cards Gallery */
baguetteBox.run('.cards-gallery', { animation: 'slideIn'});