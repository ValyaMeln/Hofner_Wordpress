<?php
//echo 333333333;
/* Collection of Walker classes*/

if (!defined('ABSPATH')) {
    exit; //Exit if accessed directly
}

register_nav_menus(array(
    'top' => 'Основне',             //'primary' => 'Основне',
    'bottom' => 'Другорядне'         //'secondary'=> 'Другорядне'
));

function estore_primary_menu()
{
    wp_nav_menu(array(
        'theme_location' => 'top', // 'primary'
        'menu_id' => 'top-menu',  //primery-menu,
        'menu_class' => 'header__menu_body header__menu_font',
        'walker' => new EST_Walker_Nav(),
    ));
}

class EST_Walker_Nav extends Walker_Nav_Menu
{
    public $star_row = '';
    public $end_row = '';

    public function start_lvl(&$output, $depth = 0, $args = null)
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
        $classes = array('sub-menu', 'header__dropdown_menu', 'row');  //змінила Клас у випадаючої ul

        $class_names = join(' ', apply_filters('nav_menu_submenu_css_class', $classes, $args, $depth));
        $class_names = $class_names ? ' class="' . esc_attr( $class_names) . '"' : '';

        $output .= "{$n}{$indent}<ul$class_names>{$n}{$this->star_row}";  //початок списку ul
//         var_dump($classes,false);
    }

    /**
     * Ends the list of after the elements are added.
     *
     * @param string $output Used to append additional content (passed by reference).
     * @param int $depth Depth of menu item. Used for padding.
     * @param stdClass $args An object of wp_nav_menu() arguments.
     * @see Walker::end_lvl()
     *
     * @since 3.0.0
     *
     */
    public function end_lvl(&$output, $depth = 0, $args = null)
    {
        if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent = str_repeat($t, $depth);
        $output .= "$indent{$this->end_row}</ul>{$n}";  //закінчення списку ul
    }

    /**
     * Starts the element output.
     *
     * @param string $output Used to append additional content (passed by reference).
     * @param WP_Post $data_object Menu item data object.
     * @param int $depth Depth of menu item. Used for padding.
     * @param stdClass $args An object of wp_nav_menu() arguments.
     * @param int $current_object_id Optional. ID of the current menu item. Default 0.
     * @since 4.4.0 The {@see 'nav_menu_item_args'} filter was added.
     * @since 5.9.0 Renamed `$item` to `$data_object` and `$id` to `$current_object_id`
     *              to match parent class for PHP 8 named parameter support.
     *
     * @see Walker::start_el()
     *
     * @since 3.0.0
     */
    public function start_el(&$output, $data_object, $depth = 0, $args = null, $current_object_id = 0)
    {
        // Restores the more descriptive, specific name for use within this method.
        $menu_item = $data_object;

        if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent = ($depth) ? str_repeat($t, $depth) : '';

//        var_dump($classes);
//        do_shortcode($classes);
//          get_pr($classes, false);
        $classes = empty($menu_item->classes) ? array() : (array)$menu_item->classes;

        $classes[] = 'menu-item-' . $menu_item->ID;
        $classes[] = 'header__menu_link_wrapper';
//        if (in_array('menu-item-has-children', $classes)) {
//            $classes[0] = 'kormulu22';
//        }
//        if (in_array('header__dropdown_menu',$classes) && $args->walker->has_children === 2) {
//            $this->star_row = '<div class="row">';
//            $this->end_row = '</div>';
//        } else {
//            $this->star_row = '';
//            $this->end_row = '';
//        }

        $classes = empty($item->classes) ? array() : (array)$item->classes;
        if ($depth == 0) {
            $classes[] = 'header__menu_link_wrapper';
            $this->star_row = '<div class=" col-lg-12 col-xl-6">';
            $this->end_row = '</div>';
        } else {
            $classes[] = 'top-menu__dropdown-item';
            $this->star_row = '';
            $this->end_row = '';
        }

        /**
         * Filters the arguments for a single nav menu item.
         *
         * @param stdClass $args An object of wp_nav_menu() arguments.
         * @param WP_Post $menu_item Menu item data object.
         * @param int $depth Depth of menu item. Used for padding.
         * @since 4.4.0
         *
         */
        $args = apply_filters('nav_menu_item_args', $args, $menu_item, $depth);

        /**
         * Filters the CSS classes applied to a menu item's list item element.
         *
         * @param string[] $classes Array of the CSS classes that are applied to the menu item's `<li>` element.
         * @param WP_Post $menu_item The current menu item object.
         * @param stdClass $args An object of wp_nav_menu() arguments.
         * @param int $depth Depth of menu item. Used for padding.
         * @since 3.0.0
         * @since 4.1.0 The `$depth` parameter was added.
         *
         */
        $class_names = implode(' ', apply_filters('nav_menu_css_class', array_filter($classes), $menu_item, $args, $depth));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        /**
         * Filters the ID applied to a menu item's list item element.
         *
         * @param string $menu_id The ID that is applied to the menu item's `<li>` element.
         * @param WP_Post $menu_item The current menu item.
         * @param stdClass $args An object of wp_nav_menu() arguments.
         * @param int $depth Depth of menu item. Used for padding.
         * @since 3.0.1
         * @since 4.1.0 The `$depth` parameter was added.
         *
         */
        $id = apply_filters('nav_menu_item_id', 'menu-item-' . $menu_item->ID, $menu_item, $args, $depth);
        $id = $id ? ' id="' . esc_attr($id) . '"' : '';

        $output .= $indent . '<li' . $id . $class_names . '>';
//        get_pr($args, false);
        $atts = array();
        $atts['title'] = !empty($menu_item->attr_title) ? $menu_item->attr_title : '';
        $atts['target'] = !empty($menu_item->target) ? $menu_item->target : '';
        if ('_blank' === $menu_item->target && empty($menu_item->xfn)) {
            $atts['rel'] = 'noopener';
        } else {
            $atts['rel'] = $menu_item->xfn;
        }
        $atts['href'] = !empty($menu_item->url) ? $menu_item->url : '';
        $atts['aria-current'] = $menu_item->current ? 'page' : '';

        $atts['class'] = $menu_item ? 'header__menu_link' : '';

//        $atts['class'] = $menu_item->walker->has_children === 0 ? 'header__menu_link': '';
//        $atts['class'] = ( $args->walker->has_children) ? 'colum' : '';
        /**
         * Filters the HTML attributes applied to a menu item's anchor element.
         *
         * @param array $atts {
         *     The HTML attributes applied to the menu item's `<a>` element, empty strings are ignored.
         *
         * @type string $title Title attribute.
         * @type string $target Target attribute.
         * @type string $rel The rel attribute.
         * @type string $href The href attribute.
         * @type string $aria-current The aria-current attribute.
         * }
         * @param WP_Post $menu_item The current menu item object.
         * @param stdClass $args An object of wp_nav_menu() arguments.
         * @param int $depth Depth of menu item. Used for padding.
         * @since 3.6.0
         * @since 4.1.0 The `$depth` parameter was added.
         *
         */
        $atts = apply_filters('nav_menu_link_attributes', $atts, $menu_item, $args, $depth);

        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (is_scalar($value) && '' !== $value && false !== $value) {
                $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        /** This filter is documented in wp-includes/post-template.php */
        $title = apply_filters('the_title', $menu_item->title, $menu_item->ID);

        /**
         * Filters a menu item's title.
         *
         * @param string $title The menu item's title.
         * @param WP_Post $menu_item The current menu item object.
         * @param stdClass $args An object of wp_nav_menu() arguments.
         * @param int $depth Depth of menu item. Used for padding.
         * @since 4.4.0
         *
         */
        $title = apply_filters('nav_menu_item_title', $title, $menu_item, $args, $depth);

        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . $title . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        /**
         * Filters a menu item's starting output.
         *
         * The menu item's starting output only includes `$args->before`, the opening `<a>`,
         * the menu item's title, the closing `</a>`, and `$args->after`. Currently, there is
         * no filter for modifying the opening and closing `<li>` for a menu item.
         *
         * @param string $item_output The menu item's starting HTML output.
         * @param WP_Post $menu_item Menu item data object.
         * @param int $depth Depth of menu item. Used for padding.
         * @param stdClass $args An object of wp_nav_menu() arguments.
         * @since 3.0.0
         *
         */
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $menu_item, $depth, $args);
    }

    /**
     * Ends the element output, if needed.
     *
     * @param string $output Used to append additional content (passed by reference).
     * @param WP_Post $data_object Menu item data object. Not used.
     * @param int $depth Depth of page. Not Used.
     * @param stdClass $args An object of wp_nav_menu() arguments.
     * @since 5.9.0 Renamed `$item` to `$data_object` to match parent class for PHP 8 named parameter support.
     *
     * @see Walker::end_el()
     *
     * @since 3.0.0
     */
    public function end_el(&$output, $data_object, $depth = 0, $args = null)
    {
        if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $output .= "</li>{$n}";
    }

}

