<?php 

function my_scripts_method() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js');
    wp_enqueue_script( 'jquery' );
//    wp_enqueue_script( 'jquery-ui-draggable' );
    $templateuri = get_template_directory_uri() . '/js/';
// follow this pattern to enqueue your scripts
    $myscripts = $templateuri."script.js";
    wp_enqueue_script( 'myscripts', $myscripts);
}    
 
	add_action('wp_enqueue_scripts', 'my_scripts_method');

	
if ( function_exists( 'add_theme_support' ) ) { 
  	add_theme_support( 'post-thumbnails' ); 
//	set_post_thumbnail_size( 200, 200 );
}

?>