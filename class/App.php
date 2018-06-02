<?php

class App{

    private static $database;

    private static $_instance;
    private $db_instance;

     public static function getInstance()
    {
        if(self::$_instance == null)
            {self::$_instance = new App();}
        return self::$_instance;
    }

    public static function getDatabase(){
        
        if(self::$database === null)
            self::$database = new Database('jeu');

        return self::$database;
    }

     public static function load()
    {
        require 'Autoloader.php';
        Autoloader::register();
    }

    public static function loadAuth()
    {
        require 'Autoloader.php';
        Autoloader::registerAuth();
    }

    public function getDB()
    {
        $config = Config::getInstance();
        if($this->db_instance == null) {
            $this->db_instance = new Database(($config->get('db_name')));
        }
        return $this->db_instance;
    }
}
