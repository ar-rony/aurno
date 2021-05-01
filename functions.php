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

require_once AURNO_DIR_PATH . '/inc/helpers/traits/singleton.php';
require_once AURNO_DIR_PATH . '/inc/classes/class-aurno-assets.php';
require_once AURNO_DIR_PATH . '/inc/classes/class-aurno-setup.php';
require_once AURNO_DIR_PATH . '/inc/classes/class-aurno-widgets.php';
require_once AURNO_DIR_PATH . '/inc/classes/class-aurno-menus.php';

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