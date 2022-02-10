<?php the_content(); ?>
<?php
/*
Template Name: home

*/
?>
<?php //echo get_template_directory_uri(); ?>

<?php get_header(); ?>

    <section class="slider">
        <a href="#" class="slider__button_link">Переглянути новинки</a>
        <div id="carouselExampleControls" class="carouselExampleControls carousel slide" data-iterval="false">
            <div class="carousel-inner">
                <?php $reviews = get_field('bg-img-slider',5); ?>
<!--                        <pre> --><?php //var_dump($reviews); ?><!--</pre>-->
                <?php foreach ($reviews as $review) : ?>
                    <div class="carousel-item active">
                        <img class="d-block w-100"
                             src="<?= wp_get_attachment_url($review['photo-background']); ?>" alt="Второй слайд">
                    </div>
                <?php endforeach; ?>

<!--                --><?php //global $review;
//                $reviews = get_field('bg-img-slider');
//
//                if ($reviews) {
//                    foreach ($reviews as $review) {
//                        setup_postdata($review); ?>
<!---->
<!--                        <div class="carousel-item ">-->
<!---->
<!--                        </div>-->
<!---->
<!--                    --><?php //}
//                }
//                                wp_reset_postdata();
//                ?>

            </div>
            <div class="container">
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <svg class="slider__arrow">
                        <use xlink:href="<?php bloginfo('template_url'); ?>/app/img/sprite.svg#arrow-left"></use>
                    </svg>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <svg class="slider__arrow">
                        <use xlink:href="<?php bloginfo('template_url'); ?>/app/img/sprite.svg#arrow-right"></use>
                    </svg>

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
                </a>
                <a class="carousel-control-next" href="#carouselExampleControlsSmall" role="button" data-slide="next">
                    <svg class="slider__arrow">
                        <use xlink:href="<?php bloginfo('template_url'); ?>/app/img/sprite.svg#arrow-right"></use>
                    </svg>

                </a>
            </div>
        </div>
    </section>

    <section class="ourProducts">
        <div class="ourProducts__container container">
            <div class="ourProducts__product row">
                <div class="ourProducts__product_column col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                    <div class="ourProducts__product_item has_no_padding item">
                        <h2 class="ourProducts__title"><?php the_field('title-our-goods'); ?></h2>
                        <p class="ourProducts__product_text">
                            <?php the_field('subtitle -our-goods'); ?>
                        </p>
                    </div>
                </div>
                <?php $reviews = get_field('cards-our-products'); ?>
                <?php foreach ($reviews as $review) : ?>
                    <div class="ourProducts__product_column col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                        <div class="ourProducts__product_item  ourProducts__clothing item"
                             style="background-image: url('<?= wp_get_attachment_url($review['photo-bg-card']); ?>')">
                            <h5 class="ourProducts__product_choose choose"><?= $review['product-choose']; ?></h5>
                            <h2 class="ourProducts__product_title">
                                <?= $review['product-name']; ?>
                            </h2>
                            <a class="ourProducts__product_all_goods _icon-Vector-3"
                               href="#"><?= $review['btn-all-produkts']; ?></a>
                        </div>
                    </div>
                <?php endforeach; ?>
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
                    <h4 class="newDevelopments__all_goods"><?php the_field('all-goods'); ?></h4>
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
                            <div class="carousel-item ">
                                <div class="newDevelopments__cards row">
                                    <div class="newDevelopments__column col-12 col-md-6 col-lg-4 col-xl-3">
                                        <div class="newDevelopments__card item">
                                            <div class="tags">
                                                <svg class="">-->
                                                    <use xlink:href="
                                                <?php bloginfo('template_url'); ?>/app/img/sprite.svg#tag-sale."></use>
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
                                            <h4 class="newDevelopments__product_name">
                                                <?php the_title(); ?> </h4>
                                            <span class="newDevelopments__new_price">
                    <?php the_content(
                        array(
                            'class' => 'newDevelopments__new_price'
                        )); ?>
                                            </span>
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
                                                    <use xlink:href="
                    <?php bloginfo('template_url'); ?>/app/img/sprite.svg#tag-sale."></use>
                                                </svg>
                                            </div>
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
                                    <div class="newDevelopments__column col-12 col-md-6 col-lg-4 col-xl-3">
                                        <div class="newDevelopments__card item">
                                            <div class="tags">
                                                <svg class="">-->
                                                    <use xlink:href="
                    <?php bloginfo('template_url'); ?>/app/img/sprite.svg#tag-sale."></use>
                                                </svg>
                                            </div>
                                            <div class="newDevelopments__photo_goods">
                                                <img class="newDevelopments__photo_vest"
                                                     src="
                    <?php bloginfo('template_url'); ?>/app/img/newDevelopments/multicam.png"
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
                                                    <use xlink:href="
                    <?php bloginfo('template_url'); ?>/app/img/sprite.svg#tag-sale."></use>
                                                </svg>
                                            </div>
                                            <div class="newDevelopments__photo_goods">
                                                <img class="newDevelopments__photo_vest"
                                                     src="
                    <?php bloginfo('template_url'); ?>/app/img/newDevelopments/FRAME_PIDSUMOK.png"
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
                    <div class="carousel-item active">
                        <div class="newDevelopments__cards row">
                            <div class="newDevelopments__column col-12 col-md-6 col-lg-4 col-xl-3">
                                <div class="newDevelopments__card item">
                                    <svg class="tags">
                                        <use xlink:href="<?php bloginfo('template_url'); ?>/app/img/sprite.svg#tag-sale"></use>
                                    </svg>

                                    <div class="newDevelopments__photo_goods">
                                        <img class="newDevelopments__photo_vest"
                                             src="<?php bloginfo('template_url'); ?>/app/img/newDevelopments/COMBAT_SHIRT.png"
                                             alt="COMBAT SHIRT">
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

                                    <svg class="tags">
                                        <use xlink:href="<?php bloginfo('template_url'); ?>/app/img/sprite.svg#tag-sale"></use>
                                    </svg>
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
                                    <svg class="tags">
                                        <use xlink:href="<?php bloginfo('template_url'); ?>/app/img/sprite.svg#tag-sale"></use>
                                    </svg>
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
                                    <svg class="tags">
                                        <use xlink:href="<?php bloginfo('template_url'); ?>/app/img/sprite.svg#tag-sale"></use>
                                    </svg>
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
                </div>
            </div>
        </div>
    </section>

    <section class="tacticalEquipment paddingTB">
        <div class="tacticalEquipment__container container">
            <div class="tacticalEquipment__row row">
                <div class="tacticalEquipment__left_text col-12 col-sm-7 col-md-7">
                    <h2 class="tacticalEquipment__title"><?php the_field('title-tactical-equipment'); ?></h2>
                    <p class="tacticalEquipment__text paragraph3"><?php the_field('text-tactical-equipment_1'); ?>
                    </p>
                    <p class="tacticalEquipment__text paragraph3"><?php the_field('text-tactical-equipment_2'); ?>
                    </p>
                </div>
                <div class="tacticalEquipment__right_transparent d-flex align-items-center justify-content-center col-12 col-sm-5 col-md-5">
                    <img src="<?php the_field('img-men-right'); ?>" alt="men"/>
                </div>
            </div>
        </div>
    </section>

    <section class="ourInstagram paddingTB">
        <div class="ourInstagram__container container">
            <div class="ourInstagram__row row">
                <div class="ourInstagram__info col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                    <h2 class="ourInstagram__title"><?php the_field('title-our-instagram'); ?></h2>
                    <p class="ourInstagram__text paragraph3"><?php the_field('text-info-instagram'); ?></p>
                    <button class="ourInstagram__btn goTo">
                        перейти до instagram
                    </button>
                </div>

                <div class="ourInstagram__photos col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
                    <div class="ourInstagram__product row">
                        <?php $reviews = get_field('cards_instagram'); ?>
                        <?php foreach ($reviews as $review) : ?>
                            <div class="ourInstagram__product_column col-4 col-sm-4 col-md-4">
                                <div class="ourInstagram__photo">
                                    <div class="ourInstagram__photo_eml paragraph2"><?= $review['link-instagram']; ?></div>
                                    <img src="<?= wp_get_attachment_url($review['photo-instagram']); ?>"
                                         alt="Фотография 1"/>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="productsTested paddingTB">
        <div class="productsTested__container container">
            <div class="productsTested__row row">
                <div class="productsTested__info col-12 col-sm-12 col-md-5 col-xl-5">
                    <h2 class="productsTested__title"><?php the_field('title-products-tested'); ?></h2>
                    <p class="productsTested__text paragraph3"><?php the_field('text-products-tested'); ?></p>
                </div>
                <div class="productsTested__video col-12 col-sm-12 col-md-7 col-xl-7">
                    <iframe src="<?php the_field('link-video'); ?>"
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
                        <h2 class="ourAdvantages__title"><?php the_field('title-our-advantages'); ?></h2>
                        <p class="ourAdvantages__info_text paragraph3">
                            <?php the_field('text-our-advantages'); ?>
                        </p>
                    </div>
                </div>

                <?php $reviews = get_field('cards-our-advantages'); ?>
                <?php foreach ($reviews as $review) : ?>
                    <div class="ourAdvantages__card col-12 col-sm-6 col-md-4">
                        <div class="ourAdvantages__info item">

                            <h3 class="ourAdvantages__info_title design"><?= $review['title-card']; ?></h3>
                            <img class="ourAdvantages__info_icon"
                                 src="<?= wp_get_attachment_url($review['svg_icon']); ?>"
                                 alt="Фотография 1"/>

                            <p class="ourAdvantages__info_text paragraph3">
                                <?= $review['info-text']; ?>
                            </p>
                            <button class="ourAdvantages__btn_read_more btn_read_more"> <?= $review['btn-text']; ?></button>
                        </div>
                    </div>
                <?php endforeach; ?>


                <div class="ourAdvantages__card col-12 col-sm-6 col-md-4">
                    <div class="ourAdvantages__info item">
                        <h3 class="ourAdvantages__info_title cloth"><?php the_field('text-advantages4'); ?></h3>
                        <svg class="ourAdvantages__info_icon">
                            <use xlink:href="<?php bloginfo('template_url'); ?>/app/img/sprite.svg#icon-textile"></use>
                        </svg>
                        <p class="ourAdvantages__info_text paragraph3">
                            <?php the_field('text-info-advantages4'); ?>
                        </p>
                        <button class="ourAdvantages__btn_read_more btn_read_more btn_read_more__cloth"> <?php the_field('btn-read-more'); ?>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <div class="modal__ourAdvantages__btn_read_more">
        <div class="modal__ourAdvantages_content">
            <h3 class="ourAdvantages__info_title cloth"><?php the_field('text-advantages4'); ?></h3>
            <button class="modal__close btn_read_more"><?php the_field('modal-close'); ?></button>
            <div class="modal__ourAdvantages_content_text row">
                <div class=" col-12 col-sm-6 col-md-6">
                    <p class="ourAdvantages__info_text paragraph3">
                        <?php the_field('text-info-advantages4'); ?>
                    </p>
                </div>
                <div class=" col-12 col-sm-6 col-md-6">
                    <p class="ourAdvantages__info_text paragraph3">
                        <?php the_field('text-info-advantages4-2'); ?>
                    </p>
                </div>
                <div class=" col-12 col-sm-6 col-md-6">
                    <p class="ourAdvantages__info_text paragraph3">
                        <?php the_field('text-info-advantages4-3'); ?>
                    </p>
                </div>

            </div>
        </div>
    </div>
<?php get_footer(); ?>