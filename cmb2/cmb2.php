<?php 
add_action( 'cmb2_admin_init', 'cmb2_sample_metaboxes' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_sample_metaboxes() {

	/**
	 * Initiate the metabox
	 */
	$global_media = new_cmb2_box( array(
		'id'            => 'global-meta',
		'title'         => __( 'Test Metabox', 'cmb2' ),
		'object_types'  => array( 'service-post', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

	// Regular text field
	$global_media->add_field( array(
		'name'       => __( 'global join now', 'cmb2' ),
		'desc'       => __( ' Join Now', 'cmb2' ),
		'id'         =>  'global-join',
		'type'       => 'text',
	) );
		// Regular text field
	$global_media->add_field( array(
		'name'       => __( 'global join link', 'cmb2' ),
		'desc'       => __( ' Join Now link', 'cmb2' ),
		'id'         =>  'join-link',
		'type'       => 'text',
	) );


}