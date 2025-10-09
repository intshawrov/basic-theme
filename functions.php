<?php


add_action('after_setup_theme', function(){

    load_theme_textdomain('basic_theme_textdomain' , '/langugaes');
    add_theme_support('post_thumbnails');
    add_theme_support('custom-logo');
     
      


     register_nav_menu('header-menu', 'Header Menu');

     register_nav_menu('footer-menu', 'Footer Menu');

     require_once('includes/bootstrap-nav-walker.php');
     require_once('includes/redux-options.php');
     require_once('libraries/tgmp/class-tgm-plugin-activation.php');
     require_once('includes/tgmp-activation.php');
});


function my_theme_setup() {
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'my_theme_setup');




function my_theme_widgets_init() {
    register_sidebar( array(
        'name'          => __(  'Main Sidebar' ),
        'id'            => 'main-sidebar',
        'description'   => __( 'Add widgets here to appear in your sidebar.', 'main-sidebar' ),
        'before_widget' => '<div class="sidebar-widget search card p-4 mb-3 p-2>',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar(array(
        'name'          =>'Footer One',
        'id'            => 'footer-one',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
    ));

    register_sidebar(array(
        'name'          =>'Footer Two',
        'id'            => 'footer-two',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
    ));

    register_sidebar(array(
        'name'          =>'Footer Three',
        'id'            => 'footer-three',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
    ));

    register_sidebar(array(
        'name'          =>'Footer Four',
        'id'            => 'footer-four',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
    ));



   
}
add_action( 'widgets_init', 'my_theme_widgets_init' );






