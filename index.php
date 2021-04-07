<?php
/*
 *  Last update: 27.12.2020
 *  Version: 0.1
 *  User: konex
 *  Входная точка всех пользователей.
 *  Обработка несуществуемых маршрутов
 *  Обработка начального маршрута
 */
include_once 'config.php';
setlocale(LC_ALL, "ru_RU.UTF-8");

class Application
{
    private static $firstStart = true;

    public static function main($defaultController = ROUTE_DEFAULT_CONTROLLER)
    {
        //\Source\Session::setting();
        session_start();
        if(!self::$firstStart)
            die ('This application working!!');

        self::$firstStart = false;

        $path = APPLICATION_ROOT_CONTROLLER.$defaultController."Controller.php";

        if(fopen($path, 'r')){
            \Source\Route::main($defaultController);
        }
        else
            die('Default controller not found');
    }

}
Application::main();

?>
