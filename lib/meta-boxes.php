<?php
add_filter( 'cmb_meta_boxes', 'cmb_sample_metaboxes' );

function cmb_sample_metaboxes( array $meta_boxes ) {

	$prefix = '_cmb_';

	$meta_boxes[] = array(
		'id' => 'about_metabox',
		'title' => 'About meta',
		'pages' => array('page'),
		'show_on' => array( 'key' => 'id', 'value' => array( 50 ) ),
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true,
		'fields' => array(
			array(
				'name' => 'Short about',
				'desc' => 'Viewable on the frontpage',
				'id'   => $prefix . 'short_about',
				'type' => 'wysiwyg',
			)
		),
	);

	$meta_boxes[] = array(
		'id'         => 'postype_metabox',
		'title'      => '... Settings',
		'pages'      => array( 'post', ),
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true,
		'fields'     => array(
			array(
				'name' => 'Radio option',
				'desc' => '1 or 2',
				'id'   => $prefix . 'radio',
				'type' => 'radio',
				'options' => array (
					'one' => array (
			'name' => '1',
			'value'	=> '1'
		),
					'two' => array (
			'name' => '2',
			'value'	=> '2'
		),
	),
			),
			array(
				'name' => 'text',
				'desc' => '...',
				'id'   => $prefix . 'text',
				'type' => 'text',
			),
		),
	);

	return $meta_boxes;
}
?>