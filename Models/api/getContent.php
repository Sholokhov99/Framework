<?php

    class GetContent
    {
        private $emptyAnswer = "content not found";
        private $badAnswer = "bad answer";
        //
        //  Входная точка, где идет обработка запроса
        //
        public function __construct($value = null){
            $db = new \Models\SqlModel();
            $sql = "SELECT `action`.`Content`, `action`.`Access`
                FROM `action` LEFT JOIN `controller`ON 
                `controller`.`Id_controller`
                WHERE `action`.`Id_controller`=`controller`.`Id_controller` AND `controller`.`Name_controller`='{$value['controller']}' AND `action`.`Name_action`='{$value['action']}';";
            $data = $db->Select($sql);
            
            $errorText = (!$data) ? $this->badAnswer : $this->emptyAnswer;
            
            
            $api = \Source\Api::getJsonFromArray($data, $errorText);
                    
                    
            echo $api;
            
            
        }
    }


