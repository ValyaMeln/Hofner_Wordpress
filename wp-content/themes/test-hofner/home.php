<?php
/*
Template Name: home

*/
?>
<?php get_header(); ?>

    <section class="slider">
        <a href="#" class="slider__button_link">Переглянути новинки</a>
        <div id="carouselExampleControls" class="carouselExampleControls carousel slide" data-iterval="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100"
                         src="<?php bloginfo('template_url'); ?>/app/img/slider/hofner-banner1.png" alt="Первый слайд">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100"
                         src="<?php bloginfo('template_url'); ?>/app/img/slider/hofner-banner2.png" alt="Второй слайд">
                </div>
            </div>
            <div class="container">
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">

                    <!--                <div>-->
                    <svg class="slider__arrow">
                        <use xlink:href="<?php bloginfo('template_url'); ?>/app/img/sprite.svg#arrow-left"></use>
                    </svg>
                    <!--                                    <img src="<?php bloginfo('template_url'); ?>/app/img/slider/arrow-left.svg" alt="prev">-->
                    <!--                </div>-->
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <svg class="slider__arrow">
                        <use xlink:href="<?php bloginfo('template_url'); ?>/app/img/sprite.svg#arrow-right"></use>
                    </svg>

                    <!--                <div>-->
                    <!--                    <img src="<?php bloginfo('template_url'); ?>/app/img/slider/arrow-right.svg" alt="next">-->
                    <!--                </div>-->
                </a>
            </div>
        </div>
        <div id="carouselExampleControlsSmall" class="carouselExampleControlsSmall carousel slide" data-iterval="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <h2 class="carousel-inner_title">Спорядження
                        спецпідрозділів</h2>
                    <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/app/img/slider/banner1_small.png"
                         alt="Первый слайд">
                </div>
                <div class="carousel-item">
                    <h2 class="carousel-inner_title">матеріал високих технологій cor<span
                                class="carousel-inner_title_orange">dura</span></h2>
                    <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/app/img/slider/banner2_small.png"
                         alt="Второй слайд">
                </div>
            </div>
            <div class="container">
                <a class="carousel-control-prev" href="#carouselExampleControlsSmall" role="button" data-slide="prev">
                    <svg class="slider__arrow">
                        <use xlink:href="<?php bloginfo('template_url'); ?>/app/img/sprite.svg#arrow-left"></use>
                    </svg>
                    <!--
    <div>-->
                    <!--                    <img src="<?php bloginfo('template_url'); ?>/app/img/slider/arrow-left.svg" alt="prev">-->
                    <!--                </div>-->
                </a>
                <a class="carousel-control-next" href="#carouselExampleControlsSmall" role="button" data-slide="next">
                    <svg class="slider__arrow">
                        <use xlink:href="<?php bloginfo('template_url'); ?>/app/img/sprite.svg#arrow-right"></use>
                    </svg>
                    <!--                <div>-->
                    <!--                    <img src="<?php bloginfo('template_url'); ?>/app/img/slider/arrow-right.svg" alt="next">-->
                    <!--                </div>-->
                </a>
            </div>
        </div>
    </section>
    <section class="ourProducts">
        <div class="ourProducts__container container">
            <div class="ourProducts__product row">
                <div class="ourProducts__product_column col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                    <div class="ourProducts__product_item has_no_padding item">
                        <h2 class="ourProducts__title">Наші товари</h2>
                        <p class="ourProducts__product_text">
                            Ми ретельно контролюємо виготовлення кожної частини спорядження та відбираємо тільки кращі
                            матеріали
                        </p>
                    </div>
                </div>
                <div class="ourProducts__product_column col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                    <div class="ourProducts__product_item ourProducts__clothing item">
                        <h5 class="ourProducts__product_choose choose">Обирай</h5>
                        <h2 class="ourProducts__product_title">
                            Одяг
                        </h2>
                        <a class="ourProducts__product_all_goods _icon-Vector-3" href="#">Усі товари</a>
                    </div>
                </div>
                <div class="ourProducts__product_column col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                    <div class="ourProducts__product_item ourProducts__medicine item">
                        <h5 class="ourProducts__product_choose choose">Обирай</h5>
                        <h2 class="ourProducts__product_title">
                            Медицина
                        </h2>
                        <a class="ourProducts__product_all_goods _icon-Vector-3" href="#">Усі товари</a>
                    </div>
                </div>
                <div class="ourProducts__product_column col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                    <div class="ourProducts__product_item ourProducts__results item">
                        <h5 class="ourProducts__product_choose choose">Обирай</h5>
                        <h2 class="ourProducts__product_title">
                            Підсумки
                        </h2>
                        <a class="ourProducts__product_all_goods _icon-Vector-3" href="#">Усі товари</a>
                    </div>
                </div>
                <div class="ourProducts__product_column col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                    <div class="ourProducts__product_item ourProducts__backpacks item">
                        <h5 class="ourProducts__product_choose choose">Обирай</h5>
                        <h2 class="ourProducts__product_title">
                            Рюкзаки
                        </h2>
                        <a class="ourProducts__product_all_goods _icon-Vector-3" href="#">Усі товари</a>
                    </div>
                </div>
                <div class="ourProducts__product_column col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                    <div class="ourProducts__product_item ourProducts__unloading item">
                        <h5 class="ourProducts__product_choose choose">Обирай</h5>
                        <h2 class="ourProducts__product_title _icon-user_letter path2">
                            Розгрузки
                        </h2>
                        <a class="ourProducts__product_all_goods _icon-Vector-3" href="#">Усі товари</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="newDevelopments paddingTB">
        <div class="newDevelopments__container container">
            <div class="newDevelopments__navigation_goods_cards d-flex justify-content-between">
                <h2 class="newDevelopments__navigation_goods_title">Наші нові розробки</h2>
                <div class="newDevelopments__navigation_goods_btn d-flex align-items-center justify-content-between">
                    <div class="newDevelopments__arrow d-flex align-items-center ">
                        <div class="newDevelopments__arrow_left" href="#carouselExampleControls2" role="button"
                             data-slide="prev">
                            <img src="<?php bloginfo('template_url'); ?>/app/img/newDevelopments/arrow_left.png"
                                 alt="arrow left">
                        </div>
                        <div class="newDevelopments__arrow_right" href="#carouselExampleControls2" role="button"
                             data-slide="next">
                            <img src="<?php bloginfo('template_url'); ?>/app/img/newDevelopments/arrow_right.png"
                                 alt="arrow right">
                        </div>
                    </div>
                    <h4 class="newDevelopments__all_goods">Усі товари</h4>
                </div>
            </div>
            <div id="carouselExampleControls2" class="carousel slide" data-iterval="false">
                <div class="carousel-inner">

                    <?php
                    global $post;

                    $myposts = get_posts([
                        'numberposts' => -1,
                    ]);

                    if ($myposts) {
                        foreach ($myposts as $post) {
                            setup_postdata($post);
                            ?>
                            <div class="carousel-item active">
                                <div class="newDevelopments__cards row">
                                    <div class="newDevelopments__column col-12 col-md-6 col-lg-4 col-xl-3">
                                        <div class="newDevelopments__card item">
                                            <div class="tags">
                                                <svg class="">-->
                                                    <use xlink:href="<?php bloginfo('template_url'); ?>/app/img/sprite.svg#tag-sale."></use>
                                                </svg>
                                            </div>
                                            <div class="newDevelopments__photo_goods">
                                                <?php the_post_thumbnail(
                                                    array(250, 250),
                                                    array(
                                                        'class' => 'newDevelopments__photo_vest'
                                                    )
                                                ); ?>
                                            </div>
                                            <h4 class="newDevelopments__product_name"> <?php the_title(); ?> </h4>
                                            <span class="newDevelopments__new_price"> <?php the_content(
                                                    array(
                                                        'class' => 'newDevelopments__new_price'
                                                    )); ?> </span>
                                            <span class="newDevelopments__old_price">4 168,00 ₴</span>
                                        </div>
                                        <div class="newDevelopments__btn-block d-flex align-items-center justify-content-center">
                                            <button class="newDevelopments__btn btn-orange ">
                                                <span class="newDevelopments__btn-text ">ДО КОШИКА</span>
                                                <span class="newDevelopments__btn-icon _icon-basket2"></span>
                                            </button>
                                            <button class="newDevelopments__btn btn-black">
                                                <span class="newDevelopments__btn-text">В ОБРАНЕ</span>
                                                <span class="newDevelopments__btn-icon _icon-white-frame-heart1"></span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="newDevelopments__column col-12 col-md-6 col-lg-4 col-xl-3">
                                        <div class="newDevelopments__card item">

                                            <div class="tags">
                                                <svg class="">-->
                                                    <use xlink:href="<?php bloginfo('template_url'); ?>/app/img/sprite.svg#tag-sale."></use>
                                                </svg>
                                            </div>
                                            <div class="newDevelopments__photo_goods">
                                                <img class="newDevelopments__photo_vest"
                                                     src="<?php bloginfo('template_url'); ?>/app/img/newDevelopments/chekhol-bronezhileta.png"
                                                     alt="tactical Equipment">
                                            </div>
                                            <h4 class="newDevelopments__product_name">БОЙОВА СОРОЧКА CS PIXEL ММ14</h4>
                                            <span class="newDevelopments__new_price">3 543,00 ₴</span>
                                            <span class="newDevelopments__old_price">4 168,00 ₴</span>
                                        </div>
                                        <div class="newDevelopments__btn-block d-flex align-items-center justify-content-center">
                                            <button class="newDevelopments__btn btn-orange ">
                                                <span class="newDevelopments__btn-text ">ДО КОШИКА</span>
                                                <span class="newDevelopments__btn-icon _icon-basket2"></span>
                                            </button>
                                            <button class="newDevelopments__btn btn-black">
                                                <span class="newDevelopments__btn-text">В ОБРАНЕ</span>
                                                <span class="newDevelopments__btn-icon _icon-white-frame-heart1"></span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="newDevelopments__column col-12 col-md-6 col-lg-4 col-xl-3">
                                        <div class="newDevelopments__card item">
                                            <div class="tags">
                                                <svg class="">-->
                                                    <use xlink:href="<?php bloginfo('template_url'); ?>/app/img/sprite.svg#tag-sale."></use>
                                                </svg>
                                            </div>
                                            <div class="newDevelopments__photo_goods">
                                                <img class="newDevelopments__photo_vest"
                                                     src="<?php bloginfo('template_url'); ?>/app/img/newDevelopments/multicam.png"
                                                     alt="tactical Equipment">
                                            </div>
                                            <h4 class="newDevelopments__product_name">БОЙОВА СОРОЧКА CS PIXEL ММ14</h4>
                                            <span class="newDevelopments__new_price">3 543,00 ₴</span>
                                            <span class="newDevelopments__old_price">4 168,00 ₴</span>
                                        </div>
                                        <div class="newDevelopments__btn-block d-flex align-items-center justify-content-center">
                                            <button class="newDevelopments__btn btn-orange ">
                                                <span class="newDevelopments__btn-text ">ДО КОШИКА</span>
                                                <span class="newDevelopments__btn-icon _icon-basket2"></span>
                                            </button>
                                            <button class="newDevelopments__btn btn-black">
                                                <span class="newDevelopments__btn-text">В ОБРАНЕ</span>
                                                <span class="newDevelopments__btn-icon _icon-white-frame-heart1"></span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="newDevelopments__column col-12 col-md-6 col-lg-4 col-xl-3">
                                        <div class="newDevelopments__card item">
                                            <div class="tags">
                                                <svg class="">
                                                    <use xlink:href="<?php bloginfo('template_url'); ?>/app/img/sprite.svg#tag-sale."></use>
                                                </svg>
                                            </div>
                                            <div class="newDevelopments__photo_goods">
                                                <img class="newDevelopments__photo_vest"
                                                     src="<?php bloginfo('template_url'); ?>/app/img/newDevelopments/FRAME_PIDSUMOK.png"
                                                     alt="tactical Equipment">
                                            </div>
                                            <h4 class="newDevelopments__product_name">БОЙОВА СОРОЧКА CS PIXEL ММ14</h4>
                                            <span class="newDevelopments__new_price">3 543,00 ₴</span>
                                            <span class="newDevelopments__old_price">4 168,00 ₴</span>
                                        </div>
                                        <div class="newDevelopments__btn-block d-flex align-items-center justify-content-center">
                                            <button class="newDevelopments__btn btn-orange ">
                                                <span class="newDevelopments__btn-text ">ДО КОШИКА</span>
                                                <span class="newDevelopments__btn-icon _icon-basket2"></span>
                                            </button>
                                            <button class="newDevelopments__btn btn-black">
                                                <span class="newDevelopments__btn-text">В ОБРАНЕ</span>
                                                <span class="newDevelopments__btn-icon _icon-white-frame-heart1"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }
                    }
                    wp_reset_postdata(); ?>

                    <!--                    <div class="carousel-item">-->
                    <!--                        <div class="newDevelopments__cards row">-->
                    <!--                            <div class="newDevelopments__column col-12 col-md-6 col-lg-4 col-xl-3">-->
                    <!--                                <div class="newDevelopments__card item">-->
                    <!--                                    <div class="tags">-->
                    <!--                                        <svg class="">-->
                    <!--                                            <use xlink:href="-->
                    <?php //bloginfo('template_url'); ?><!--/app/img/sprite.svg#tag-sale."></use>-->
                    <!--                                        </svg>-->
                    <!--                                    </div>-->
                    <!--                                    <div class="newDevelopments__photo_goods">-->
                    <!--                                        <img class="newDevelopments__photo_vest"-->
                    <!--                                             src="-->
                    <?php //bloginfo('template_url'); ?><!--/app/img/newDevelopments/FRAME_PIDSUMOK.png" alt="tactical Equipment">-->
                    <!--                                    </div>-->
                    <!--                                    <h4 class="newDevelopments__product_name">БОЙОВА СОРОЧКА CS PIXEL ММ14</h4>-->
                    <!--                                    <span class="newDevelopments__new_price">3 543,00 ₴</span>-->
                    <!--                                    <span class="newDevelopments__old_price">4 168,00 ₴</span>-->
                    <!--                                </div>-->
                    <!--                                <div class="newDevelopments__btn-block d-flex align-items-center justify-content-center">-->
                    <!--                                    <button class="newDevelopments__btn btn-orange ">-->
                    <!--                                        <span class="newDevelopments__btn-text ">ДО КОШИКА</span>-->
                    <!--                                        <span class="newDevelopments__btn-icon _icon-basket2"></span>-->
                    <!--                                    </button>-->
                    <!--                                    <button class="newDevelopments__btn btn-black">-->
                    <!--                                        <span class="newDevelopments__btn-text">В ОБРАНЕ</span>-->
                    <!--                                        <span class="newDevelopments__btn-icon _icon-white-frame-heart1"></span>-->
                    <!--                                    </button>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!--                            <div class="newDevelopments__column col-12 col-md-6 col-lg-4 col-xl-3">-->
                    <!--                                <div class="newDevelopments__card item">-->
                    <!--                                    <div class="tags">-->
                    <!--                                        <svg class="">-->
                    <!--                                            <use xlink:href="-->
                    <?php //bloginfo('template_url'); ?><!--/app/img/sprite.svg#tag-sale."></use>-->
                    <!--                                        </svg>-->
                    <!--                                    </div>-->
                    <!--                                    <div class="newDevelopments__photo_goods">-->
                    <!--                                        <img class="newDevelopments__photo_vest"-->
                    <!--                                             src="-->
                    <?php //bloginfo('template_url'); ?><!--/app/img/newDevelopments/COMBAT_SHIRT.png" alt="COMBAT SHIRT">-->
                    <!--                                    </div>-->
                    <!--                                    <h4 class="newDevelopments__product_name">БОЙОВА СОРОЧКА CS PIXEL ММ14</h4>-->
                    <!--                                    <span class="newDevelopments__new_price">3 543,00 ₴</span>-->
                    <!--                                    <span class="newDevelopments__old_price">4 168,00 ₴</span>-->
                    <!--                                </div>-->
                    <!--                                <div class="newDevelopments__btn-block d-flex align-items-center justify-content-center">-->
                    <!--                                    <button class="newDevelopments__btn btn-orange ">-->
                    <!--                                        <span class="newDevelopments__btn-text ">ДО КОШИКА</span>-->
                    <!--                                        <span class="newDevelopments__btn-icon _icon-basket2"></span>-->
                    <!--                                    </button>-->
                    <!--                                    <button class="newDevelopments__btn btn-black">-->
                    <!--                                        <span class="newDevelopments__btn-text">В ОБРАНЕ</span>-->
                    <!--                                        <span class="newDevelopments__btn-icon _icon-white-frame-heart1"></span>-->
                    <!--                                    </button>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!--                            <div class="newDevelopments__column col-12 col-md-6 col-lg-4 col-xl-3">-->
                    <!--                                <div class="newDevelopments__card item">-->
                    <!--                                    <div class="tags">-->
                    <!--                                        <svg class="">-->
                    <!--                                            <use xlink:href="-->
                    <?php //bloginfo('template_url'); ?><!--/app/img/sprite.svg#tag-sale."></use>-->
                    <!--                                        </svg>-->
                    <!--                                    </div>-->
                    <!--                                    <div class="newDevelopments__photo_goods">-->
                    <!--                                        <img class="newDevelopments__photo_vest"-->
                    <!--                                             src="-->
                    <?php //bloginfo('template_url'); ?><!--/app/img/newDevelopments/chekhol-bronezhileta.png" alt="tactical Equipment">-->
                    <!--                                    </div>-->
                    <!--                                    <h4 class="newDevelopments__product_name">БОЙОВА СОРОЧКА CS PIXEL ММ14</h4>-->
                    <!--                                    <span class="newDevelopments__new_price">3 543,00 ₴</span>-->
                    <!--                                    <span class="newDevelopments__old_price">4 168,00 ₴</span>-->
                    <!--                                </div>-->
                    <!--                                <div class="newDevelopments__btn-block d-flex align-items-center justify-content-center">-->
                    <!--                                    <button class="newDevelopments__btn btn-orange ">-->
                    <!--                                        <span class="newDevelopments__btn-text ">ДО КОШИКА</span>-->
                    <!--                                        <span class="newDevelopments__btn-icon _icon-basket2"></span>-->
                    <!--                                    </button>-->
                    <!--                                    <button class="newDevelopments__btn btn-black">-->
                    <!--                                        <span class="newDevelopments__btn-text">В ОБРАНЕ</span>-->
                    <!--                                        <span class="newDevelopments__btn-icon _icon-white-frame-heart1"></span>-->
                    <!--                                    </button>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!--                            <div class="newDevelopments__column col-12 col-md-6 col-lg-4 col-xl-3">-->
                    <!--                                <div class="newDevelopments__card item">-->
                    <!--                                    <div class="tags">-->
                    <!--                                        <svg class="">-->
                    <!--                                            <use xlink:href="-->
                    <?php //bloginfo('template_url'); ?><!--/app/img/sprite.svg#tag-sale."></use>-->
                    <!--                                        </svg>-->
                    <!--                                    </div>-->
                    <!--                                    <div class="newDevelopments__photo_goods">-->
                    <!--                                        <img class="newDevelopments__photo_vest"-->
                    <!--                                             src="-->
                    <?php //bloginfo('template_url'); ?><!--/app/img/newDevelopments/multicam.png" alt="tactical Equipment">-->
                    <!--                                    </div>-->
                    <!--                                    <h4 class="newDevelopments__product_name">БОЙОВА СОРОЧКА CS PIXEL ММ14</h4>-->
                    <!--                                    <span class="newDevelopments__new_price">3 543,00 ₴</span>-->
                    <!--                                    <span class="newDevelopments__old_price">4 168,00 ₴</span>-->
                    <!--                                </div>-->
                    <!--                                <div class="newDevelopments__btn-block d-flex align-items-center justify-content-center">-->
                    <!--                                    <button class="newDevelopments__btn btn-orange ">-->
                    <!--                                        <span class="newDevelopments__btn-text ">ДО КОШИКА</span>-->
                    <!--                                        <span class="newDevelopments__btn-icon _icon-basket2"></span>-->
                    <!--                                    </button>-->
                    <!--                                    <button class="newDevelopments__btn btn-black">-->
                    <!--                                        <span class="newDevelopments__btn-text">В ОБРАНЕ</span>-->
                    <!--                                        <span class="newDevelopments__btn-icon _icon-white-frame-heart1"></span>-->
                    <!--                                    </button>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                </div>
            </div>
        </div>
    </section>

    <section class="newDevelopments paddingTB">
        <div class="newDevelopments__container container">
            <div class="newDevelopments__navigation_goods_cards d-flex justify-content-between">
                <h2 class="newDevelopments__navigation_goods_title">Наші нові розробки</h2>
                <div class="newDevelopments__navigation_goods_btn d-flex align-items-center justify-content-between">
                    <div class="newDevelopments__arrow d-flex align-items-center ">
                        <div class="newDevelopments__arrow_left" href="#carouselExampleControls2" role="button"
                             data-slide="prev">
                            <img src="<?php bloginfo('template_url'); ?>/app/img/newDevelopments/arrow_left.png"
                                 alt="arrow left">
                        </div>
                        <div class="newDevelopments__arrow_right" href="#carouselExampleControls2" role="button"
                             data-slide="next">
                            <img src="<?php bloginfo('template_url'); ?>/app/img/newDevelopments/arrow_right.png"
                                 alt="arrow right">
                        </div>
                    </div>
                    <h4 class="newDevelopments__all_goods">Усі товари</h4>
                </div>
            </div>
            <div class="slider_products">
                <div class="slider_products__item">
                    <div class="slider_products__wrapper">
                        <div class="newDevelopments__card ">
                            <svg class="tags">
                                <use xlink:href="<?php bloginfo('template_url'); ?>/app/img/sprite.svg#tag-sale"></use>
                            </svg>
                            <div class="newDevelopments__photo_goods">
                                <img class="newDevelopments__photo_vest"
                                     src="
                        <?php bloginfo('template_url'); ?>/app/img/newDevelopments/chekhol-bronezhileta.png"
                                     alt="tactical Equipment">
                            </div>
                            <h4 class="newDevelopments__product_name">БОЙОВА СОРОЧКА CS PIXEL ММ14</h4>
                            <span class="newDevelopments__new_price">3 543,00 ₴</span>
                            <span class="newDevelopments__old_price">4 168,00 ₴</span>
                        </div>
                        <div class="newDevelopments__btn-block d-flex align-items-center justify-content-center">
                            <button class="newDevelopments__btn btn-orange ">
                                <span class="newDevelopments__btn-text ">ДО КОШИКА</span>
                                <span class="newDevelopments__btn-icon _icon-basket2"></span>
                            </button>
                            <button class="newDevelopments__btn btn-black">
                                <span class="newDevelopments__btn-text">В ОБРАНЕ</span>
                                <span class="newDevelopments__btn-icon _icon-white-frame-heart1"></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="slider_products__item">
                    <div class="slider_products__wrapper">
                        <div class="newDevelopments__card ">
                            <svg class="tags">
                                <use xlink:href="<?php bloginfo('template_url'); ?>/app/img/sprite.svg#tag-sale"></use>
                            </svg>
                            <div class="newDevelopments__photo_goods">
                                <img class="newDevelopments__photo_vest"
                                     src="
                        <?php bloginfo('template_url'); ?>/app/img/newDevelopments/chekhol-bronezhileta.png"
                                     alt="tactical Equipment">
                            </div>
                            <h4 class="newDevelopments__product_name">БОЙОВА СОРОЧКА CS PIXEL ММ14</h4>
                            <span class="newDevelopments__new_price">3 543,00 ₴</span>
                            <span class="newDevelopments__old_price">4 168,00 ₴</span>
                        </div>
                        <div class="newDevelopments__btn-block d-flex align-items-center justify-content-center">
                            <button class="newDevelopments__btn btn-orange ">
                                <span class="newDevelopments__btn-text ">ДО КОШИКА</span>
                                <span class="newDevelopments__btn-icon _icon-basket2"></span>
                            </button>
                            <button class="newDevelopments__btn btn-black">
                                <span class="newDevelopments__btn-text">В ОБРАНЕ</span>
                                <span class="newDevelopments__btn-icon _icon-white-frame-heart1"></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="slider_products__item">
                    <div class="slider_products__wrapper">
                        <div class="newDevelopments__card ">
                            <svg class="tags">
                                <use xlink:href="<?php bloginfo('template_url'); ?>/app/img/sprite.svg#tag-sale"></use>
                            </svg>
                            <div class="newDevelopments__photo_goods">
                                <img class="newDevelopments__photo_vest"
                                     src="
                        <?php bloginfo('template_url'); ?>/app/img/newDevelopments/chekhol-bronezhileta.png"
                                     alt="tactical Equipment">
                            </div>
                            <h4 class="newDevelopments__product_name">БОЙОВА СОРОЧКА CS PIXEL ММ14</h4>
                            <span class="newDevelopments__new_price">3 543,00 ₴</span>
                            <span class="newDevelopments__old_price">4 168,00 ₴</span>
                        </div>
                        <div class="newDevelopments__btn-block d-flex align-items-center justify-content-center">
                            <button class="newDevelopments__btn btn-orange ">
                                <span class="newDevelopments__btn-text ">ДО КОШИКА</span>
                                <span class="newDevelopments__btn-icon _icon-basket2"></span>
                            </button>
                            <button class="newDevelopments__btn btn-black">
                                <span class="newDevelopments__btn-text">В ОБРАНЕ</span>
                                <span class="newDevelopments__btn-icon _icon-white-frame-heart1"></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="slider_products__item">
                    <div class="slider_products__wrapper">
                        <div class="newDevelopments__card ">
                            <svg class="tags">
                                <use xlink:href="<?php bloginfo('template_url'); ?>/app/img/sprite.svg#tag-sale"></use>
                            </svg>
                            <div class="newDevelopments__photo_goods">
                                <img class="newDevelopments__photo_vest"
                                     src="
                        <?php bloginfo('template_url'); ?>/app/img/newDevelopments/chekhol-bronezhileta.png"
                                     alt="tactical Equipment">
                            </div>
                            <h4 class="newDevelopments__product_name">БОЙОВА СОРОЧКА CS PIXEL ММ14</h4>
                            <span class="newDevelopments__new_price">3 543,00 ₴</span>
                            <span class="newDevelopments__old_price">4 168,00 ₴</span>
                        </div>
                        <div class="newDevelopments__btn-block d-flex align-items-center justify-content-center">
                            <button class="newDevelopments__btn btn-orange ">
                                <span class="newDevelopments__btn-text ">ДО КОШИКА</span>
                                <span class="newDevelopments__btn-icon _icon-basket2"></span>
                            </button>
                            <button class="newDevelopments__btn btn-black">
                                <span class="newDevelopments__btn-text">В ОБРАНЕ</span>
                                <span class="newDevelopments__btn-icon _icon-white-frame-heart1"></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="slider_products__item">
                    <div class="slider_products__wrapper">
                        <div class="newDevelopments__card ">
                            <svg class="tags">
                                <use xlink:href="<?php bloginfo('template_url'); ?>/app/img/sprite.svg#tag-sale"></use>
                            </svg>
                            <div class="newDevelopments__photo_goods">
                                <img class="newDevelopments__photo_vest"
                                     src="
                        <?php bloginfo('template_url'); ?>/app/img/newDevelopments/chekhol-bronezhileta.png"
                                     alt="tactical Equipment">
                            </div>
                            <h4 class="newDevelopments__product_name">БОЙОВА СОРОЧКА CS PIXEL ММ14</h4>
                            <span class="newDevelopments__new_price">3 543,00 ₴</span>
                            <span class="newDevelopments__old_price">4 168,00 ₴</span>
                        </div>
                        <div class="newDevelopments__btn-block d-flex align-items-center justify-content-center">
                            <button class="newDevelopments__btn btn-orange ">
                                <span class="newDevelopments__btn-text ">ДО КОШИКА</span>
                                <span class="newDevelopments__btn-icon _icon-basket2"></span>
                            </button>
                            <button class="newDevelopments__btn btn-black">
                                <span class="newDevelopments__btn-text">В ОБРАНЕ</span>
                                <span class="newDevelopments__btn-icon _icon-white-frame-heart1"></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="slider_products__item">
                    <div class="slider_products__wrapper">
                        <div class="newDevelopments__card ">
                            <svg class="tags">
                                <use xlink:href="<?php bloginfo('template_url'); ?>/app/img/sprite.svg#tag-sale"></use>
                            </svg>
                            <div class="newDevelopments__photo_goods">
                                <img class="newDevelopments__photo_vest"
                                     src="
                        <?php bloginfo('template_url'); ?>/app/img/newDevelopments/chekhol-bronezhileta.png"
                                     alt="tactical Equipment">
                            </div>
                            <h4 class="newDevelopments__product_name">БОЙОВА СОРОЧКА CS PIXEL ММ14</h4>
                            <span class="newDevelopments__new_price">3 543,00 ₴</span>
                            <span class="newDevelopments__old_price">4 168,00 ₴</span>
                        </div>
                        <div class="newDevelopments__btn-block d-flex align-items-center justify-content-center">
                            <button class="newDevelopments__btn btn-orange ">
                                <span class="newDevelopments__btn-text ">ДО КОШИКА</span>
                                <span class="newDevelopments__btn-icon _icon-basket2"></span>
                            </button>
                            <button class="newDevelopments__btn btn-black">
                                <span class="newDevelopments__btn-text">В ОБРАНЕ</span>
                                <span class="newDevelopments__btn-icon _icon-white-frame-heart1"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tacticalEquipment paddingTB">
        <div class="tacticalEquipment__container container">
            <div class="tacticalEquipment__row row">
                <div class="tacticalEquipment__left_text col-12 col-sm-7 col-md-7">
                    <h2 class="tacticalEquipment__title">ЯКІСНЕ ТАКТИЧНЕ СПОРЯДЖЕННЯ ДЛЯ СПЕЦПІДРОЗДІЛІВ</h2>
                    <p class="tacticalEquipment__text paragraph3">Наші клієнти – гарант якості. Продукція Hofner, в
                        першу
                        чергу,
                        розрахована для підрозділів спецназу і
                        військової розвідки. Також, нашу екіпіровку використовують солдати збройних сил України,
                        прикордонної служби, нацгвардія, добровольчі батальйони, працівники ДСО, морські піхотинці,
                        військові парамедики і десантники.
                    </p>
                    <p class="tacticalEquipment__text paragraph3">Завдання нашого тактичного спорядження – не підвести в
                        бою
                        і бути
                        корисним позаду лінії фронту.
                        Примітно, що спорядження Hofner користується попитом і на "Великій землі". Крім військових дій,
                        наше
                        екіпірування якісно зарекомендувало себе серед страйкболістів та мисливців.
                    </p>
                </div>
                <div class="tacticalEquipment__right_transparent d-flex align-items-center justify-content-center col-12 col-sm-5 col-md-5">
                    <img src="<?php bloginfo('template_url'); ?>/app/img/tacticalEquipment/image_men_right.png"
                         alt="men"/>
                </div>
            </div>
        </div>
    </section>
    <section class="ourInstagram paddingTB">
        <div class="ourInstagram__container container">
            <div class="ourInstagram__row row">
                <div class="ourInstagram__info col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                    <h2 class="ourInstagram__title">Ще більше цікавого у нашому Instagram</h2>
                    <p class="ourInstagram__text paragraph3">Підписуйся на нашу сторінку в Instagram та першим
                        дізнайвайся про новинки та акції. Також на тебе чекають
                        огляди популярних товарів, майстер-класи та багато іншого.</p>
                    <button class="ourInstagram__btn goTo">
                        перейти до instagram
                    </button>
                </div>

                <div class="ourInstagram__photos col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
                    <div class="ourInstagram__product row">
                        <div class="ourInstagram__product_column col-4 col-sm-4 col-md-4">
                            <div class="ourInstagram__photo">
                                <div class="ourInstagram__photo_eml paragraph2">@hofner.ukraine</div>
                                <img src="<?php bloginfo('template_url'); ?>/app/img/ourInstagram/hofner1.png"
                                     alt="Фотография 1">
                            </div>
                        </div>
                        <div class="ourInstagram__product_column col-4 col-sm-4 col-md-4">
                            <div class="ourInstagram__photo">
                                <div class="ourInstagram__photo_eml paragraph2">@hofner.ukraine</div>
                                <img src="<?php bloginfo('template_url'); ?>/app/img/ourInstagram/hofner2.png"
                                     alt="Фотография 2">
                            </div>
                        </div>
                        <div class="ourInstagram__product_column col-4 col-sm-4 col-md-4">
                            <div class="ourInstagram__photo">
                                <div class="ourInstagram__photo_eml paragraph2">@hofner.ukraine</div>
                                <img src="<?php bloginfo('template_url'); ?>/app/img/ourInstagram/hofner3.png"
                                     alt="Фотография 3">
                            </div>
                        </div>
                        <div class="ourInstagram__product_column col-4 col-sm-4 col-md-4">
                            <div class="ourInstagram__photo">
                                <div class="ourInstagram__photo_eml paragraph2">@hofner.ukraine</div>
                                <img src="<?php bloginfo('template_url'); ?>/app/img/ourInstagram/hofner4.png"
                                     alt="Фотография 1">
                            </div>
                        </div>
                        <div class="ourInstagram__product_column col-4 col-sm-4 col-md-4">
                            <div class="ourInstagram__photo">
                                <div class="ourInstagram__photo_eml paragraph2">@hofner.ukraine</div>
                                <img src="<?php bloginfo('template_url'); ?>/app/img/ourInstagram/hofner5.png"
                                     alt="Фотография 2">
                            </div>
                        </div>
                        <div class="ourInstagram__product_column col-4 col-sm-4 col-md-4">
                            <div class="ourInstagram__photo">
                                <div class="ourInstagram__photo_eml paragraph2">@hofner.ukraine</div>
                                <img src="<?php bloginfo('template_url'); ?>/app/img/ourInstagram/hofner6.png"
                                     alt="Фотография 3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="productsTested paddingTB">
        <div class="productsTested__container container">
            <div class="productsTested__row row">
                <div class="productsTested__info col-12 col-sm-12 col-md-5 col-xl-5">
                    <h2 class="productsTested__title">ВСЯ ПРОДУКЦІЯ ПРОЙШЛА ВИПРОБУВАННЯ В ЗОНІ ООС (АТО)</h2>
                    <p class="productsTested__text paragraph3">Випробувано залізними людьми в залізних умовах. Наша
                        продукція розроблена спільно з військовими фахівцями, з огляду на досвід бойових дій на сході
                        України. Відчула на власній "кордурі" молот і ковадло полігонів. Спочатку вся продукція ретельно
                        тестується на навчаннях. Наше екіпірування загартована війною. Надійність матеріалів та
                        зручність
                        спорядження Hofner поліпшило якість проведення багатьох бойових операцій.</p>
                </div>
                <div class="productsTested__video col-12 col-sm-12 col-md-7 col-xl-7">
                    <iframe src="https://www.youtube.com/embed/7JoTakp1w1A"
                            title="" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    </section>
    <section class="ourAdvantages paddingTB">
        <div class="ourAdvantages__container container">
            <div class="ourAdvantages__row row">
                <div class="ourAdvantages__card col-12 col-sm-6 col-md-4">
                    <div class="ourAdvantages__info has_no_padding item">
                        <h2 class="ourAdvantages__title">Наші переваги</h2>
                        <p class="ourAdvantages__info_text paragraph3">
                            Ми добре знаємо, що від якості виготовленого нами екіпірування залежить чиєсь життя. Наша
                            головна мета – не допустити того, щоб солдат втратив його.
                        </p>
                    </div>
                </div>
                <div class="ourAdvantages__card col-12 col-sm-6 col-md-4">
                    <div class="ourAdvantages__info item">

                        <h3 class="ourAdvantages__info_title design">Дбайливо продумуємо дизайн</h3>
                        <svg class="ourAdvantages__info_icon">
                            <use xlink:href="<?php bloginfo('template_url'); ?>/app/img/sprite.svg#icon_design"></use>
                        </svg>
                        <p class="ourAdvantages__info_text paragraph3">
                            Наші конструктори здобувають своє натхення " з усіх річок". Ми пильно стежимо за новинками
                            тактичного спорядження на світовому ринку. Вивчаємо продукцію топових брендів, переймаємо їх
                            досвід. Кращі розробки провідних армій світу втілені в наших продуктах.
                        </p>
                        <button class="ourAdvantages__btn_read_more btn_read_more"> читати більше</button>
                    </div>
                </div>
                <div class="ourAdvantages__card col-12 col-sm-6 col-md-4">
                    <div class="ourAdvantages__info item">
                        <h3 class="ourAdvantages__info_title wish">Враховуємо побажання бійців</h3>
                        <svg class="ourAdvantages__info_icon">
                            <use xlink:href="<?php bloginfo('template_url'); ?>/app/img/sprite.svg#icon-talk"></use>
                        </svg>
                        <p class="ourAdvantages__info_text paragraph3">
                            У розробці може взяти участь будь-який клієнт. Чому? Те, що помітили ви, могли не побачити
                            ми.
                            Солдат із бойовим досвідом, що випробував на собі безліч видів тактичного спорядження точно
                            знає, що оптимально підходить для ведення бойових дій.
                        </p>
                        <button class="ourAdvantages__btn_read_more btn_read_more"> читати більше</button>
                    </div>
                </div>
                <div class="ourAdvantages__card col-12 col-sm-6 col-md-4">
                    <div class="ourAdvantages__info item">
                        <h3 class="ourAdvantages__info_title quality">Наша ціль – найвища якість!</h3>
                        <svg class="ourAdvantages__info_icon">
                            <use xlink:href="<?php bloginfo('template_url'); ?>/app/img/sprite.svg#icon-target"></use>
                        </svg>
                        <p class="ourAdvantages__info_text paragraph3">
                            Ми добре знаємо, що від якості виготовленого нами екіпірування залежить чиєсь життя. Наша
                            головна мета - не допустити того, щоб солдат втратив його. А це також залежить від
                            надійності
                            спорядження. Від вас ми вимагаємо тільки успішного виконання бойових завдань.
                        </p>
                        <button class="ourAdvantages__btn_read_more btn_read_more"> читати більше</button>
                    </div>
                </div>
                <div class="ourAdvantages__card col-12 col-sm-6 col-md-4">
                    <div class="ourAdvantages__info item">
                        <h3 class="ourAdvantages__info_title cloth">Оригінальна тканина і фурнітура</h3>
                        <svg class="ourAdvantages__info_icon">
                            <use xlink:href="<?php bloginfo('template_url'); ?>/app/img/sprite.svg#icon-textile"></use>
                        </svg>
                        <p class="ourAdvantages__info_text paragraph3">
                            Безсумнівно, ціна замінника дешевша. Але ми, в першу чергу, цінуємо життя наших клієнтів,
                            яке
                            залежить від якості екіпірування. Тріснутий фастекс або армована нитка китайського
                            виробництва,
                            можуть призвести до сумних наслідків під час бою.
                        </p>
                        <button class="ourAdvantages__btn_read_more btn_read_more btn_read_more__cloth"> читати більше
                        </button>
                    </div>
                </div>
                <div class="ourAdvantages__card col-12 col-sm-6 col-md-4">
                    <div class="ourAdvantages__info item">
                        <h3 class="ourAdvantages__info_title delivery">Доставка по україні та закордон</h3>
                        <svg class="ourAdvantages__info_icon">
                            <use xlink:href="<?php bloginfo('template_url'); ?>/app/img/sprite.svg#icon-earth"></use>
                        </svg>
                        <p class="ourAdvantages__info_text paragraph3">
                            Якщо якість - наш коник, то сервіс відповідає. Доставимо куди завгодно. Працюємо як з
                            вітчизняними, так і з закордонними службами доставки. В основному, щоб уникнути переплат, ми
                            працюємо з національним перевізником «Укрпошта», який доставляє не тільки по...
                        </p>
                        <button class="ourAdvantages__btn_read_more btn_read_more delivery"> читати більше</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal__ourAdvantages__btn_read_more">
        <div class="modal__ourAdvantages_content">
            <h3 class="ourAdvantages__info_title cloth">Оригінальна тканина і фурнітура</h3>
            <button class="modal__close btn_read_more">Закрити</button>
            <div class="modal__ourAdvantages_content_text row">
                <div class=" col-12 col-sm-6 col-md-6">
                    <p class="ourAdvantages__info_text paragraph3">
                        Безсумнівно, ціна замінника дешевша. Але ми, в першу чергу, цінуємо життя наших клієнтів, яке
                        залежить від якості екіпірування. Тріснутий фастекс або армована нитка китайського виробництва,
                        можуть призвести до сумних наслідків під час бою.
                    </p>
                </div>
                <div class=" col-12 col-sm-6 col-md-6">
                    <p class="ourAdvantages__info_text paragraph3">
                        Фурнітура (люверси, фастекси, липучки) тільки YKK та 2M. Ніяких замінників чи підробок. Пластик,
                        який використовується у фастексах YKK та 2M можливо вбити, напевно, тільки прямим попаданням
                        кулі. А зчеплення липучок між собою можна порівняти з швами інверторного зварювання.
                    </p>
                </div>
                <div class=" col-12 col-sm-6 col-md-6">
                    <p class="ourAdvantages__info_text paragraph3">
                        У виробництві ми використовуємо матеріали Cordura, поліамідні тканини з США, Європи та Південної
                        Кореї. Про переваги матеріалу Cordura - поліамідної тканини з щільністю близько 100-1000 ден
                        можна говорити довго. Потрібні гарантії? Спорядження збройних сил США - яскравий приклад якості
                        і надійності.
                    </p>
                </div>

            </div>
        </div>
    </div>
<?php get_footer(); ?>