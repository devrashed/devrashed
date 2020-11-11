<?php 

namespace themexpo\rkslide;


/**
 *  Menu Handle class
 **/

class Menu 
{
	
	function __construct(){
	
   }
  
 public function setting_menu() {

  add_submenu_page( 'edit.php?post_type=responsiveslider', __( 'Settings', 'responsive-slider' ), __( 'Settings', 'responsive-slider' ), 'manage_options', 
  	'slider_setting', [ $this, 'settings_page'] );   
 }

 function settings_page() {
 
  //echo "aa";
  $setting = new settings_page();      
  
/*add_action( 'admin_init', [ $setting, 'setup_sections']); 
  add_action( 'admin_init', [ $setting, 'setup_fields']);*/
  add_action( 'admin_init', [$setting, 'responsive_slider_settings_init']);

 }


   


}






























?>