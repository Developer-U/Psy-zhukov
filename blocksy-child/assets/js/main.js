window.addEventListener('DOMContentLoaded', function(){
    const availableScreenWidth = window.screen.availWidth; 

    /*Fancybox Gallery*/
    Fancybox.bind("[data-fancybox]", {
        hideScrollbar: false,
    });

    /*Inputmask*/

    var selectors = document.querySelectorAll('input[type="tel"].input-form');

    selectors.forEach(function(selector){
    var im = new Inputmask("+7(999)-999-9999");
    im.mask(selector);
    });

    
    
    /* Init AOS Animation */
    AOS.init();

    

    
    /* Get Digit Count */
    jQuery(function($) {
        $('.js-count').each(function() {
            $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
            }, {
            duration: 8000,
            easing: 'swing',
            step: function(now) {
                $(this).text(Math.ceil(now));
            }
            });
        });

        let menu_main = $('#primary-menu');
        if(availableScreenWidth <=1199 ) {
            menu_main.prepend('<li class="menu-item"><a href="/">главная</a></li>');
        }
    });


});