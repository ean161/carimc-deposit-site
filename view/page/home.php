<div class="blog-slider" id="home-page" style="display: none">
    <img class="banner" src="/assets/images/banner.png" width="100px" class="d-flex justify-content-end"/>
    <div class="blog-slider__wrp swiper-wrapper">
        <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__img">
                <img src="/assets/images/logo.png" alt="">
            </div>
            <div class="blog-slider__content">
                <span class="blog-slider__code">Minecraft servers</span>
                <div class="title-wrapper">
                    <center><div class="blog-slider__title">CariMC</div></center>
                </div>
                <div class="blog-slider__text"><?=Config::notification("login");?></div>
                <p class="blog-slider__button" onclick="cardSlide()">Nạp thẻ</p>&ensp;
                <p class="blog-slider__button" onclick="bankingSlide()">Nạp ATM</p>
            </div>
        </div>
        <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__img">
                <img src="/assets/images/logo.png" alt="">
            </div>
            <div class="blog-slider__content">
                <span class="blog-slider__code">Minecraft servers</span>
                <div class="title-wrapper">
                    <center><div class="blog-slider__title">CariMC</div></center>
                </div>
                <div class="blog-slider__text"><?=Config::notification("card");?></div>
                <a href="#" class="blog-slider__button">READ MORE</a>
            </div>
        </div>
        <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__img">
                <img src="/assets/images/logo.png" alt="">
            </div>
            <div class="blog-slider__content">
                <span class="blog-slider__code">Minecraft servers</span>
                <div class="title-wrapper">
                    <center><div class="blog-slider__title">CariMC</div></center>
                </div>
                <div class="blog-slider__text"><?=Config::notification("banking");?></div>
                <a href="#" class="blog-slider__button">READ MORE</a>
            </div>
        </div>
    </div>
    <div class="blog-slider__pagination"></div>
</div>