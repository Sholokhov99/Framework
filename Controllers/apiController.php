<?php
class apiController
{
    //
    //  Входная точка, где идет обработка запроса
    //
    public function api(array $id = null)
    {
        echo "It is API";
    }
    
    
    public function getContent($id)
    { 
        new \Source\Api(__FUNCTION__, $id);
    }
    
    public function authenication($id)
    {
        new \Source\Api(__FUNCTION__, $id);
    }

    public function loadMenu()
    {
        new \Source\Api(__FUNCTION__, $id);
    }
}
?>