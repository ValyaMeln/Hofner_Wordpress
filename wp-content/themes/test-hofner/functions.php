<?php

add_action('wp_enqueue_scripts', function () {

//    wp_enqueue_style('favicon-152', et_template_directory_uri() . 'app/img/favicon-h.png');
//    wp_enqueue_style('favicon-32', et_template_directory_uri() . 'app/img/favicon-h.png');
//    wp_enqueue_style('favicon-16', et_template_directory_uri()  . 'app/img/favicon-h.png');
    wp_enqueue_style('fonts-googleapis', 'https://fonts.googleapis.com');
    wp_enqueue_style('fonts-gstatic', 'https://fonts.gstatic.com');
    wp_enqueue_style('fonts-alumni-sans', 'https://fonts.googleapis.com/css2?family=Alumni+Sans:wght@400;500;600;700&display=swap');
    wp_enqueue_style('fonts-roboto', 'https://fonts.googleapis.com/css2?family=Roboto&display=swap');
    wp_enqueue_style('style', get_template_directory_uri() . '/app/css/main.min.css');

    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.min.js');

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script('main', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js', array(), 'null', false);
    wp_enqueue_script('main', get_template_directory_uri() . '/app/js/main.js', array(''), 'null', true);
});


//add_action('wp_enqueue_scripts', 'theme_name_scripts');
//// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
//function theme_name_scripts()
//{
//    wp_enqueue_style('style-name', get_template_directory_uri() . '/app/css/main.min.css');
////    wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
//}

//<!--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->
//<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"-->
//<!--        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"-->
//<!--        crossorigin="anonymous"></script>-->

//<!--<script src="js/main.js"></script>-->

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');


