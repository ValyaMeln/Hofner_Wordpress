<?php
//echo 2222222222222;


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
function filter_nav_menu_css_classes($classes, $item, $args, $depth)
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
//if ($depth == 2) {
//    $classes = 'header__dropdown_menu"';
//}
//else {
//    $classes = ' row"';
//}

//    $output .= $indent . '<li' . $classes . '>';
    if ($args->theme_location === 'top') {
        $classes = [
            'header__dropdown_menu',
            'row'
        ];

    } else {
        $classes = [
            $depth[3],
            'header__dropdown-menu_results_shops',
        ];
    }

    return $classes;
}

//add_filter('nav_menu_submenu_css_class', 'filter_nav_menu_submenu_css_class', 10, 3);
//function filter_nav_menu_submenu_css_class($classes, $args, $depth)
//{
//    if ($args->theme_location === 'top') {
//    $depth ===[1] ;
//        $classes = [
//            'header__dropdown_menu',
//            'row'
//        ];
//
//    } else{
//
//    }
//
//    return $classes;
//}

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
function filter_nav_menu_link_attributes($atts, $item, $args, $depth)
{
    switch ($args->theme_location) {
        case ($args->theme_location === 'top') :
            $atts ['class'] = 'header__menu_link';
            break;
        case ($args->theme_location === 'bottom') :
            ($atts ['class'] = 'footer__menu_link');
            break;
        default:
            alert("Это не выполнится");
    }


    return $atts;
}
