<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">

    <title>

    </title>

    <!-- Meta -->
    <!-- Page Description Here -->
    <meta name="title" content=""/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <!-- Disable screen scaling-->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, user-scalable=0">

<!--    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />-->
<!--    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />-->

<!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">-->
<!--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>-->

    <?php wp_head(); ?>

</head>

<body>

<header>
    <div class="margin">
        <div class="d-flex justify-content-between align-items-center nav">
            <div class="d-flex align-items-center">
            <a  class="logo" href="<?php echo get_option('home'); ?>/"><img alt="GMC" src="<?php echo get_template_directory_uri() ?>/assets/images/logo_header.svg"></a>
            <nav class="minnav">
                <ul class="d-flex justify-content-between">
                <li><a href="<?php echo get_option('home'); ?>/about/">О КОМПАНИИ</a></li>
                <li><a href="<?php echo get_option('home'); ?>/catalog/">КАТАЛОГ</a></li>
                <li><a href="<?php echo get_option('home'); ?>/contacts/">КОНТАКТЫ</a></li>
                </ul>
            </nav>
            </div>
            <div class="d-flex justify-content-between align-items-center tel-mail">
                <div class="d-flex tel">
                    <h5><a href="tel:+375296969399">+375 29 696-93-99</a></h5>
                    <h5><a href="tel:+375296840030">+375 29 684-00-30</a></h5>
                </div>
                <div class="d-flex justify-content-between viber-telegram">
                    <div><a class="d-flex" href="/"><img alt="viber" src="<?php echo get_template_directory_uri() ?>/assets/images/viber.svg"></a></div>
                    <div><a class="d-flex" href="/"><img alt="telegram" src="<?php echo get_template_directory_uri() ?>/assets/images/telegram.svg"></a></div>
                </div>
                <div class="mail"><a href="mailto:"><h5 class="h5-semibold">info@lgmc.by</h5></a></div>
                <div class="d-flex justify-content-between searh-basket">
                    <div>
                        <form class="form-search" action="http://google.com/search" target="_blank">
                            <input type="search" name="q" placeholder="Поиск...">
                            <input type="hidden" name="as_sitesearch" value="gmc.by">
                            <button type="submit"></button>
                        </form>
<!--                        <a href="/"><img alt="Search" src="--><?php //echo get_template_directory_uri() ?><!--/assets/images/search.svg"></a>-->
                    </div>
                    <div><a class="d-flex" href="<?php echo get_option('home'); ?>/basket/"><img alt="basket" src="<?php echo get_template_directory_uri() ?>/assets/images/basket.svg"></a></div>
                    <div class="menu-button"><img src="<?php echo get_template_directory_uri() ?>/assets/images/burgermenu.svg"></div>
                    <div class="menu-cross"><img src="<?php echo get_template_directory_uri() ?>/assets/images/cross.svg"></div>
                </div>
            </div>


        </div>

    </div>
</header>
<div class="mob-nav">
    <div class="margin">
        <div class="d-flex flex-column align-items-center">
            <form class="form-search" action="http://google.com/search" target="_blank">
                <input type="search" name="q" placeholder="Поиск...">
                <input type="hidden" name="as_sitesearch" value="gmc.by">
                <button type="submit"></button>
            </form>
            <nav class="minnav">
                <ul class="d-flex justify-content-between">
                    <li><a href="<?php echo get_option('home'); ?>/about/">О КОМПАНИИ</a></li>
                    <li><a href="<?php echo get_option('home'); ?>/catalog/">КАТАЛОГ</a></li>
                    <li><a href="<?php echo get_option('home'); ?>/contacts/">КОНТАКТЫ</a></li>
                </ul>
            </nav>
            <div class="d-flex justify-content-between align-items-center tel-mail">
                <div class="d-flex tel">
                    <h3><a href="tel:+375296969399">+375 29 696-93-99</a></h3>
                    <h3><a href="tel:+375296840030">+375 29 684-00-30</a></h3>
                </div>
                <div class="mail"><a href="mailto:"><h3 class="h5-semibold">info@lgmc.by</h3></a></div>
                <div class="d-flex justify-content-between viber-telegram">
                    <div><a class="d-flex" href="/"><img alt="viber" src="<?php echo get_template_directory_uri() ?>/assets/images/viber.svg"></a></div>
                    <div><a class="d-flex" href="/"><img alt="telegram" src="<?php echo get_template_directory_uri() ?>/assets/images/telegram.svg"></a></div>
                </div>

            </div>

        </div>
    </div>
</div>
