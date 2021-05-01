<?php

class Widgets{
    use Singleton;
    public function __construct(){        
        add_action('widgets_init', [$this, 'blognow_widgets']);
    }

    public function blognow_widgets() {
        register_sidebar( array(
            'name'          => __( 'Primary Sidebar', 'blognow' ),
            'id'            => 'sidebar-1',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ) );
        
        register_sidebar( array(
            'name'          => __( 'Secondary Sidebar', 'blognow' ),
            'id'            => 'sidebar-2',
            'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
            'after_widget'  => '</li></ul>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ) );
    }
}