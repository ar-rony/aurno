<?php
class Menus{
    use Singleton;
    public function __construct(){        
        add_action('after_setup_theme', [$this, 'blognow_menus']);
    }
    public function blognow_menus(){
        register_nav_menus([
            'main-menu' => __('Main Menu', 'blognow'),
            'footer-menu' => __('Footer Menu', 'blognow')
        ]);
     }
}