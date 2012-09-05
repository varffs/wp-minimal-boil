<?php 
function my_scripts_method() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js');
    wp_enqueue_script('jquery','','','',true);
//  wp_enqueue_script( 'jquery-ui-draggable','','','',true );
    $templateuri = get_template_directory_uri() . '/js/';
// follow this pattern to enqueue your scripts
    $myscripts = $templateuri."script.js";
    wp_enqueue_script( 'myscripts', $myscripts,'','',true);
}     
	add_action('wp_enqueue_scripts', 'my_scripts_method');

	
if ( function_exists( 'add_theme_support' ) ) { 
  	add_theme_support( 'post-thumbnails' ); 
}


get_template_part( 'lib/meta-boxes' );
add_action( 'init', 'cmb_initialize_cmb_meta_boxes', 9999 );
function cmb_initialize_cmb_meta_boxes() {
	if ( ! class_exists( 'cmb_Meta_Box' ) )
		require_once 'lib/metabox/init.php';
}
?>