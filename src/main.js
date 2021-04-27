require('bootstrap');
require('masonry-layout');

jQuery(document).ready(function($) {
    $(window).on('scroll', function () {
        if ( $(window).scrollTop() > 10 ) {
            $('.navbar').addClass('active');
        } else {
            $('.navbar').removeClass('active');
        }
    });
    
    var isShown = false;
    $('#navbar-toggler').click(function() {
        if (this.id == 'navbar-toggler') {
            isShown = !isShown;
        } 
        
        if (isShown) {
            $('.navbar').addClass('showBg');
        } else {
            $('.navbar').removeClass('showBg');
        }
    });
});