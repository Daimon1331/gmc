<?php
/*
Template Name: Basket
*/
?>
<?php get_header(); ?>
<section class="breadcrumber">
    <div class="margin">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb d-flex">
                <li class="d-flex align-items-center breadcrumb-item"><a class="h5-min" href="<?php echo get_option('home'); ?>/">Главная</a></li>
                <li class="d-flex align-items-center breadcrumb-item"><a class="h5-min" href="<?php echo get_option('home'); ?>/catalog/">Каталог</a></li>
                <li class="d-flex align-items-center breadcrumb-item active h5-min" aria-current="page">Корзина</li>
            </ol>
        </nav>
    </div>
</section>
<section class="basket">
    <div class="margin">
            <div class="d-flex flex-column">
                    <h1>Корзина</h1>
                <div class="d-flex justify-content-between total">
                    <h3>Оформить заказ</h3>
                    <h3>Итого: <span id="total-min" class="total-min"></span> BYN</h3>
                </div>
                <div class="d-flex flex-column">
                <div class="d-flex justify-content-between products-basket">
                    <div class="img-basket">
                        <img alt="GMC" src="<?php echo get_template_directory_uri() ?>/assets/images/imgbasket.jpg"></div>
                    <div class="d-flex flex-column description">
                        <h3>Стол ученический двухместный (нерегулируемый)
                            с закругленными углами (R)</h3>
                        <h4>Размер (ШхГхВ), мм: 1200 х 500 х 700-820</h4>
                    </div>
                    <div class="d-flex justify-content-between mob-cost">
                    <div class="d-flex flex-column price">
                        <h3>Цена:</h3>
                        <h3>72.00</h3>
                    </div>
                    <div class="d-flex flex-column quantity-basket">
                        <h3>Количество:</h3>
                        <div class="d-flex align-items-center justify-content-center">
                            <button class="d-flex align-items-center justify-content-center button-minus"><img alt="GMC" src="<?php echo get_template_directory_uri() ?>/assets/images/buttonminus.svg"></button>
                            <p class="d-flex justify-content-center align-items-center quantity">0</p>
                            <button class="d-flex align-items-center justify-content-center button-plus"><img alt="GMC" src="<?php echo get_template_directory_uri() ?>/assets/images/buttonplus.svg"></button>
                        </div>
                    </div>
                    <div class="d-flex flex-column cost">
                        <h3>Стоимость</h3>
                        <h3>0</h3>
                    </div>
                    </div>
                    <div class="cross-basket">
                        <img alt="GMC" src="<?php echo get_template_directory_uri() ?>/assets/images/crossbasket.svg">
                    </div>
                </div>
                <div class="d-flex justify-content-between products-basket">
                    <div class="img-basket">
                        <img alt="GMC" src="<?php echo get_template_directory_uri() ?>/assets/images/imgbasket.jpg"></div>
                    <div class="d-flex flex-column description">
                        <h3>Стол ученический двухместный (нерегулируемый)
                            с закругленными углами (R)</h3>
                        <h4>Размер (ШхГхВ), мм: 1200 х 500 х 700-820</h4>
                    </div>
                    <div class="d-flex justify-content-between mob-cost">
                        <div class="d-flex flex-column price">
                            <h3>Цена:</h3>
                            <h3>72.00</h3>
                        </div>
                        <div class="d-flex flex-column quantity-basket">
                            <h3>Количество:</h3>
                            <div class="d-flex align-items-center justify-content-center">
                                <button class="d-flex align-items-center justify-content-center button-minus"><img alt="GMC" src="<?php echo get_template_directory_uri() ?>/assets/images/buttonminus.svg"></button>
                                <p class="d-flex justify-content-center align-items-center quantity">0</p>
                                <button class="d-flex align-items-center justify-content-center button-plus"><img alt="GMC" src="<?php echo get_template_directory_uri() ?>/assets/images/buttonplus.svg"></button>
                            </div>
                        </div>
                        <div class="d-flex flex-column cost">
                            <h3>Стоимость</h3>
                            <h3>0</h3>
                        </div>
                    </div>
                    <div class="cross-basket">
                        <img alt="GMC" src="<?php echo get_template_directory_uri() ?>/assets/images/crossbasket.svg">
                    </div>
                </div>
                </div>
                <div class="d-flex justify-content-between total">
                    <h3>Оформить заказ</h3>
                    <h3>Итого: <span id="total-min2" class="total-min"></span> BYN</h3>
                </div>
            </div>
    </div>
</section>
<section class="form-basket">
    <div class="margin">
        <div class="d-flex justify-content-between form-mob">
            <div class="d-flex flex-column back-form">
                <div class="d-flex flex-column flexbuy">
                    <h1>Оформление заказа</h1>
                    <h2>Заполните данные</h2>
                </div>
                <form action="/" class="d-flex flex-column flexform" method="post">
                    <div class="d-flex justify-content-between form-column">
                        <div class="d-flex flex-column w-49">
                            <input class="entryfield"  type="text" id="company" placeholder="Наименование компании" name="company">
                            <input class="entryfield" type="text" id="name" placeholder="Имя*" name="name" required>
                            <input class="entryfield input-mask__mail" type="text" id="mail" placeholder="Email*" name="mail" required>
                        </div>
                        <div class="d-flex flex-column w-49 mt-36">
                            <input class="entryfield input-mask__phone" pattern="\+375\s?[\(]{0,1}(25|29|33|44)[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}" title="+375 (25/29/33/44) XXX-XX-XX" type="text" id="phone" placeholder="Телефон*" name="phone" required>
                            <textarea class="entryfield" rows="1" id="comment" name="comment" placeholder="Комментарии"></textarea>
                            <div class="d-flex requisites">
                            <div>
                                <img alt="GMC" src="<?php echo get_template_directory_uri() ?>/assets/images/clip.svg"></div>
                            <h4>Прикрепить реквизиты</h4>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="button-form2">Отправить</button>
                </form>
            </div>
            <div class="d-flex contacts">
                <div class="d-flex align-items-center justify-content-center flex-column phoneemail">
                    <h1>Есть вопросы?</h1>
                    <div class="phone">
                        <div class="conttxt">
                            <h3>Телефон:</h3>
                            <h4><a href="tel:+375296840030">+375 29 684-00-30</a></h4>
                            <h4><a href="tel:+375296969399">+375 29 696-93-99</a></h4>
                        </div>
                    </div>
                    <div class="email">
                        <div class="conttxt">
                            <h3>Email:</h3>
                            <h4><a href="mailto:info@1gmc.by">info@1gmc.by</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    jQuery(function($) {
        var phone = document.getElementById("phone");
        var mail = document.getElementById("mail");
        var name = document.getElementById("name");

        $('.input-mask__phone').inputmask('+375 (99) 999-99-99');
        $('.input-mask__mail').inputmask({ alias: "email"});


        phone.addEventListener("keyup", function (event) {
            console.log(phone.value);
            console.log(mail.value);
            if (phone.value.match(/\+375\s?[\(]{0,1}(25|29|33|44)[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}/)) {
                $("#phone").addClass("chek-valid");
                $("#phone").removeClass("chek-invalid");
            } else {
                $("#phone").addClass("chek-invalid");
                $("#phone").removeClass("chek-valid");
            }
            if (phone.value === "") {
                $("#phone").removeClass("chek-valid");
                $("#phone").removeClass("chek-invalid");
            }
        });
        mail.addEventListener("keyup", function (event) {
            console.log(mail.value);
            if (mail.value.match(/^[\w-\.]+@[\w-]+\.[a-z]{2,4}$/)) {
                $("#mail").addClass("chek-valid");
                $("#mail").removeClass("chek-invalid");
            } else {
                $("#mail").addClass("chek-invalid");
                $("#mail").removeClass("chek-valid");
            }
            if (mail.value === "") {
                $("#mail").removeClass("chek-valid");
                $("#mail").removeClass("chek-invalid");
            }
        });
        name.addEventListener("keyup", function (event) {
            console.log(name.value);
            if (name.value === "") {
                $("#name").removeClass("chek-valid");
                $("#name").removeClass("chek-invalid");
            } else {
                $("#name").addClass("chek-valid");
            }
        });
    });
</script>
<?php get_footer(); ?>
