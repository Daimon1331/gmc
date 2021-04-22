<?php
/*
Template Name: Category
*/
?>
<?php get_header(); ?>
<section class="breadcrumber">
    <div class="margin">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb d-flex">
                <li class="d-flex align-items-center breadcrumb-item"><a class="h5-min" href="<?php echo get_option('home'); ?>/">Главная</a></li>
                <li class="d-flex align-items-center breadcrumb-item"><a class="h5-min" href="<?php echo get_option('home'); ?>/catalog/">Каталог</a></li>
                <li class="d-flex align-items-center breadcrumb-item active h5-min" aria-current="page">Cерия Классик</li>
            </ol>
        </nav>
    </div>
</section>
<section class="preview">
    <div class="margin">
        <div class="d-flex justify-content-between align-items-center preview-content">
            <div class="d-flex flex-column">
                <h1>Cерия Классик</h1>
                    <h4>Металлические каркасы столов и стульев изготавливаются
                    из профильной трубы и покрываются ударопрочной
                    порошково-полимерной краской с шагреневой структурой.
                    К опорам крепятся крючки для портфелей и сумок.
                    На открытых торцах труб устанавливаются заглушки
                    из ударопрочного полистирола.</h4>
            </div>
            <div class="img-preview">
                <img alt="GMC" src="<?php echo get_template_directory_uri() ?>/assets/images/preview.jpg">
            </div>
        </div>
    </div>
</section>
<?php get_template_part( 'filters' );  ?>
<section class="slider-card">
    <div class="margin">
        <div class="d-flex flex-column category">
            <h2 class="h2-extra">Столы ученические - двухместные</h2>
            <div class="slider-goods">
<!--                <div class="swiper-button-prev"></div>-->
                <div class="swiper-container">
                    <div class="d-flex swiper-wrapper">
                        <div class="swiper-slide active-red-slide">
                            <div class="img-active">
                            <img alt="GMC" src="<?php echo get_template_directory_uri() ?>/assets/images/goods.jpg">
                            </div>
                            <p>Регелировка высоты,
                                прямые угла
                                без полки</p>
                        </div>
                        <div class="swiper-slide">
                            <div class="img-active">
                                <img alt="GMC" src="<?php echo get_template_directory_uri() ?>/assets/images/goods.jpg">
                            </div>
                            <p>Нерегулируемый,
                                прямые углы
                                без полки</p>
                        </div>
                        <div class="swiper-slide">
                            <div class="img-active">
                                <img alt="GMC" src="<?php echo get_template_directory_uri() ?>/assets/images/goods.jpg">
                            </div>
                            <p>Нерегулируемый, закругленные углы
                                без полки</p>
                        </div>
                        <div class="swiper-slide">
                            <div class="img-active">
                                <img alt="GMC" src="<?php echo get_template_directory_uri() ?>/assets/images/goods.jpg">
                            </div>
                            <p>Регулировка высоты, закругленные углы
                                без полки</p>
                        </div>
                        <div class="swiper-slide">
                            <div class="img-active">
                                <img alt="GMC" src="<?php echo get_template_directory_uri() ?>/assets/images/goods.jpg">
                            </div>
                            <p>Регулировка высоты,
                                прмые углы
                                + предметная полка</p>
                        </div>
                        <div class="swiper-slide">
                            <div class="img-active">
                                <img alt="GMC" src="<?php echo get_template_directory_uri() ?>/assets/images/goods.jpg">
                            </div>
                            <p>Регулировка высоты,
                                закругленные углы
                                + предметная полка</p>
                        </div>
                        <div class="swiper-slide">
                            <div class="img-active">
                                <img alt="GMC" src="<?php echo get_template_directory_uri() ?>/assets/images/goods.jpg">
                            </div>
                            <p>7</p>
                        </div>
                        <div class="swiper-slide">
                            <div class="img-active">
                                <img alt="GMC" src="<?php echo get_template_directory_uri() ?>/assets/images/goods.jpg">
                            </div>
                            <p>8</p>
                        </div>
                        <div class="swiper-slide">
                            <div class="img-active">
                                <img alt="GMC" src="<?php echo get_template_directory_uri() ?>/assets/images/goods.jpg">
                            </div>
                            <p>9</p>
                        </div>
                    </div>
                    <div class="swiper-scrollbar"></div>
                </div>
<!--                <div class="swiper-button-next"></div>-->
            </div>
            <div class="d-flex subcategory">
                    <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img alt="GMC" src="<?php echo get_template_directory_uri() ?>/assets/images/subslider.jpg"></div>
                        <div class="swiper-slide"><img alt="GMC" src="<?php echo get_template_directory_uri() ?>/assets/images/subslider.jpg"></div>
                        <div class="swiper-slide"><img alt="GMC" src="<?php echo get_template_directory_uri() ?>/assets/images/subslider.jpg"></div>
                        <div class="swiper-slide"><img alt="GMC" src="<?php echo get_template_directory_uri() ?>/assets/images/subslider.jpg"></div>
                        <div class="swiper-slide"><img alt="GMC" src="<?php echo get_template_directory_uri() ?>/assets/images/subslider.jpg"></div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <div class="d-flex flex-column subcategory-options">
                    <h3>Стол ученический двухместный (нерегулируемый) с закругленными углами (R)</h3>
                    <div class="d-flex flex-column ">
                    <h4>Металлические каркасы столов и стульев изготавливаются из
                        профильной трубы и покрываются ударопрочной порошково-
                        полимерной краской с шагреневой структурой.</h4>
                        <div class="d-flex flex-column align-items-center akar">
                            <div>
                                <img alt="GMC" src="<?php echo get_template_directory_uri() ?>/assets/images/akar.svg">
                            </div>
                            <p>паспорт изделия</p>
                        </div>
                    </div>
                    <div class="d-flex color-subcategory">
                        <div><label class="color-sub" id="variable">
                                <input value="дуб молочный" type="radio" name="color-sub" checked="checked">
                                <span class="h4-semibold color-sub-txt">дуб молочный</span></label>
                        </div>
                        <div><label class="color-sub" id="variable">
                                <input value="светлый бук" type="radio" name="color-sub">
                                <span class="h4-semibold color-sub-txt">светлый бук</span></label>
                        </div>
                    </div>
                    <div class="d-flex flex-column tabs-option">
                            <div class="row">
                                <div class="col">Размер (ШхГхВ), мм:</div>
                                <div class="col">Нуменклатура:</div>
                                <div class="col">Кол-во:</div>
                                <div class="col">Цена:</div>
                                <div class="col"></div>
                            </div>
                            <div class="row">
                                <div class="col">600 х 500 х 520</div>
                                <div class="col">СТ1.2R</div>
                                <div class="d-flex align-items-center justify-content-center col">
                                    <button class="d-flex align-items-center justify-content-center button-minus" id="button-minus"><img alt="GMC" src="<?php echo get_template_directory_uri() ?>/assets/images/buttonminus.svg"></button>
                                    <p class="d-flex justify-content-center align-items-center quantity" id="quantity">0</p>
                                    <button class="d-flex align-items-center justify-content-center button-plus" id="button-plus"><img alt="GMC" src="<?php echo get_template_directory_uri() ?>/assets/images/buttonplus.svg"></button>
                                </div>
                                <div class="col">218.00 р.</div>
                                <div class="col">

                                    <label class="d-flex position-relative">
                                        <input type="checkbox">
                                        <span>В корзину</span>
                                        <span>В корзине</span>
                                    </label>
                                </div>
                            </div>
                        <div class="row">
                            <div class="col">600 х 500 х 520</div>
                            <div class="col">СТ1.2R</div>
                            <div class="d-flex align-items-center justify-content-center col">
                                <button class="d-flex align-items-center justify-content-center button-minus" id="button-minus"><img alt="GMC" src="<?php echo get_template_directory_uri() ?>/assets/images/buttonminus.svg"></button>
                                <p class="d-flex justify-content-center align-items-center quantity" id="quantity">0</p>
                                <button class="d-flex align-items-center justify-content-center button-plus" id="button-plus"><img alt="GMC" src="<?php echo get_template_directory_uri() ?>/assets/images/buttonplus.svg"></button>
                            </div>
                            <div class="col">218.00 р.</div>
                            <div class="col">
                                <label class="d-flex position-relative">
                                    <input type="checkbox">
                                    <span>В корзину</span>
                                    <span>В корзине</span>
                                </label>
                            </div>
                        </div>

                    </div>
                    <div class="swipe-tabs">
                        <img alt="GMC" src="<?php echo get_template_directory_uri() ?>/assets/images/swipertabs.svg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal-swiper">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><img src="<?php echo get_template_directory_uri() ?>/assets/images/crossmodal.svg"></button>
    <div class="margin-active">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide swiper-open-modal"><img alt="GMC" src="<?php echo get_template_directory_uri() ?>/assets/images/subslider.jpg"></div>
                <div class="swiper-slide swiper-open-modal"><img alt="GMC" src="<?php echo get_template_directory_uri() ?>/assets/images/subslider.jpg"></div>
                <div class="swiper-slide swiper-open-modal"><img alt="GMC" src="<?php echo get_template_directory_uri() ?>/assets/images/subslider.jpg"></div>
                <div class="swiper-slide swiper-open-modal"><img alt="GMC" src="<?php echo get_template_directory_uri() ?>/assets/images/subslider.jpg"></div>
                <div class="swiper-slide swiper-open-modal"><img alt="GMC" src="<?php echo get_template_directory_uri() ?>/assets/images/subslider.jpg"></div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</div>
<?php get_template_part( 'other-collections' );  ?>
<?php get_footer(); ?>
