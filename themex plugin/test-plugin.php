<?php

/**
 * Plugin Name: Test plugin
 * Description: Simple test plugin slider. Set it post & page useing shortcode
 * Plugin URI: https://test.net
 * Author: Rashed khan
 * Author URI: https://themexpo.net
 * Version: 1.0
 * License: GPL2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html 
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

require_once __DIR__ .'/vendor/autoload.php';

/**
 *  Main class
 */
final class rk_slider
{
	
    /**
     * Plugin version
     *
     * @var string
     */

    const version = '1.0';

	function __construct()
	{
	    $this->define_constants();

        register_activation_hook( THEMEXPO_FILE, [ $this, 'activate' ] );

        add_action( 'plugins_loaded', [ $this, 'init_plugin' ] );

	}

    /**
     * Define the required plugin constants
     *
     * @return void
     */ 
  
     public function define_constants() {
        define( 'THEMEXPO_VERSION', self::version );
        define( 'THEMEXPO_FILE', __FILE__ );
        define( 'THEMEXPO_PATH', __DIR__ );
      /*  define( 'THEMEXPO_URL', plugins_url( '', THEMEXPO_PATH_FILE ) );*/
        define( 'THEMEXPO_ASSETS', RK_SLIDER_URL . '/assets' );
     }

   /*  Warning: Use of undefined constant THEMEXPO_PATH_FILE - assumed 'THEMEXPO_PATH_FILE' (this will throw an Error in a future version of PHP) in F:\xampp\htdocs\arcadia\wp-content\plugins\RK responsive slider\rk_responnsive_slider.php on line 54*/
  
     /**
     * Initializes a singleton instance
     *
     * @return \WeDevs_Academy
     */

    public static function init() {
        static $instance = false;

        if ( ! $instance ) {
            $instance = new self();
        }

        return $instance;
    }

    
    /**
     * Initialize the plugin
     *
     * @return void
     */

    public function init_plugin() {
        
     if ( is_admin() ) {
            new themexpo\rkslide\Admin();

        }
     }

    public function activate() {

    $installed = get_option( 'themexpo_installed' );

    if ( ! $installed ) {
        update_option( 'themexpo_installed', time() );
    }

    update_option( 'themexpo_version', THEMEXPO_VERSION );
    }



    
} /*End the class*/
 
 function rk_slider_show() {
    return rk_slider::init();  
}


rk_slider_show(); 
