<?php


class Config{

    private $setting = [];
    private static $_instance;

    public static function getInstance(){
        if(self::$_instance == null)
            self::$_instance = new Config();

        return self::$_instance;
    }


    private function __construct(){

        $this->setting = array(

            'db_user'=>'root',
            'db_pass'=>'',
            'db_host'=>'localhost',
            'db_name'=>'jeu'
        );
        
    }

    public function get($key)
    {
        if(!isset($this->setting[$key]))
            {return null;}
        return $this->setting[$key];
    }

}
