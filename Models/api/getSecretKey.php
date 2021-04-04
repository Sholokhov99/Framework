<?php
/*
require_once("{$_SERVER['DOCUMENT_ROOT']}/config.php");
$db = new \Models\SqlModel();
*/
    class getSecretKey
    {
        private $userNotFound = 'user not found';
        private $badRequest = 'bad request';
        //
        //  Входная точка, где идет обработка запроса
        //
        public function get($user_id){
          $db = new \Models\SqlModel();

          $sql = "SELECT SecretKey FROM `users` WHERE `Id_user`='{$user_id}'";

          $data = $db->Select($sql);
          if(sizeof($data)){
            return $data[0]['SecretKey'];
          }
          else{
              return false;
            }
        }
    }
