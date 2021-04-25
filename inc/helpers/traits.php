<?php
/**
 * Traits Definitions
 */
trait Instance{
    private static $instance;
    protected static function aurno_theme_init(){
        echo "Theme working";
    }
}