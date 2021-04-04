<?php
namespace Source
{
    use Errors;
    class Api
    {
        
        public function __construct($api, $id)
        {
            $path = API_ROOT."{$api}.php";
            
            
            if(file_exists($path))
            {
                // Подключение к api
                include_once($path);
                new $api(self::getParams($id));
            }
            else
                Errors\setHeader(404);
        }
        
        private function getParams($id)
        {
            return $id = (is_null($id)) ? $_POST : null;
        }
        
        public static function getJsonFromArray($array, $errorText)
        {            
            $steps = sizeof($array);
            if($steps > 0 && $array != false)
            {   
                for($index = 0; $index < $steps; $index++)
                    $array[$index] = array_unique($array[$index], SORT_STRING);
                $array['result'] = 'ok';
            }
            else
                $array = ['result'=>$errorText];
                
            $json = json_encode($array);
            return $json;
        }
    }
}