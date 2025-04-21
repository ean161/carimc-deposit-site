<?php
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/lib/init.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/parts/header.php");
?>
<div class="blog-slider">
    <div class="blog-slider__wrp swiper-wrapper">
        <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__img">
                <img src="/assets/images/logo.png" alt="">
            </div>
            <div class="blog-slider__content">
                <span class="blog-slider__code">Minecraft servers</span>
                <div class="blog-slider__title">CariMC</div>
                <div class="blog-slider__text"><?=Config::description();?></div>
                <a href="#" class="blog-slider__button">Nạp thẻ</a>&ensp;
                <a href="#" class="blog-slider__button">Momo/ATM</a>
            </div>
        </div>
        <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__img">
                <img src="/assets/images/logo.png" alt="">
            </div>
            <div class="blog-slider__content">
                <span class="blog-slider__code">26 December 2019</span>
                <div class="blog-slider__title">Lorem Ipsum Dolor2</div>
                <div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi?</div>
                <a href="#" class="blog-slider__button">READ MORE</a>
            </div>
        </div>
        <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__img">
                <img src="/assets/images/logo.png" alt="">
            </div>
            <div class="blog-slider__content">
                <span class="blog-slider__code">26 December 2019</span>
                <div class="blog-slider__title">Lorem Ipsum Dolor</div>
                <div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi?</div>
                <a href="#" class="blog-slider__button">READ MORE</a>
            </div>
        </div>
    </div>
    <div class="blog-slider__pagination"></div>
</div>
<?php
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/parts/footer.php");
?>