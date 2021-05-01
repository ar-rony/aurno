<?php
class Assets {
    use Singleton;
    public function __construct(){        
        add_action('wp_enqueue_scripts', [$this, 'blognow_scripts']);
    }
    public function blognow_scripts(){
        wp_enqueue_style('blognow-stylesheet', get_stylesheet_uri(), '', '1.0.0', 'all');
    }
}