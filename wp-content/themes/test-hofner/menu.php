<?php

add_action('after_setup_theme', 'theme_register_nav_menu');
function theme_register_nav_menu()
{
    register_nav_menu('top', 'меню в шапці');
    register_nav_menu('footer', 'меню в підвалі');
}
//змінюю атрибут id у тега li
add_filter('nav_menu_item_id', 'filter_menu_item_css_id', 10, 4);
function filter_menu_item_css_id($menu_id, $item, $args, $depth)
{
    return $args->theme_location === 'top' ? '' : $menu_id;
}
//змінюю атрибут class у тега li
add_filter('nav_menu_css_class', 'filter_nav_menu_css_classes', 10, 4);
function filter_nav_menu_css_classes( $classes, $item, $args, $depth)
{
    if ($args->theme_location === 'top') {
        $classes = [
            'header__menu_link_wrapper',
        ];

    }

    return $classes;
}
//Змінюємо клас у вложеного діва(той що попап)
add_filter('nav_menu_submenu_css_class', 'filter_nav_menu_submenu_css_class', 10, 3);
function filter_nav_menu_submenu_css_class($classes, $args, $depth)
{
    if ($args->theme_location === 'top') {
        $classes = [
            'header__dropdown_menu',
            'row'
        ];
    }

//    $pos = strpos( 'header__menu_link_wrapper');
//    if ($pos === false) {
//        $item_output = $args->before;
//    } else {
//        $item_output = '<div class="header__dropdown_menu row">';
//    }
    return $classes;
}
//Добавляю класи силкам
add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 4);
function filter_nav_menu_link_attributes( $atts, $item, $args, $depth){
    if ($args->theme_location === 'top'){
        $atts ['class']= 'header__menu_link';
    };
//    if ( $item->current){
//        $classes['class'] = 'header__menu_link_wrapper_action';
//    }
    return $atts;
}