<?php
/**
 * Theme functions and definitions.
 *
 * Sets up the theme and provides some helper functions
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 *
 * For more information on hooks, actions, and filters,
 * see http://codex.wordpress.org/Plugin_API
 *
 * @package Aurno
 */


// Exit if directly access
if(!defined ('ABSPATH') ){
    exit;
}
/**
 * Require Class Autoloader
 * @Package Aurno
 */
require_once __DIR__. '/vendor/autoload.php';


/**
 * Class and Traits instance namespaces loaded
 * @Package Aurno
 */
use AURNO\THEME\Traits\Singleton;
use AURNO\THEME\Classes\Setup;
use AURNO\THEME\Classes\Assets;
use AURNO\THEME\Classes\Widgets;
use AURNO\THEME\Classes\Menus;

/**
 * Main Theme Class
 * @Package Aurno
 */
class AURNO {
    use Singleton;
    public function __construct(){  
        //Load theme constants     
        $this->aurno_theme_constants();

        // Load Classes
        Setup::get_instance();
        Assets::get_instance();
        Widgets::get_instance();
        Menus::get_instance();
    }

    /**
     * Define theme constants
     * @Package Aurno
     */
    public static function aurno_theme_constants(){
      
        $version = self::theme_version();

		// Theme version.
		define( 'AURNO_THEME_VERSION', $version );

        //Theme Directory
        if(!defined('AURNO_DIR_PATH')){
            define('AURNO_DIR_PATH', untrailingslashit(get_template_directory()));
        }

        //Theme Directory URI
        if(!defined('AURNO_DIR_URI')){
            define('AURNO_DIR_URI', untrailingslashit(get_template_directory_uri()));
        }


		// Javascript and CSS Paths.
        if(!defined('AURNO_JS_DIR_URI')){
            define( 'AURNO_JS_DIR_URI', AURNO_DIR_URI . '/assets/js/' );
        }

		if(!defined('AURNO_CSS_DIR_URI')){
            define( 'AURNO_CSS_DIR_URI', AURNO_DIR_URI . '/assets/css/' );
        }

		// Include Paths.
        if(!defined('AURNO_INC_DIR')){
            define( 'AURNO_INC_DIR', AURNO_DIR_PATH . '/inc/' );
        }
        if(!defined('AURNO_INC_DIR_URI')){
		    define( 'AURNO_INC_DIR_URI', AURNO_DIR_URI . '/inc/' );
        }
    }

    /**
	 * Returns current theme version
	 * @package Aurno
	 * @since   1.0.0
	 */
	public static function theme_version() {

		// Get theme data.
		$theme = wp_get_theme();

		// Return theme version.
		return $theme->get( 'Version' );

	}




}

/**
 * Get single instance of Theme main classs
 */
AURNO::get_instance();