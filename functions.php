
<?php
/** Step 2 (from text above). */
add_action( 'admin_menu', 'my_menu' );

/** Step 1. */
function my_menu() {
    add_options_page(
        'My Options',
        'Home Greeting Text',
        'manage_options',
        'my-unique-identifier',
        'my_options'
    );
}

/** Step 3. */
function my_options() {
    if ( !current_user_can( 'manage_options' ) ) {
        wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
    }
    echo 'Here is where I output the HTML for my screen.';
    echo '</div><pre>';
}


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


?>
