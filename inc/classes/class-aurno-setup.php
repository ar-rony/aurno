<?php 
class Setup{
    use Singleton;
    public function __construct(){        
        add_action('after_setup_theme', [$this, 'blognow_setup']);
    }
    public function blognow_setup(){
        add_theme_support('title-tag');
        add_theme_support('custom-background');
        add_theme_support('custom-header');
        add_theme_support('post-thumbnails');
        add_theme_support('custom-logo');
     }
}