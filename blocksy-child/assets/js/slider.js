window.addEventListener('DOMContentLoaded', function(){  
    const reviews_swiper = new Swiper(".reviews-slider", {
        slidesPerView: 'auto', 
        spaceBetween: 10,  
        loop: true, 
        speed: 700,    
        keyboard: {
            enabled: true,
            pageUpDown: true,
        },  
        autoplay: {
            delay: 4000,            
            waitForTransition: true,
        },
        pagination: {
            el: '.swiper-pagination',
          },

        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
          breakpoints: { 
            550: {
                slidesPerView: 2,   
                spaceBetween: 12,               
            },        
            1200: {
                slidesPerView: 3,   
                spaceBetween: 12,               
            },
            1600: {
                slidesPerView: 4,   
                spaceBetween: 12,               
            }               
          } 
    });
    
    const documents_swiper = new Swiper(".documents-slider", {
        slidesPerView: 1, 
        spaceBetween: 10,  
        loop: true, 
        speed: 700,    
        keyboard: {
            enabled: true,
            pageUpDown: true,
        },          
        autoplay: {
            delay: 3000,            
            waitForTransition: true,
        },      
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },   
          breakpoints: { 
            550: {
                slidesPerView: 2,           
            },   
            992: {
                slidesPerView: 1,           
            },          
            1400: {
                pagination: {
                    el: '.swiper-pagination',
                  },           
            },
        }    
    });
});