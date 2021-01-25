<?php
/*
    Баг-лист:
        - в id запрещены пробелы или формируется кривой ассоциативный массив с параметрами
*/

namespace Source;
use Controllers as controller;
use Errors;
class Route
{    
    public static function redirect($path)
    {
        header('Location: '.$path);
    }
    
    public static function getHomePage()
    {
        return self::getProtocol().':/'.$_SERVER['HTTP_HOST'];
    }
    //
    //  Обработка текущего протокола
    //
    private static function getProtocol()
    {
        $scheme = '';
        $scheme = (isset($_SERVER['HTTPS'])) ? $_SERVER('HTTPS') : '';
        
        return (($scheme) && ($scheme != 'off')) ?
                $scheme = 'https': $scheme = 'http';
    }
    
    //
    //  Получение корректного url
    //
    private function checkingCorrectUrl($url)
    {
        // Удаление всех двойных слешей
        $url = preg_replace('|([/]+)|s', '/', substr($url, 1));
        
        // Проверка последено слеша
        if($url[strlen($url)-1] == '/')
            self::redirect(self::getProtocol().':/'.substr($url,0, -1));
            //Errors\setHeader('Location: '. self::getProtocol().':/'. substr($url,0, -1));
        return true;
    }
    
    private function printCode($string)
    {
        echo "<br><pre>";
        var_dump($string);
        echo "</pre><br>";
    }
    
    #
    #   Определение подходящей обработки uri и его разделение
    #
    private function splitUri($uri, $layerUrl)
    {
        switch($layerUrl)
        {
            case 0:
              $regular = "/(\w+)/u";
              break;
          case 1:
              $regular = "/(\w+)\\/(\w+)/u";
              break;
          case 2:
              $regular = "/(\w+)\\/(\w+)\\/\S+/u";
              break;
          default:
              Errors\setHeader(404);
              break;
        }
        
        // Выделение всего пути из URI
        preg_match($regular, $uri, $result);
        
        
        // Проверка на кириллицу
        if(eregi("[а-яё]+", $result[1]) || eregi("[а-яё]+", $result[2]))
            Errors\setHeader(404);
           
        // Допущение пробелов в id
        if($layerUrl == 2)
        {
            // Удаление контроллера и действия(action) и uri
            $regular = "/{$result[1]}\\/{$result[2]}\\//";
            $result[-1] = preg_replace($regular,'', $uri);
            
            #unset($result[0]);
        }
        
        return $result;
    }
    
    //
    //  Обработка url
    //
    public static function main($defaultController)
    {
        $url = urldecode($_SERVER['REQUEST_URI']);
        # Проверка на содержание кириллицы в строке запроса
        
        # Получение корректного uri
        $itIsCorrectUrl = self::checkingCorrectUrl($url);
        $GLOBALS['protocol'] = self::getProtocol();
        $GLOBALS['home_page'] = self::getHomePage();
        
        # Удаление первого слеша
        $url = mb_substr($url, 1);
                
        # разделение uri
        $splitUri = self::splitUri($url, substr_count($url, '/'));
        
        $map = self::getMap($splitUri, $url);
        $GLOBALS['MAP'] = $map;
        
        # Путь к обращаемому контроллеру
        $pathController = APPLICATION_ROOT_CONTROLLER.$map['fullController'].'.php';
        
        # Проверка на существование файла        
        if(!file_exists($pathController))
            Errors\setHeader(404);
        
        require_once $pathController;

        # Обращение к контроллеру
        $controller = new $map['fullController']();
        $controller->$map['action']($map['id']);
        unset($map);
        
        exit();
    }
    
    #
    #   Получение id и преобразование в ассоциативный массив
    #
    private function getId($id)
    {
        $regular = "/((\w|[-])+)/u";
        preg_match_all($regular, $id, $result);
        
        // Создание ассоциативного массива
        $arr = null;
        for($index = 0; $index < count($result[0]) - 1; $index += 2)
        {
            $arr[$result[0][$index]] = $result[0][$index + 1];
        }
        
        return $arr;
    }
    
    #
    #   Получение карты сайта
    #
    private function getMap($value, $uri)
    {
        
        // Проверка на адресацию к главной странице
        if(!sizeof($value))
        {
            // Главная страница
            $value[1] = ROUTE_DEFAULT_CONTROLLER;
            $value[2] = $value[1];
        }
        else
        {
            if(!array_key_exists(2, $value))
            {
                $value[2] = $value[1];
                $value[1] = ROUTE_DEFAULT_CONTROLLER;
            }
        }

        $map = [
            'controller' => $value[1],
            'fullController' => $value[1].'Controller',
            'action' => $value[2],
            'id' => self::getId($value[-1])
        ];
        $GLOBALS['controller'] = $map['controller'];
        $GLOBALS['action'] = $map['action'];
        $GLOBALS['id'] = $map['id'];
        
        
        return $map;
    }
}

