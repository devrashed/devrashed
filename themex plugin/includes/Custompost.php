<?php
namespace themexpo\rkslide;

/**
 * 
 */
class Custompost 
{
	
/**
 * register post type 
 */	

public function rk_responsive_slider_register() {
	
	  $labels = array(
		'name'                 => __( 'Responsive Slider', 'rk-responsive-slider' ),
		'singular_name'        => __( 'Responsive Slider', 'rk-responsive-slider' ),
		'all_items'            => __( 'All Responsive Slider', 'rk-responsive-slider' ),
		'add_new'              => __( 'Add New Responsive Slider', 'rk-responsive-slider' ),
		'add_new_item'         => __( 'Add New Responsive Slider', 'rk-responsive-slider' ),
		'edit_item'            => __( 'Edit Responsive Slider', 'rk-responsive-slider' ),
		'new_item'             => __( 'New Responsive Slider', 'rk-responsive-slider' ),
		'view_item'            => __( 'View Responsive Slider', 'rk-responsive-slider' ),
		'search_items'         => __( 'Search Responsive Slider', 'rk-responsive-slider' ),
		'not_found'            => __( 'No Responsive Slider found', 'rk-responsive-slider' ),
		'not_found_in_trash'   => __( 'No Responsive Slider found in Trash', 'rk-responsive-slider' ), 
		'parent_item_colon'    => ''
		
	);
	
	$args = array(
		'labels'               => $labels,
		'public'               => true,
		'publicly_queryable'   => true,
		'_builtin'             => false,
		'show_ui'              => true, 
		'query_var'            => true,
		'rewrite'              => array( "slug" => "responsiveslider" ),
		'capability_type'      => 'post',
		'hierarchical'         => false,
		'menu_position'        => 15,
		'supports'             => array( 'title','thumbnail', 'page-attributes' ),
		'taxonomies'           => array(),
		'has_archive'          => true,
		'show_in_nav_menus'    => false,
		'menu_icon'            => 'dashicons-media-document',
	);
	
	register_post_type( 'responsiveslider', $args );	
 }
   
	






} /*end the class*/

?>