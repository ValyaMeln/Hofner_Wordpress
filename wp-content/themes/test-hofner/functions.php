<?php
//include 'menu.php';
//if (defined('JETPACK__VERSION')){
//    require get_template_directory() . '/inc/jetpack.php';
//}
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


add_filter('upload_mimes', 'svg_upload_allow');

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow($mimes)
{
    $mimes['svg'] = 'image/svg+xml';

    return $mimes;
}

add_filter('wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5);

# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type($data, $file, $filename, $mimes, $real_mime = '')
{

    // WP 5.1 +
    if (version_compare($GLOBALS['wp_version'], '5.1.0', '>='))
        $dosvg = in_array($real_mime, ['image/svg', 'image/svg+xml']);
    else
        $dosvg = ('.svg' === strtolower(substr($filename, -4)));

    // mime тип был обнулен, поправим его
    // а также проверим право пользователя
    if ($dosvg) {

        // разрешим
        if (current_user_can('manage_options')) {

            $data['ext'] = 'svg';
            $data['type'] = 'image/svg+xml';
        } // запретим
        else {
            $data['ext'] = $type_and_ext['type'] = false;
        }

    }

    return $data;
}

add_action( 'init', 'register_post_types' );
function register_post_types(){
    register_post_type( 'applications', [
        'label'  => null,
        'labels' => [
            'name'               => 'Заявки з форми', // основное название для типа записи
            'singular_name'      => 'Заявка', // название для одной записи этого типа
            'add_new'            => 'Добавить ', // для добавления новой записи
            'add_new_item'       => 'Добавление ', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование ', // для редактирования типа записи
            'new_item'           => 'Новое', // текст новой записи
            'view_item'          => 'Смотреть ', // для просмотра записи этого типа.
            'search_items'       => 'Искать ', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Заявки з форми', // название меню
        ],
        'description'         => '',
        'public'              => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu'        => null, // показывать ли в меню адмнки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => null,
        'menu_icon'           => null,
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => false,
        'supports'            => [ 'title', 'editor' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ] );
}

// хук для регистрации
add_action( 'init', 'create_taxonomy' );
function create_taxonomy(){

    // список параметров: wp-kama.ru/function/get_taxonomy_labels
    register_taxonomy( 'taxonomy', [ 'products' ], [
        'label'                 => '', // определяется параметром $labels->name
        'labels'                => [
            'name'              => 'Виробники',
            'singular_name'     => 'Виробник',
            'search_items'      => 'Search Genres',
            'all_items'         => 'All Genres',
            'view_item '        => 'View Genre',
            'parent_item'       => 'Parent Genre',
            'parent_item_colon' => 'Parent Genre:',
            'edit_item'         => 'Edit Genre',
            'update_item'       => 'Update Genre',
            'add_new_item'      => 'Add New Genre',
            'new_item_name'     => 'New Genre Name',
            'menu_name'         => 'Виробники',
            'back_to_items'     => '← Back to Genre',
        ],
        'description'           => '', // описание таксономии
        'public'                => true,
        // 'publicly_queryable'    => null, // равен аргументу public
        // 'show_in_nav_menus'     => true, // равен аргументу public
        // 'show_ui'               => true, // равен аргументу public
        // 'show_in_menu'          => true, // равен аргументу show_ui
        // 'show_tagcloud'         => true, // равен аргументу show_ui
        // 'show_in_quick_edit'    => null, // равен аргументу show_ui
        'hierarchical'          => false,

        'rewrite'               => true,
        //'query_var'             => $taxonomy, // название параметра запроса
        'capabilities'          => array(),
        'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
        'show_admin_column'     => false, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
        'show_in_rest'          => null, // добавить в REST API
        'rest_base'             => null, // $taxonomy
        // '_builtin'              => false,
        //'update_count_callback' => '_update_post_term_count',
    ] );
}

function formSend()
{
    $json = [];

    //дані з форми
    $post = $_POST;

    $json['status'] = false;

    $name = isset($post['name']) ? wp_strip_all_tags($post['name']) : false; ////Це означає, що в input є name="name"
    $email = isset($post['email ']) ? wp_strip_all_tags($post['email ']) : false;  ////Це означає, що в input є name="phone"
//    $phone = isset($post['phone']) ? wp_strip_all_tags($post['phone']) : false;  ////Це означає, що в input є name="phone"
//    $massage = isset($post['massage']) ? wp_strip_all_tags($post['massage']) : false;  ////Це означає, що в input є name="massage"

    //кому надіслати лист
    $to = get_option('admin_email');
    // $to ='valya0322@ukr.net'

    //валідація
    if ($name === '') {
        $json['error']['name']['status'] = true;
        $json['error']['name']['text'] = 'Обов\'язкове поле';
    }
    if ($email === '') {
        $json['error']['email']['status'] = true;
        $json['error']['email']['text'] = 'Обов\'язкове поле';
    } elseif ( !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $json['error']['email']['status'] = true;
        $json['error']['email']['text'] = 'Не вірний формат email';
    }
//    if ($phone === ''){
//        $json['error']['phone']['status'] = true;
//        $json['error']['phone']['text'] = 'Обов\'язкове поле';
//    }
    if (!isset($json['error'])) {
        $headers = array(
            'From: ' . get_bloginfo('name') . ' <' . get_bloginfo('admin_email') . '>',
            'content-type: text/html',
        );
        //побудова тіла листа
        $t = '<table cellspacing="0">';

        foreach ($post as $key => $row) {
//            if ($key !== 'action' && $key !== 'layout' && $key !== 'postID') {
            if ($key !== 'action') {
                if (is_array($row)) {
                    $t .= '<tr><td>' . str_replace('_', ' ', $key) . ':</td></tr>';
//                    $t .= '<tr><td>' . str_replace('_', ' ', $key) . ':</td><td>' . implode(', ', $row) . '</td></tr>';
                }
//                else {
//                    $t .= '<tr><td>' . str_replace('_', ' ', $key) . ':</td></tr>';
//                }
            }
        }
        $json['status'] = true;
        //надсилання листа
        $success = wp_mail($to, 'Admin' . get_bloginfo('name'), $t, $headers);

        $my_post = array(
            'post_title' => 'Відгук від | ' . wp_strip_all_tags( $_POST['product']),
            'post_content' => $t,
            'post_status' => 'publish',
            'post_type' => 'applications',
            'post_author' => 1
        );
        wp_insert_post( $my_post);
    }
    else{
        $json['status'] = false;
    }

    //додавання заявки в бекенд
    wp_send_json( $json);

    exit();
}

add_action('wp_ajax_formSend', 'formSend');
add_action('wp_ajax_nopriv_formSend', 'formSend');
