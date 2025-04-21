<div class="blog-slider" id="login-page">
    <img class="banner" src="/assets/images/banner.png" width="100px" class="d-flex justify-content-end"/>
    <div class="blog-slider__wrp swiper-wrapper">
        <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__img">
                <img src="/assets/images/logo.png" alt="">
            </div>
            <div class="blog-slider__content">
                <span class="blog-slider__code">Đăng nhập tài khoản</span>
                <div class="title-wrapper">
                    <center><div class="blog-slider__title">CariMC</div></center>
                </div>
                <div class="blog-slider__text"><?=Config::notification("login");?></div>
                <div class="mb-3">
                    <div class="form-group">
                        <input class="select" id="username" placeholder="Nhập tên tài khoản"/>
                    </div>
                </div>
                <p class="blog-slider__button" onclick="login()">Đăng nhập</p>
            </div>
        </div>
    </div>
    <div class="blog-slider__pagination"></div>
</div>