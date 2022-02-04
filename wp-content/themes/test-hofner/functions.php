<?php
//include 'menu.php';
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('fonts-googleapis', 'https://fonts.googleapis.com');
    wp_enqueue_style('fonts-gstatic', 'https://fonts.gstatic.com');
    wp_enqueue_style('fonts-alumni-sans', 'https://fonts.googleapis.com/css2?family=Alumni+Sans:wght@400;500;600;700&display=swap');
    wp_enqueue_style('fonts-roboto', 'https://fonts.googleapis.com/css2?family=Roboto&display=swap');

    wp_enqueue_style('style-gulp', get_template_directory_uri() . '/app/css/main.min.css');

    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js');

    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js', array('jquery'), '', true);
    wp_enqueue_script('main', get_template_directory_uri() . '/app/js/main.js', '', 'null', true);

});

//
//add_action('wp_footer', 'scripts_theme');
//
//function scripts_theme(){
//wp_deregister_script('jquery');
//    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js');
//
//    wp_enqueue_script('jquery');
//    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js', array('jquery'), '', true);
////    wp_enqueue_script('slick', get_template_directory_uri() . '/app/js/slick.min.js', array('jquery'), 'null', true);
//    wp_enqueue_script('main', get_template_directory_uri() . '/app/js/main.js', '', 'null', true);
//};
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

//require 'menu.php';

add_action('after_setup_theme', 'theme_register_nav_menu');
function theme_register_nav_menu()
{
    register_nav_menu('top', 'меню в шапці');
    register_nav_menu('bottom', 'меню в підвалі');
}

;
//змінюю атрибут id у тега li
add_filter('nav_menu_item_id', 'filter_menu_item_css_id', 10, 4);
function filter_menu_item_css_id($menu_id, $item, $args, $depth)
{
   return $args->theme_location === 'top' ? '' : $menu_id;
}

////змінюю атрибут class у тега li
//add_filter('nav_menu_css_class', 'filter_nav_menu_css_classes', 10, 4);
//function filter_nav_menu_css_classes( $classes, $item, $args, $depth)
//{
//   if ($args->theme_location === 'top') {
//       $classes = [
//            'header__menu_link_wrapper',
//       ];
//   }
//
//   return $classes;
//}

//змінюю атрибут class у тега li
add_filter('nav_menu_css_class', 'filter_nav_menu_css_classes', 10, 4);
function filter_nav_menu_css_classes( $classes, $item, $args, $depth)
{
    switch ($args->theme_location) {
        case ($args->theme_location === 'top') :
            $classes = [
                'header__menu_link_wrapper'
            ];
            break;
        case ($args->theme_location === 'bottom') :
            $classes = [
                'footer__menu_item_variant',
                'paragraph2'
            ];
            break;
        default:
            alert("Это не выполнится");
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

     } else{

   }

    return $classes;
}

//Добавляю класи силкам
//add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 4);
//function filter_nav_menu_link_attributes( $atts, $item, $args, $depth){
//   if ($args->theme_location === 'top'){
//        $atts ['class']= 'header__menu_link';
//   };
//
//   return $atts;
//}
add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 4);
function filter_nav_menu_link_attributes( $atts, $item, $args, $depth){
    switch ($args->theme_location) {
        case ($args->theme_location === 'top') :
            $atts ['class']= 'header__menu_link';
            break;
        case ($args->theme_location === 'bottom') :
            ($atts ['class']= 'footer__menu_link');
            break;
        default:
            alert("Это не выполнится");
    }


    return $atts;
}



