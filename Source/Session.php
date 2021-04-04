<?php
namespace Source;
include_once API_ROOT.'getSecretKey.php';
class Session
{
    private static $session_name_secretKey = 'secret_key';
    private static $session_name_user_id = 'user_id';

    //
    //  Проверка на авторизированность пользователя и подлинность секретного ключа
    //
    public static function checkSessionUser()
    {
      if (isset($_SESSION[self::$session_name_secretKey]))
      {
          //$_SESSION[self::$session_name_secretKey ]
          $class_secret_key = new \getSecretKey();
          $key = $class_secret_key->get($_SESSION[self::$session_name_user_id]);
          //echo gettype($key);

          $encrypt = new \Source\Encryption();
          $secretKey = $encrypt::decryptPassword($key);
          $sessionKey = $encrypt::decryptPassword($_SESSION[self::$session_name_secretKey]);

          if($secretKey == $sessionKey){
            return true;
            echo "True";
          }
          else{
            echo "Delete";
            //self::clearSessionAuthenicationUser();
            return false;
          }
      }
      return false;
    }

    //
    // Авторизация пользователя
    //
    public static function authenication($userId, $secretKey)
    {
            //echo $secretKey;
            $session = [
                'key' => self::$session_name_secretKey,
                'value' => $secretKey,
            ];
            self::setSession($session);

            $session['key'] = self::$session_name_user_id;
            $session['value'] = $userId;
            self::setSession($session);
    }

    //
    //  Очистка всей сессии
    //
    public static function clearSession()
    {

    }

    //
    //  Очистка сессии авторизованного пользователя
    //
    public static function clearSessionAuthenicationUser()
    {
        unset($_SESSION[self::$session_name_secretKey]);
        unset($_SESSION[self::$session_name_user_id]);
    }

    //
    //  Настройка сессии
    //
    public function setting()
    {
        //ini_set('session.save_path',realpath(dirname($_SERVER['DOCUMENT_ROOT']) . '/app_data/session'));
        //session_save_path($_SERVER['DOCUMENT_ROOT'].'/app_data/session/');
    }


    private static function setSession(array $data)
    {
        $_SESSION[$data['key']] = $data['value'];
    }
}

?>
