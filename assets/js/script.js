var swiper = new Swiper('.blog-slider', {
    spaceBetween: 30,
    effect: 'fade',
    loop: false,
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

$(".username").keypress(function (e) {
    if (e.which == 13) {
        login();
    }

    console.log(e.which);
});

function send(url, data) {
    return new Promise((resolve, reject) => {
        $.ajax({
            url: url,
            type: "POST",
            data: data,
            success: function (response) {
                let rsp = JSON.parse(response);
                if ("message" in rsp) {
                    if (rsp.status == -1) {
                        window.location.href = "/model/logout";
                    } else if (rsp.status == 0) {
                        notyf.error(rsp.message);
                    } else if (rsp.status == 2) {
                        notyf.open({
                            type: "primary",
                            message: rsp.message
                        });
                    } else {
                        notyf.success(rsp.message);
                    }
                }
                
                console.log(rsp);
                resolve(rsp);
            },
            error: function (error) {
                reject(error);
            }
        });
    });
}