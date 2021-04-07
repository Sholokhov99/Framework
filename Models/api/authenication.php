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
            $resault = null;

            $sql = "SELECT Id_user, Login, Password, SecretKey FROM `Users` WHERE `Mail`='{$value['login']}'";
            $password = $value['password'];

            $data = $db->Select($sql);
            if(!$data)
              $resault = ["resault"=> $this->userNotFound];
            else
            {
                $encrypt = new \Source\Encryption();
                $pass = $encrypt::decryptPassword($data[0]['Password']);

                if($pass == $password){
                  $resault['resault'] = 'ok';
                  $session = new \Source\Session();
                  $session->authenication($data[0]['Id_user'], $data[0]['SecretKey']);
                }
                else {
                  $resault['resault'] = $this->badRequest;
                }
            }
            echo json_encode($resault);

        }
    }
