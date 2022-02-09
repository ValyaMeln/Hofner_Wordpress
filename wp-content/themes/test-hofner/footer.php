<?php the_content (); ?>
<footer class="footer" id="footer">
    <div class="footer__img">
        <img class="footer__img_bg" src="<?php bloginfo('template_url'); ?>/app/img/footer/footer_img.png"
             alt="footer image"/>
        <div class="footer__container container">
            <a class="footer__btn_go_up" href="#"><img
                        src="<?php bloginfo('template_url'); ?>/app/img/footer/go_up-button.png"
                        alt="go up button"/></a>
        </div>
    </div>
    <div class="footer__menu">
        <div class="footer__container container d-flex justify-content-between">
            <ul class="footer__menu_wrapper d-flex justify-content-between">
                <li class="footer__menu_item">
                    <ul>
                        <li class="footer__menu_item_title"><h4>Каталог товарів</h4></li>
                        <li class="footer__menu_catalog">
<!--                            <ul>-->

                                <?php wp_nav_menu(array(
                                    'theme_location' => 'bottom',
                                    'container' => false,
                                    'items_wrap' => '<ul class="%2$s">%3$s</ul>',
                                    'menu_class' => '',
                                )); ?>
<!--                                <li class="footer__menu_item_variant paragraph2">-->
<!--                                    <a class="footer__menu_link" href="#">Одяг</a>-->
<!--                                </li>-->
<!--                                <li class="footer__menu_item_variant paragraph2">-->
<!--                                    <a class="footer__menu_link" href="#">Медицина</a>-->
<!--                                </li>-->
<!--                                <li class="footer__menu_item_variant paragraph2">-->
<!--                                    <a class="footer__menu_link" href="#">Підсумки</a>-->
<!--                                </li>-->
<!--                                <li class="footer__menu_item_variant paragraph2">-->
<!--                                    <a class="footer__menu_link" href="#">Рюкзаки</a>-->
<!--                                </li>-->
<!--                                <li class="footer__menu_item_variant paragraph2">-->
<!--                                    <a class="footer__menu_link" href="#">Розгрузки</a>-->
<!--                                </li>-->
<!--                            </ul>-->
                        </li>
                    </ul>
                </li>
                <li class="footer__menu_item">
                    <ul>
                        <li class="footer__menu_item_title"><h4>Покупцям</h4></li>
                        <li class="footer__menu_catalog">
                            <ul>
                                <li class="footer__menu_item_variant paragraph2">
                                    <a class="footer__menu_link" href="#">Розмірна сітка</a>
                                </li>
                                <li class="footer__menu_item_variant paragraph2">
                                    <a class="footer__menu_link" href="#">Матеріали</a>
                                </li>
                                <li class="footer__menu_item_variant paragraph2">
                                    <a class="footer__menu_link" href="#">Доставка та оплата</a>
                                </li>
                                <li class="footer__menu_item_variant paragraph2">
                                    <a class="footer__menu_link" href="#">Обмін та повернення</a>
                                </li>
                                <li class="footer__menu_item_variant paragraph2">
                                    <a class="footer__menu_link" href="#">Контакти</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="footer__menu_item">
                    <ul>
                        <li class="footer__menu_item_title"><h4>Компанія</h4></li>
                        <li class="footer__menu_catalog">
                            <ul>
                                <li class="footer__menu_item_variant paragraph2">
                                    <a class="footer__menu_link" href="#">Блог</a>
                                </li>
                                <li class="footer__menu_item_variant paragraph2">
                                    <a class="footer__menu_link" href="#">Публічна оферта</a>
                                </li>
                                <li class="footer__menu_item_variant paragraph2">
                                    <a class="footer__menu_link" href="#">Політика конфіденційності</a>
                                </li>
                                <li class="footer__menu_item_variant paragraph2">
                                    <a class="footer__menu_link" href="#">Правила використання <br> файлів Cookie</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="footer__tel_email d-flex justify-content-between">
                <ul class="footer__contacts">
                    <li class="footer__menu_item_title"><h4>Контакти</h4></li>
                    <li class="footer__menu_item_variant paragraph2">
                        <div class="footer__menu_item_phone d-flex ">
                            <div class="_icon-icon-phone"></div>
                            <a class="footer__menu_link link_tel" href="tel:<?php the_field('phone-number');?>"><?php the_field('phone');?></a>
                        </div>
                        <div class="footer__menu_item_text"><?php the_field('work-schedule'); ?></div>
                    </li>
                    <li class="footer__menu_item_variant paragraph2">
                        <div class="footer__menu_item_phone d-flex ">
                            <div class="_icon-icon-mail"></div>
                            <a class=" footer__menu_link link_eml">hofner.ukraine@gmail.com</a>
                        </div>
                        <div class="footer__menu_item_text">Електронна адреса</div>
                    </li>
                </ul>
                <form class="footer__subscription">
                    <h4 class="footer__subscription_title">Підписка на новини та акції</h4>
                    <?php echo do_shortcode('[contact-form-7 id="57" title="Контактна форма"]'); ?>

                </form>
            </div>
            <a class="footer__btn_go_up_small" href="#">
                <svg class="footer__go_up_small">
                    <use xlink:href="<?php bloginfo('template_url'); ?>/app/img/sprite.svg#go_up-btn_small"></use>
                </svg>
            </a>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="footer__container container d-flex justify-content-between align-items-center">
<!--            <a href="#" class="footer__bottom_logo">-->
<!--                <img src="--><?php //bloginfo('template_url'); ?><!--/app/img/headerMenu/logo.png" alt="logo footer"/>-->
<!--            </a>-->
            <a href="#" class="footer__bottom_logo">
                <?php
                $logo_img = '';
                if ($custom_logo_id = get_theme_mod('custom_logo')) {
                    $logo_img = wp_get_attachment_image($custom_logo_id, 'full', false, array(
                        'class' => '',
                        'itemprop' => 'logo',
                    ));
                }
                echo $logo_img;
                ?>
            </a>
            <div class="footer__bottom_cardsAndSocial d-flex align-items-center">
                <div class="footer__bottom_bank_cards d-flex">
                    <!--                    <li class="footer__bottom_bank_card">-->
                    <svg class="footer__bottom_bank_card">
                        <use xlink:href="<?php bloginfo('template_url'); ?>/app/img/sprite.svg#icon-visa"></use>
                    </svg>

                    <!--                    </li>-->
                    <!--                    <li class="footer__bottom_bank_card">-->
                    <svg class="footer__bottom_bank_card">
                        <use xlink:href="<?php bloginfo('template_url'); ?>/app/img/sprite.svg#icon-mastercard"></use>
                    </svg>

                    <!--                    </li>-->
                    </ul>
                </div>
                <div class="footer__bottom_cardsAndSocial d-flex align-items-center">
                    <ul class="footer__bottom_socials d-flex">
                        <li class="footer__bottom_social_item">
                            <a href="<?php the_field('facebook-link');?>" class="footer__bottom_social_link _icon-facebook"></a>
                        </li>
                        <li class="footer__bottom_social_item">
                            <a href="<?php the_field('instagram-link');?>" class="footer__bottom_social_link _icon-instagram"></a>
                        </li>
                        <li class="footer__bottom_social_item">
                            <a href="<?php the_field('youtube-link');?>" class="footer__bottom_social_link _icon-youtube"></a>
                        </li>
                    </ul>
                </div>
                <div class="footer__bottom_business">
                    <svg class="footer__bottom_business_icon">
                        <use xlink:href="<?php bloginfo('template_url'); ?>/app/img/sprite.svg#icon-wss"></use>
                    </svg>
                    <p class="footer__bottom_business_text">Quality Business Solutions</p>
                </div>
            </div>
        </div>
</footer>

<?php wp_footer(); ?>


</body>
</html>