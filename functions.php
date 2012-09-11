<?php 
function my_scripts_method() {
    wp_deregister_script( 'jquery' );
/* use google cdn jquery for potential cache speed advantage */
    wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js');
    wp_enqueue_script('jquery','','','',true);
/* wp includes quite a few js libs by default, here is the ui draggable */
/* wp_enqueue_script( 'jquery-ui-draggable','','','',true ); */
    $templateuri = get_template_directory_uri() . '/js/';
/* fallback or local jquery - remove on production if u want */
    $localjq = $templateuri."jquery-1.8.1.min.js";
    wp_enqueue_script( 'localjq', $localjq,'','',true);
/* lib to bundle production js libaries */
    $jslib = $templateuri."lib.js";
    wp_enqueue_script( 'jslib', $jslib,'','',true);
/* follow this pattern to enqueue your scripts */
    $myscripts = $templateuri."my.js";
    wp_enqueue_script( 'myscripts', $myscripts,'','',true);
}     
add_action('wp_enqueue_scripts', 'my_scripts_method');
	
if ( function_exists( 'add_theme_support' ) ) { 
  	add_theme_support( 'post-thumbnails' ); 
}
if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'name', 199, 299, true );
}

get_template_part( 'lib/meta-boxes' );
add_action( 'init', 'cmb_initialize_cmb_meta_boxes', 9999 );
function cmb_initialize_cmb_meta_boxes() {
	if ( ! class_exists( 'cmb_Meta_Box' ) )
		require_once 'lib/metabox/init.php';
}
?>