<?php
define('APPLICATION_DEF_CONTROLLER', 'HomeController');
define('APPLICATION_ROOT_CONTROLLER', "{$_SERVER['DOCUMENT_ROOT']}/controller/");

// Проверка на существование котроллеров
class class_application
{
    private static $start = false;
    
    public static function main(string $defController)
    {
        session_start();
        setlocale(LC_ALL, "ru_RU.UTF-8");
        if(self::$start === true) 
            die('Application working!');
        
        self::$start = true;
        
        // Проверка на существование стандартного контроллера
        if(!file_exists(APPLICATION_ROOT_CONTROLLER.$defController.".php"))
                die('Default controller not found');
    }
    
}
