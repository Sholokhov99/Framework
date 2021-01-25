<?php
/*
require_once("{$_SERVER['DOCUMENT_ROOT']}/config.php");
$db = new \Models\SqlModel();
*/
    class checkSecretKey
    {
        private $userNotFound = 'user not found';
        private $badRequest = 'bad request';
        //
        //  Входная точка, где идет обработка запроса
        //
        public function __construct(){
            $db = new \Models\SqlModel();
            
            $sql = "SELECT SecretKey FROM `Users` WHERE `Id_user`='{$_SESSION['user_id']}'";
            
            $data = $db->Select($sql);
            if(!$data)
                return false;
            else
            {
                $encrypt = new \Source\Encryption();
                $key = $encrypt::decryptPassword($data[0]['SecretKey']);
                
                return ($key == $_SESSION['secret_key']) ? true : false;
            }            
        }
    }


