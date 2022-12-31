<?php 

function wpdevs_load_scripts(){
    // this brings the address of our styled shites.
    // get_stylesheet_uri loads the main style sheet; the third argument tells if there are any dependencies
    wp_enqueue_style( 'wp-devs-style', get_stylesheet_uri(), array(), filemtime( 
        // the filemtime gives a version specific to the timestamp... forcing the browser to
        //reinstall the css stylesheet everytime. this makes sure the style is not cached
        //REMOVE THIS AFTER DEVELOPMENT MODE
        get_template_directory() . '/style.css' ), 'all' );
    wp_enqueue_style( 'google-fonts', "https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap", array() );
    wp_enqueue_script( 'dropdown', get_template_directory_uri() . "/js/dropdown.js", array(), '1.0', true );
}
//  wp_enqueue_style is also used to load fonts etcl



// this adds a wordpress action that comes in after the wordpress site loads. 
// we make a function run on the action which loads the script and calls the stylesheet
// make a hook that calls the function??
add_action( 'wp_enqueue_scripts', 'wpdevs_load_scripts' );

register_nav_menus(
    array(
        'wp_devs_main_menu'=>'Main Menu'
    )
);