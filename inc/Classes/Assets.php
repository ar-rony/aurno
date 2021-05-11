<?php
namespace AURNO\THEME\Classes;
use AURNO\THEME\Traits\Singleton;
class Assets {
    use Singleton;
    public function __construct(){        
        add_action('wp_enqueue_scripts', [$this, 'aurno_scripts']);
    }
    public function aurno_scripts(){
        wp_enqueue_style('aurno-stylesheet', get_stylesheet_uri(), '', '1.0.0', 'all');

        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }
    }
}