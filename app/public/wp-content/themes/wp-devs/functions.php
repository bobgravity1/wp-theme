<?php 

function wpdevs_load_scripts(){
    // this brings the address of our styled shites.
    // get_stylesheet_uri loads the main style sheet; the third argument tells if there are any dependencies
    wp_enqueue_style( 'wp-devs-style', get_stylesheet_uri(), array(), filemtime( 
        // the filemtime gives a version specific to the timestamp... forcing the browser to
        //reinstall the css stylesheet everytime. this makes sure the style is not cached
        //REMOVE THIS AFTER DEVELOPMENT MODE
        get_template_directory() . '/style.css' ), 'all' );
    wp_enqueue_style( 'google-fonts', "https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap", array(), null );
    wp_enqueue_script( 'dropdown', get_template_directory_uri() . "/js/dropdown.js", array(), '1.0', true );
}
//  wp_enqueue_style is also used to load fonts etcl


// this adds a wordpress action that comes in after the wordpress site loads. 
// we make a function run on the action which loads the script and calls the stylesheet
// make a hook that calls the function??

// the menu option will now be visible in the WP admin panel
add_action( 'wp_enqueue_scripts', 'wpdevs_load_scripts' );

// this just helps us organize our code. 
function wpdevs_config(){
    register_nav_menus(
        // these menus will be available as options for where to show the sections
        array(
            'wp_devs_main_menu'=>'Main Menu',
            'wp_devs_footer_menu'=>'Footer Menu'
        )
    );
    // you can check the documentation to see ALL the parameters you can add. much more than just height and width
$args=array(
    'height'=>225,
    'width'=>1920
);
// this will now create a header option in the appearance panel under "header"
    add_theme_support( 'custom-header', $args );
}

global $wp_version;
if ( version_compare( $wp_version, '3.4', '>=' ) ) :
	add_theme_support( 'custom-header' );
else :
	add_custom_image_header( $wp_head_callback, $admin_head_callback );
endif;
// this hook will be triggered after setting up theme  ---> 'after the theme is set up =>after setup theme run
//the wpdevs_config function
//the priority is 0 -> this means that everything above will be set up after this. this takes priority
// these support is good for custom backgrounds. custom headers. etc.
add_action( 'after_setup_theme', 'wpdevs_config', 0 );