<?php

// Exit if directly access
if(!defined ('ABSPATH') ){
    exit;
}

if(!defined('AURNO_DIR_PATH')){
    define('AURNO_DIR_PATH', untrailingslashit(get_template_directory()));
}
if(!defined('AURNO_DIR_URI')){
    define('AURNO_DIR_URI', untrailingslashit(get_template_directory_uri()));
}
/**
 * Require Class Autoloader
 * @Package Aurno
 */
require_once AURNO_DIR_PATH. '/vendor/autoload.php';
use AURNO\THEME\Traits\Singleton;
use AURNO\THEME\Classes\Setup;
use AURNO\THEME\Classes\Assets;
use AURNO\THEME\Classes\Widgets;
use AURNO\THEME\Classes\Menus;
class AURNO {
    use Singleton;
    public function __construct(){        
        // Load Classes
        Setup::get_instance();
        Assets::get_instance();
        Widgets::get_instance();
        Menus::get_instance();
    }
}
AURNO::get_instance();