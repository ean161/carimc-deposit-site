var swiper = new Swiper('.blog-slider', {
    spaceBetween: 30,
    effect: 'fade',
    loop: true,
    mousewheel: {
        invert: false,
    },
    pagination: {
        el: '.blog-slider__pagination',
        clickable: true,
    }
});

var notyf = new Notyf({
    duration: 5000,
    types: [
        {
            type: 'primary',
            background: '#1752ff',
            icon: false
        },
        {
            type: 'default',
            background: '#f3f4f6',
            icon: false
        }
    ]
});

function cardSlide() {
    swiper.slideTo(2);
}

function bankingSlide() {
    swiper.slideTo(3);
}

async function login() {
    notyf.error("Tính năng đang bảo trì");
}