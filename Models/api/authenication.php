<?php
/*
require_once("{$_SERVER['DOCUMENT_ROOT']}/config.php");
$db = new \Models\SqlModel();
*/
    class authenication
    {
        private $userNotFound = 'user not found';
        private $badRequest = 'bad request';
        //
        //  Входная точка, где идет обработка запроса
        //
        public function __construct($value = null){
            $db = new \Models\SqlModel();

            $sql = "SELECT Id_user, Login, Password, SecretKey FROM `Users` WHERE `Mail`='{$value['login']}'";
            $password = $value['password'];

            $data = $db->Select($sql);
            if(!$data)
                $errorText = $this->userNotFound;
            else
            {
                $encrypt = new \Source\Encryption();
                $pass = $encrypt::decryptPassword($data[0]['Password']);
                $resault['resault'] = ($pass == $password) ? 'ok' : $this->userNotFound;

                $session = new \Source\Session();
                $session->authenication($data[0]['Id_user'], $data[0]['SecretKey']);
            }
            echo json_encode($resault);

        }
    }
