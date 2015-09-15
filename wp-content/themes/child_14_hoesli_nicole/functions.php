<?php
/* Twenty Fourteen functions and definitions*/
/* Calling parentstyle with several style.css*/

/*Setting 'parent-style' as a dependency will ensure that the child theme stylesheet loads after it.
function child_14_hoesli_nicole_scripts() {
		wp_enqueue_script( 'carousel', get_stylesheet_directory_uri() . '/js/owl.carousel.js' );
		wp_enqueue_script( 'carousel.min', get_stylesheet_directory_uri() . '/js/owl.carousel.min.js' );
		wp_enqueue_script( 'jquery-1.9.1.min', get_stylesheet_directory_uri() . '/js/jquery-1.9.1.min.js' );
		wp_enqueue_script( 'owl', get_stylesheet_directory_uri() . '/js/owl.js' );
}
add_action( 'wp_enqueue_scripts', 'child_14_hoesli_nicole_scripts' );

function catchbox_child_enqueue_styles() {
		wp_enqueue_style( 'owl', get_stylesheet_directory_uri() . '/css/owl.css' );
		wp_enqueue_style( 'carousel', get_stylesheet_directory_uri() . '/css/owl.carousel.css' );
		wp_enqueue_style( 'theme', get_stylesheet_directory_uri() . '/css/owl.theme.css' );
		wp_enqueue_style( 'transitions', get_stylesheet_directory_uri() . '/css/owl.transitions.css' );
}
add_action( 'wp_enqueue_scripts', 'catchbox_child_enqueue_styles' );



add_action( 'wp_enqueue_scripts', 'load_javascript' );

function load_javascript() {
        wp_register_script( 'owl-script', get_stylesheet_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), false, true );
        wp_enqueue_script( 'owl-script' );

        wp_register_script( 'owl', get_stylesheet_directory_uri() . '/js/owl.js', array('jquery'), false, true );
        wp_enqueue_script( 'owl' );

        wp_register_style('owl-style-carousel',  get_stylesheet_directory_uri() . '/js/owl.carousel.js.');

        wp_register_style('isotope',  get_stylesheet_directory_uri() . '/js/isotope.pkgd.js.');
        wp_enqueue_style('isotope');

        wp_register_style('isotope.min',  get_stylesheet_directory_uri() . '/js/isotope.pkgd.min.js.');
        wp_enqueue_style('isotope.min');

}*/
