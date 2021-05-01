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
 * @package Aurno WordPress theme
 */

namespace AURNO_THEME;

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Define Core Constants for Aurno Theme
if(! defined ('AURNO_THEME_PATH')){
    define('AURNO_THEME_PATH', untrailingslashit(get_template_directory()) );
}
if(! defined ('AURNO_THEME_URI')){
    define('AURNO_THEME_URI', untrailingslashit(get_template_directory_uri()) );
}


final class AURNO_THEME{
    /**
	 * Main Theme Class Constructor
	 * @package Aurno
	 * @since   1.0.0
	 */

    public function __construct(){
        $this->aurno_theme_setup_hooks();
    }

    public function aurno_theme_setup_hooks(){
        add_action('wp_enqueue_scripts', array('AURNO_THEME', 'aurno_register_styles'));
    }

    public function aurno_register_styles(){
        wp_enqueue_style('aurno-stylesheet', get_stylesheet_uri(), '', '1.0.0', 'all');
    }
    
}
new AURNO_THEME();