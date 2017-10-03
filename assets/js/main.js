//Swiper galerie partenaires
var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        slidesPerView: 7,
        spaceBetween: 20,
        breakpoints: {
            1024: {
                slidesPerView: 4,
                spaceBetween: 10
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            320: {
                slidesPerView: 1,
                spaceBetween: 10
            }
        }
    });
