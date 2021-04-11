<?php get_header(); ?>
<section class="banner">
    <div class="box-banner">
        <div class="d-flex justify-content-end margin">
        <div class="d-flex flex-column block-txt">
            <h1>Глубокский
                мебельный центр</h1>
            <h4>Мы знаем потребности наших клиентов и стремимся обеспечить их качественной, современной и удобной мебелью</h4>
            <div><a class="h4-semibold" href="<?php echo get_option('home'); ?>/catalog/">Перейти в каталог</a></div>
            </div>
        </div>
    </div>
</section>
<?php get_template_part( 'catalog' );  ?>
<section class="pride">
    <div class="margin">
        <div class="d-flex flex-column">
            <h1>Мы гордимся тем,
что производим</h1>
            <div class="d-flex justify-content-between pride-desc">
                <h4>ООО «Глубокский мебельный центр» – белорусский производитель и поставщик ученической, дошкольной
                    и бытовой мебели. У нас есть отличный опыт участия в тендерах, государственных закупках, а также опыт
                    сотрудничества с крупными частными компаниями.
                    <br>
                    <br>Мы превосходно знаем потребности наших клиентов
                    и стремимся обеспечить их качественной, современной и удобной мебелью.</h4>
                <h4>Наличие собственного производства позволяет нам вести гибкую политику формирования цен,
                    что позволяет значительно снизить затраты клиентов.
                    <br>
                    <br>Мы сами производим полный цикл изготовления мебели,
                    что позволяет  осуществлять поэтапный контроль над выполнением заказа, а также дает возможность
                    оперативно реагировать на возникновение любых непредвиденных ситуаций.</h4>
            </div>
            <div class="d-flex justify-content-between statistic">
                <div class="d-flex flex-column">
                   <p class="ultra">600м²</p>
                    <h5 class="h5-semibold">производственных
помещений</h5>
                </div>
                <div class="d-flex flex-column">
                    <p class="ultra">400м²</p>
                    <h5 class="h5-semibold">крытых складских
помещений</h5>
                </div>
                <div class="d-flex flex-column">
                    <p class="ultra">в 2021</p>
                    <h5 class="h5-semibold">склад хранения
сырья</h5>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bigform">
    <div class="margin">
            <div class="d-flex bigflexform">
                <div class="d-flex flex-column osnovsix">
                <div class="d-flex flex-column flexbuy">
                    <h2>Свяжитесь с нами!</h2>
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
                        <div class="address">
                            <div class="conttxt">
                                <h3>Адрес:</h3>
                                <h4>211790 Витебская обл., Глубокский
р-н, Озерецкий с/с,  д. Обруб
Березвечский, ул. Глубокская, 1а</h4>
                            </div>
                        </div>

                    </div>
                    <div class="d-flex tiv">
                        <h4 class="h4-semibold"><a href="/">Telegram</a></h4>
                        <h4 class="h4-semibold"><a href="/">Instagram</a></h4>
                        <h4 class="h4-semibold"><a href="/">Viber</a></h4>
                    </div>
                </div>
            </div>

    </div>
</section>
<?php //get_footer(); ?>

