
<?php


//menus 
function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'extra-menu' => __( 'Extra Menu' )
        )
    );
}
add_action( 'init', 'register_my_menus' );


//widget's

function arphabet_widgets_init() {

    register_sidebar( array(
        'name'          => 'Copyright',
        'id'            => 'copyright',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<li class="copyright-li">',
        'after_title'   => '</li>',
    ) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );


require('theme-options.php');
?>
