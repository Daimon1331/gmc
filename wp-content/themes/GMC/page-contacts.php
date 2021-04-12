<?php
/*
Template Name: Contacts
*/
?>
<?php get_header(); ?>
<section class="breadcrumber">
    <div class="margin">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb d-flex">
                <li class="d-flex align-items-center breadcrumb-item"><a class="h5-min" href="<?php echo get_option('home'); ?>/">Главная</a></li>
                <li class="d-flex align-items-center breadcrumb-item active h5-min" aria-current="page">Контакты</li>
            </ol>
        </nav>
    </div>
</section>
<section class="bigform-contacts">
    <div class="margin">
        <div class="d-flex bigflexform">
            <div class="d-flex flex-column osnovsix">
                <div class="d-flex flex-column flexbuy">
                    <h1>Свяжитесь с нами!</h1>
                    <h4>Заполните форму обратной связи, и мы вышлем
вам каталог и прайс-лист в ближайшее время!</h4>
                </div>
                <form action="/" class="d-flex flex-column flexform" method="post">
                    <div class="d-flex justify-content-between form-column">
                        <div class="d-flex flex-column w-49">
                            <input class="entryfield"  type="text" id="company" placeholder="Наименование компании" name="company">
                            <input class="entryfield" type="text" id="name" placeholder="Имя*" name="name" required>

                        </div>
                        <div class="d-flex flex-column w-49">
                            <input class="entryfield input-mask__mail" type="text" id="mail" placeholder="Email*" name="mail" required>
                            <input class="entryfield input-mask__phone" pattern="\+375\s?[\(]{0,1}(25|29|33|44)[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}" title="+375 (25/29/33/44) XXX-XX-XX" type="text" id="phone" placeholder="Телефон*" name="phone" required>
                            <!--                            <textarea class="entryfield" type="text" id="comment" placeholder="Ваш вопрос..." name="comment"></textarea>-->
                        </div>
                    </div>
                    <button type="submit" class="button-form1">Отправить</button>
                </form>
            </div>
            <!--                <div class="gradient"></div>-->
            <div class="contacts">
                <div class="d-flex flex-column phoneaddressemail">
                    <h3>ООО «Глубокский мебельный центр»</h3>
                    <div class="phone">
                        <div class="conttxt">
                            <h2>Телефоны:</h2>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex flex-column">
                                <div class="d-flex mb-2"><h4 class="h4-semibold">Отдел продаж:</h4><h4>   <a href="tel:+375296969399">+375 29 696-93-99</a></h4></h4></div>
                                <div class="d-flex"><h4 class="h4-semibold">Бухгалтерия:</h4><h4>   <a href="tel:+375296840030">+375 29 684-00-30</a></h4></div>
                                </div>
                                <div class="d-flex flex-column">
                                    <div class="d-flex mb-2"><h4 class="h4-semibold">Тел/факс:</h4><h4>   <a href="tel:80215654881">8 021 56-54-881</a></h4></h4></div>
                                    <div class="d-flex"><h4 class="h4-semibold">Логистика:</h4><h4>   <a href="tel:+375445339265">+375 44 533-92-65</a></h4></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="address">
                        <div class="conttxt">
                            <h2>Адрес:</h2>
                            <h4>211790 Витебская обл., Глубокский р-н, Озерецкий
с/с,  д. Обруб Березвечский, ул. Глубокская, 1а</h4>
                        </div>
                    </div>
                    <div class="email">
                        <div class="conttxt">
                            <h2>Email:</h2>
                            <div class="d-flex justify-content-between">
                            <h4><a href="mailto:info@1gmc.by">info@1gmc.by</a></h4>
                                <div class="d-flex tiv">
                                    <h4 class="h4-semibold"><a href="/">Telegram</a></h4>
                                    <h4 class="h4-semibold"><a href="/">Instagram</a></h4>
                                    <h4 class="h4-semibold"><a href="/">Viber</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<section class="map-contacts">
    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ae96afce5c4d95eb01171f4c988a656b7997a2ad856c736fb70db767102928075&amp;source=constructor" width="100%" height="619" frameborder="0"></iframe>
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
