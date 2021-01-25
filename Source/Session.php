<?php
namespace Source;
class Session
{
    //
    // Авторизация пользователя
    //
    public static function authenication($userId, $secretKey)
    {
            echo $secretKey;
            $session = [
                'secret_key' => 'secretKey',
                'value' => $secretKey,
            ];
            self::setSession($session);
            
            $session['user_id'] = 'user_id';
            $session['value'] = $userId;
            self::setSession($session);
    }

    //
    //  Очистка сесии
    //
    public static function clearSession()
    {
        
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