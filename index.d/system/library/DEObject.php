<?php
class DEObject {

    protected $ver = "v0.5";
    private static $base_dir = "./";
    private static $config = "./";
        
    public static function set_base_dir ($base_dir) {
        self::$base_dir = $base_dir;
    }

    public function get_base_dir () {
        return self::$base_dir;
    }

    public static function set_config ($config) {
        self::$config = $config;
    }

    public function get_config () {
        return self::$config;
    }
}
