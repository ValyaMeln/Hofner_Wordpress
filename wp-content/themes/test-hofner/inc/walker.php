<?php
//echo 333333333;
/* Collection of Walker classes*/
/*
    wp_nav_menu()

   <div class="menu-container">
    <ul>  // start_lvl()
        <li><a><span>  // start_el()

            description</a></span></li>  // end_el()
        <li><a>Link</a></li>
        <li><a>Link</a></li>
        <li><a>Link</a></li>
    </ul> // end_lvl()
</div>

*/

// свой класс построения меню:
//class My_Walker_Nav_Menu extends Walker_Nav_Menu
//{
//
//    function start_lvl( &$output, $depth ){ //ul
//        $indent = str_repeat("\t",$depth);
//        $submenu = ($depth > 0) ? ' sub-menu' : '';
//        $output .= "\n$indent<ul class=\"dropdown-menu$submenu depth_$depth\">\n";
//    }
//    function start_el(&$output, $item, $depth=0, $args=array(), $id=0) { //li a span
//
//        $indent = ( $depth ) ? str_repeat("\t",$depth) : '';
//
//        $li_attributes = '';
//        $class_names = $value = '';
//
//        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
//
//        $classes[] = ($args->walker->has_children) ? 'dropdown' : '';
//        $classes[] = ($item->current || $item->current_item_anchestor) ? 'active' : '';
//        $classes[] = 'menu-item-' . $item->ID;
//        if( $depth && $args->walker->has_children ){
//            $classes[] = 'dropdown-submenu';
//        }
//
//        $class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter( $classes ), $item, $args ) );
//        $class_names = ' class="' . esc_attr($class_names) . '"';
//
//        $id = apply_filters('nav_menu_item_id', 'menu-item-'.$item->ID, $item, $args);
//        $id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';
//
//        $output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';
//
//        $attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
//        $attributes .= ! empty( $item->target ) ? ' target="' . esc_attr($item->target) . '"' : '';
//        $attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
//        $attributes .= ! empty( $item->url ) ? ' href="' . esc_attr($item->url) . '"' : '';
//
//        $attributes .= ( $args->walker->has_children ) ? ' class="dropdown-toggle" data-toggle="dropdown"' : '';
//
//        $item_output = $args->before;
//        $item_output .= '<a' . $attributes . '>';
//        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
//        $item_output .= ( $depth == 0 && $args->walker->has_children ) ? ' <b class="caret"></b></a>' : '</a>';
//        $item_output .= $args->after;
//
//        $output .= apply_filters ( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
//    }
////    function end_el() {  //closing li a span
////
////    }
////    function end_lvl( ) { //closing ul
////
////    }
//}


class WalkerNavMenuClass extends Walker_Nav_Menu
{

    public function start_lvl(&$output, $depth = 0, $args = array())
    {
        if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent = str_repeat($t, $depth);

        // Default class.
        $classes = array('sub-menu', 'header__dropdown_menu', 'paragraph2');

        $class_names = join(' ', apply_filters('nav_menu_submenu_css_class', $classes, $args, $depth));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        $output .= "{$n}{$indent}<ul$class_names>{$n}";
        $output .= "{$n}";
    }

    public function end_lvl(&$output, $depth = 0, $args = array())
    {
        if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent = str_repeat($t, $depth);
        $output .= "$indent</ul>{$n}";
        $output .= "{$n}";
    }

    public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
        if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent = ($depth) ? str_repeat($t, $depth) : '';

        $classes = empty($item->classes) ? array() : (array)$item->classes;
        $classes [] = 'menu-item-' . $item->ID;
        if (in_array('menu-item-has-children', $classes)) {
            $classes[] = 'header__menu_link_wrapper';
        }
//        if ($depth == 0) {
//            $classes[] = 'top-menu__item';
//        } else {
//            $classes[] = 'top-menu__dropdown-item';
//        }
        //
        //$classes[] = 'menu-item-' . $item->ID;
        /*if(get_permalink() != get_permalink(2) && ($item->url == get_permalink(28) || $item->url == get_permalink(39))) {
            if (stripos(get_permalink(), $item->url) !== false) {
                $classes[] = 'current-menu-item';
            }
        }*/

        $args = apply_filters('nav_menu_item_args', $args, $item, $depth);

        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

//        $class_names = str_replace('menu-item-has-children', 'top-menu__dropdown js-menu-dropdown', $class_names);
        $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args, $depth);
        $id = $id ? ' id="' . esc_attr($id) . '"' : '';

        $output .= $indent . '<li' . $id . $class_names . '>';
//        get_pr($args, false);
        $classes = array();
        if ($depth === 0) {

        } else {
            $classes[] = 'top-menu__dropdown-link';
        }
        $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

        $attributes .= ($args->walker->has_children) ? ' class="header__menu_link" data-toggle="dropdown"' : '';

        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
        $item_output .= ($depth == 0 && $args->walker->has_children) ? ' <b class="caret"></b></a>' : '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);


        $a_class = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
        $a_class = esc_attr($a_class) . ' ' . $args->a_class;
        $a_class = str_replace('header__menu_link_wrapper', 'current-menu-item active', $a_class);
        $a_class = str_replace(['menu-item ', 'menu-item-type-custom ', 'menu-item-object-custom ', 'top-menu__dropdown-item ', 'top-menu__item '], '', $a_class);

//        get_pr($args, false);
        $atts = array();
        $atts['title'] = !empty($item->attr_title) ? $item->attr_title : '';
        $atts['target'] = !empty($item->target) ? $item->target : '';
        if ('_blank' === $item->target && empty($item->xfn)) {
            $atts['rel'] = 'noopener noreferrer';
        } else {
            $atts['rel'] = $item->xfn;
        }
        $atts['class'] = $a_class;
//        $atts['rel'] = !empty($item->xfn) ? $item->xfn : '';
        $atts['href'] = !empty($item->url) ? $item->url : '';
        $atts['aria-current'] = $item->current ? 'page' : '';
        $atts['data-toggle'] = $args->walker->has_children === 1 ? 'header__menu_link_wrapper' : '';
        $atts['class'] = $args->walker->has_children === 1 ? 'header__menu_link' : '';

        $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args, $depth);

        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }
        $title = apply_filters('the_title', $item->title, $item->ID);

        $title = apply_filters('nav_menu_item_title', $title, $item, $args, $depth);

        $pos = strpos($attributes, 'menu-item-has-children');
        if ($pos === false) {
            $item_output = $args->before;
        } else {
            $item_output = '<div class="top-menu__dropdown-btn js-menu-dropdown-btn">';
        }
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . $title . $args->link_after;
        $item_output .= '</a>';
        if ($pos === false) {
            $item_output .= $args->after;
        } else {
            $item_output .= ' <span class="icon icon-i-caret-down"></span></div>';
        }

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }

    public function end_el(&$output, $item, $depth = 0, $args = array())
    {
        if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $output .= "</li>{$n}";
        $output .= "{$n}";
    }
}