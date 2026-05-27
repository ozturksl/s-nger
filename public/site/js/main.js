
    document.addEventListener('DOMContentLoaded', function () {
        var swiper = new Swiper(".productSwiper", {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                480: { slidesPerView: 1, spaceBetween: 15 },
                576: { slidesPerView: 2, spaceBetween: 15 },
                768: { slidesPerView: 3, spaceBetween: 20 },
                1024: { slidesPerView: 4, spaceBetween: 25 }
            }
        });


        var testimonialsSwiper = new Swiper(".testimonialsSwiper", {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            navigation: {
                nextEl: ".testimonial-next",
                prevEl: ".testimonial-prev",
            },
            pagination: {
                el: ".testimonials-pagination",
                clickable: true,
            },
            breakpoints: {
                480: { slidesPerView: 1, spaceBetween: 15 },
                576: { slidesPerView: 1, spaceBetween: 15 },
                768: { slidesPerView: 2, spaceBetween: 20 },
                1024: { slidesPerView: 3, spaceBetween: 25 }
            }
        });
    });
