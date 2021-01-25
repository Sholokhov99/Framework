<?php

    class LoadMenu
    {
        private $emptyAnswer = "User not found";
        private $badAnswer = "bad answer";
        //
        //  Входная точка, где идет обработка запроса
        //
        public function __construct($value = null){
            $db = new \Models\SqlModel();
            // Получение уровня доступа пользователя
            $sql = "SELECT `Login` FROM `Users` WHERE `SecretKey`='{$_SESSION['secret_key']}' AND `Id_user`='{$_SESSION['user_id']}'";
            $data = $db->Select($sql);
            
            $secretKey = new checkSecretKey();

            if($secretKey

            $sql = "SELECT * FROM `top_menu` WHERE `Access`<=''";
            $data = $db->Select($sql);
            
            $errorText = (!$data) ? $this->badAnswer : $this->emptyAnswer;
            
            
            $api = \Source\Api::getJsonFromArray($data, $errorText);
                    
                    
            echo $api;
            
            
        }
    }


