<?php

class Autoloader{

    static function register(){
        spl_autoload_register(array('Autoloader','autoload'));
    }

    static function registerAuth(){
            spl_autoload_register(array('Autoloader','autoloadAuth'));
    }

    static function autoload($class_name){
        $path = 'class/' . $class_name . '.php';
 //       $path = str_replace('/','\\',$path);
        require $path;
    }

    static function autoloadAuth($class_name){
        $path = "C:/users/admin/Desktop/elaadmin-master/class/" . $class_name . '.php';
 //       $path = str_replace('/','\\',$path);
        require $path;
    }
}

?>