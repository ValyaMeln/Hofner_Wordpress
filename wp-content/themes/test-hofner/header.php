<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <!--    <link rel="apple-touch-icon" sizes="152x152" href="-->
    <?php //bloginfo('template_url'); ?><!--/app/img/favicon-h.png">-->
    <!--    <link rel="icon" type="image/png" sizes="32x32" href="-->
    <?php //bloginfo('template_url'); ?><!--/app/img/favicon-h.png">-->
    <!--    <link rel="icon" type="image/png" sizes="16x16" href="-->
    <?php //bloginfo('template_url'); ?><!--/app/img/favicon-h.png">-->
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hofner</title>


    <?php wp_head(); ?>

    <!--    <link rel="preconnect" href="https://fonts.googleapis.com">-->
    <!--    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>-->
    <!--    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans:wght@400;500;600;700&display=swap"-->
    <!--          rel="stylesheet">-->
    <!--    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">-->
    <!---->
    <!--    <link rel="stylesheet" href="css/main.min.css">-->
</head>
<body>

<header class="header">

    <div class="header__information">
        <div class="container d-flex justify-content-between">
            <div class="d-flex align-items-center">
                <div class="header__information_workSchedule">
                    <?php the_field('work-schedule');?>
                </div>
                <a class="header_information_phone" href="tel:<?php the_field('phone-number');?>"><?php the_field('phone');?></a>
            </div>
            <div class="d-flex">
                <div class="header__selects">
                    <div class="header__select_language">
                        <button class="header__select_btn_language"><?php the_field('language');?></button>
                        <ul class="list_languages">
                            <li class="list_languages_item">УКРАЇНСЬКА</li>
                            <li class="list_languages_item">РУССКИЙ</li>
                            <li class="list_languages_item">ENGlish</li>
                        </ul>
                    </div>
                </div>
                <div class="header__selects">
                    <div class="header__select_currency">
                        <button class="header__select_btn_currency"><?php the_field('currency');?></button>
                        <ul class="list_currency">
                            <li class="list_languages_item">Uah (₴)</li>
                            <li class="list_languages_item">eur (€)</li>
                            <li class="list_languages_item">usd ($)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header__menu">
        <div class=" header__menu_container container">
            <ul class="header__menu_buttons_tablet ">
                <li class="header__menu_button_left _icon-burger-menu " id="open_burger_menu_btn">
                </li>
                <li class="header__menu_button_left _icon-search">
                </li>

            </ul>
            <a href="#" class="header__menu_logo">
                <img src="<?php bloginfo('template_url'); ?>/app/img/headerMenu/logo.png" alt="logo">
            </a>
            <div class="header__menu_logo_top">
                <a href="#">
                    <!--                    <img class="header__menu_logo" src="images/headerMenu/logo_top.png" alt="logo">-->
                    <img src="<?php bloginfo('template_url'); ?>/app/img/headerMenu/logo_bottom.png" alt="logo">
                </a>
            </div>
            <ul class="header__menu_body header__menu_font">
                <?php wp_nav_menu(array(
                    'theme_location' => 'top',
                    'container' => false,
                    'items_wrap' => '<ul class="%2$s">%3$s</ul>',
                    'menu_class' => 'header__menu_body header__menu_font'
                )); ?>
                <div class="header__dropdown_menu row">
                    <div class=" col-lg-12 col-xl-6">
                        <ul class=" header__dropdown_menu_list paragraph2">
                            <li class="header__dropdown-menu-item">
                                Підсумки для магазинів
                                <ul class="header__dropdown-menu_results_shops">
                                    <li class="header__dropdown-menu_results_shops_item">Для пістолетних
                                        магазинів
                                    </li>
                                    <li class="header__dropdown-menu_results_shops_item">Для автоматних
                                        магазинів
                                    </li>
                                </ul>
                            </li>
                            <li class="header__dropdown-menu-item">
                                Для гранат
                            </li>
                            <li class="header__dropdown-menu-item">
                                Для рацій
                            </li>
                            <li class="header__dropdown-menu-item">
                                Універсальні
                            </li>

                        </ul>
                    </div>
                    <div class="col-lg-12 col-xl-6">
                        <ul class="paragraph2">
                            <li class="header__dropdown-menu-item">
                                Утилітарні
                            </li>
                            <li class="header__dropdown-menu-item">
                                Пістолетні кобури
                            </li>
                            <li class="header__dropdown-menu-item">
                                Чохол короба ПКМ
                            </li>
                            <li class="header__dropdown-menu-item">
                                Для гідросистеми
                            </li>
                            <li class="header__dropdown-menu-item">
                                Сумка-сухарка
                            </li>
                            <li class="header__dropdown-menu-item">
                                Сумка для скиду магазинів
                            </li>
                        </ul>
                    </div>
            </ul>
            </ul>
            <!--                        </nav>-->
            <ul class="header__menu_buttons d-flex align-items-center">
                <li class="header__menu_button _icon-search">
                </li>
                <li class="header__menu_button _icon-icon-user">
                </li>
                <li class="header__menu_button ">
                    <div class="_icon-white-frame-heart _icon-oval-orange">
                        <div class="number_like">4</div>
                    </div>
                </li>
                <li class="header__menu_button ">
                    <div class="_icon-basket _icon-oval-orange">
                        <div class="number_elections">28</div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="header__menu_popup_content">
        <ul class="header__menu_popup_list d-flex align-items-center justify-content-between">
            <li class="header__menu_popup_item header__select_language">
                <button class="header__select_btn_language">УКР</button>
                <ul class="list_languages">
                    <li class="list_languages_item">УКРАЇНСЬКА</li>
                    <li class="list_languages_item">РУССКИЙ</li>
                    <li class="list_languages_item">ENGlish</li>
                </ul>
            </li>
            <li class="header__menu_popup_item header__select_currency">
                <button class="header__select_btn_currency">uah</button>
                <ul class="list_currency">
                    <li class="list_languages_item">Uah (₴)</li>
                    <li class="list_languages_item">eur (€)</li>
                    <li class="list_languages_item">usd ($)</li>
                </ul>
            </li>
            <li class="header__menu_popup_item ">
                <a href="#" class="header__menu_popup_item_user _icon-icon-user"></a>
            </li>
            <li class="header__menu_popup_item header__menu_popup_item_close _icon-close" id="close_burger_menu_btn">
            </li>
        </ul>
        <ul class="header__menu_popup_tablet">
            <li class="header__menu_popup_tablet_link_wrapper">
                <a href="#" class="header__menu_popup_tablet_link header__menu_font">Одяг</a>
            </li>
            <li class="header__menu_popup_tablet_link_wrapper">
                <a href="#" class="header__menu_popup_tablet_link header__menu_font">Медицина</a>
            </li>
            <li class="header__menu_popup_tablet_link_wrapper">
                <div>
                    <a href="#" class="header__menu_popup_tablet_link header__menu_font">Підсумки</a>
                </div>
                <ul class=" header__dropdown_list paragraph2">
                    <li class="header__dropdown-menu-item">
                        Підсумки для магазинів
                        <ul class="header__dropdown-menu_results_shops">
                            <li class="header__dropdown-menu_results_shops_item">Для пістолетних
                                магазинів
                            </li>
                            <li class="header__dropdown-menu_results_shops_item">Для автоматних
                                магазинів
                            </li>
                        </ul>
                    </li>
                    <li class="header__dropdown-menu-item">
                        Для гранат
                    </li>
                    <li class="header__dropdown-menu-item">
                        Для рацій
                    </li>
                    <li class="header__dropdown-menu-item">
                        Універсальні
                    </li>
                </ul>
                <ul class="paragraph2">
                    <li class="header__dropdown-menu-item">
                        Утилітарні
                    </li>
                    <li class="header__dropdown-menu-item">
                        Пістолетні кобури
                    </li>
                    <li class="header__dropdown-menu-item">
                        Чохол короба ПКМ
                    </li>
                    <li class="header__dropdown-menu-item">
                        Для гідросистеми
                    </li>
                    <li class="header__dropdown-menu-item">
                        Сумка-сухарка
                    </li>
                    <li class="header__dropdown-menu-item">
                        Сумка для скиду магазинів
                    </li>
                </ul>
            </li>
            <li class="header__menu_popup_tablet_link_wrapper">
                <a href="#" class="header__menu_popup_tablet_link header__menu_font">Рюкзаки</a></li>
            <li class="header__menu_popup_tablet_link_wrapper">
                <a href="#" class="header__menu_popup_tablet_link header__menu_font">Розгрузки</a>
            </li>
        </ul>
        <ul class="header__menu_popup_tablet_link_info paragraph2">
            <li class="header__dropdown-menu-item">
                Розмірна сітка
            </li>
            <li class="header__dropdown-menu-item">
                Матеріали
            </li>
            <li class="header__dropdown-menu-item">
                Доставка та оплата
            </li>
            <li class="header__dropdown-menu-item">
                Обмін та повернення
            </li>
            <li class="header__dropdown-menu-item">
                Контакти
            </li>
            <li class="header__dropdown-menu-item">
                Блог
            </li>
            <li class="header__dropdown-menu-item">
                Про нас
            </li>
            <li class="header__dropdown-menu-item">
                Публічна оферта
            </li>
            <li class="header__dropdown-menu-item">
                Політика конфіденційності
            </li>
            <li class="header__dropdown-menu-item">
                Правила використання файлів Cookie
            </li>
        </ul>
        <ul class="header__menu_popup_tablet_link_info paragraph2">
            <li class="footer__menu_item_variant paragraph2">
                <div class="footer__menu_item_phone d-flex ">
                    <div class="_icon-icon-phone"></div>
                    <a class="footer__menu_link link_tel" href="tel:+380968120013">+38 (096) 812 00 13</a>
                </div>
                <div class="footer__menu_item_text">Пн–Сб, 09:00–19:00</div>
            </li>
            <li class="footer__menu_item_variant paragraph2">
                <div class="footer__menu_item_phone d-flex ">
                    <div class="_icon-icon-mail"></div>
                    <a class=" footer__menu_link link_eml">hofner.ukraine@gmail.com</a>
                </div>
                <div class="footer__menu_item_text">Електронна адреса</div>
            </li>
        </ul>
    </div>

</header>