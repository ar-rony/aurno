<?php

if(!defined('AURNO_DIR_PATH')){
    define('AURNO_DIR_PATH', untrailingslashit(get_template_directory()));
}
if(!defined('AURNO_DIR_URI')){
    define('AURNO_DIR_URI', untrailingslashit(get_template_directory_uri()));
}

// include_once AURNO_DIR_PATH .'/inc/helpers/loader.php';
require_once AURNO_DIR_PATH . '/inc/helpers/traits/singleton.php';
require_once AURNO_DIR_PATH . '/inc/classes/class-AURNO-assets.php';
require_once AURNO_DIR_PATH . '/inc/classes/class-AURNO-setup.php';
require_once AURNO_DIR_PATH . '/inc/classes/class-AURNO-widgets.php';
require_once AURNO_DIR_PATH . '/inc/classes/class-AURNO-menus.php';
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