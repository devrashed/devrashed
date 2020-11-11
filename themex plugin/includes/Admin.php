<?php

namespace themexpo\rkslide;


 /**
  * 
  */
 class Admin 
 {
 	
 	function __construct()
 	{        
	 
    $custompost = new Custompost();

    add_action( 'init', [ $custompost, 'rk_responsive_slider_register' ] ); 
    
    $adminmenu = new Menu();  

    add_action( 'admin_menu', [ $adminmenu, 'setting_menu' ] ); 

  }
   

  
   

 }