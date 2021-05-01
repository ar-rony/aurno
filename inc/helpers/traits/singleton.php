<?php
trait Singleton {
    public static function get_instance(){
        static $instance= [];
        $classes = get_called_class();
        if(!isset($instance[$classes])){
            $instance[$classes] = new $classes;
        }

        return $instance[$classes];
    }
}