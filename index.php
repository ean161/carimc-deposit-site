<?php
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/lib/init.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/view/header.php");
?>
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
                    <form id="search_form" onsubmit="login(); return false;">
                        <div class="form-group">
                            <input class="select username" placeholder="Nhập tên tài khoản"/>
                        </div>
                    </form>
                </div>
                <p id="loginBtn" class="blog-slider__button" onclick="login()">Đăng nhập</p>
            </div>
        </div>
    </div>
    <div class="blog-slider__pagination"></div>
</div>
<?php
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/view/footer.php");
?>