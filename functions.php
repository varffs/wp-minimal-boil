<?php 
function my_scripts_method() {

    /*
    jquery loaded from cdn.js in footer.php with a local failsafe. or you can enqueue here:
    
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', '//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js');
    wp_enqueue_script('jquery','','','',true);
    */
    
    /* 	
	wordpress includes quite a few js libs by default, here is the ui draggable 
	wp_enqueue_script( 'jquery-ui-draggable','','','',true ); 
	*/
	
    $templateuri = get_template_directory_uri() . '/js/';
  
	/* lib.js is to bundle plugins. my.js is your scripts. enqueue more files as needed */

    $jslib = $templateuri."lib.js";
    wp_enqueue_script( 'jslib', $jslib,'','',true);
    $myscripts = $templateuri."my.js";
    wp_enqueue_script( 'myscripts', $myscripts,'','',true);
    
}     
add_action('wp_enqueue_scripts', 'my_scripts_method');
	
if ( function_exists( 'add_theme_support' ) ) { 
  	add_theme_support( 'post-thumbnails' ); 
}
if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'opengraph', 300, 300, true );
	add_image_size( 'name', 199, 299, true );
}

get_template_part( 'lib/post-types' );
get_template_part( 'lib/meta-boxes' );
add_action( 'init', 'cmb_initialize_cmb_meta_boxes', 9999 );
function cmb_initialize_cmb_meta_boxes() {
	if ( ! class_exists( 'cmb_Meta_Box' ) )
		require_once 'lib/metabox/init.php';
}

/* disable that freaking admin bar */
add_filter('show_admin_bar', '__return_false');
/* turn off version in meta */
function no_generator() { return ''; }  
add_filter( 'the_generator', 'no_generator' );
?>