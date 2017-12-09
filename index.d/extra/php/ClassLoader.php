<?php
// TODO: Consider to replace to other way
class ClassLoader
{
    private static $dirs;

    public static function loadClass($class)
    {
        foreach (self::directories() as $directory) {
            $file_name = "{$directory}/{$class}.php";
            if (is_file($file_name)) {
                require $file_name;
                return true;
            }
        }
    }

    private static function directories()
    {
        if (empty(self::$dirs)) {
            $base = __DIR__;
            self::$dirs = array(
                $base."/library",
                $base."/system/library"
            );
        }
        return self::$dirs;
    }
    
    public static function set_dirs ($d) {
        self::$dirs = $d;
    }
    
}
spl_autoload_register(array('ClassLoader', 'loadClass'));

