<?php
namespace Source
{
    class Encryption
    {
        private static $encryptionKey_password = 'e3f080b6edfcf6fff70654021c7c2e43';
        private static $encryptionKey_userKey = 'e1ff2fb6edfcf68ff70654001c1c2e82';

        private static function encrypt($value, $key)
        {
            $value = serialize($value);
            $iv = mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_CBC), MCRYPT_DEV_URANDOM);
            $key = pack('H*', $key);
            $mac = hash_hmac('sha256', $value, substr(bin2hex($key), -32));
            $passcrypt = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key, $value.$mac, MCRYPT_MODE_CBC, $iv);
            $encoded = base64_encode($passcrypt).'|'.base64_encode($iv);
            return $encoded;
        }

        private static function decrypt($value, $key)
        {
            $value = explode('|', $value.'|');
            $decoded = base64_decode($value[0]);
            $iv = base64_decode($value[1]);

            if(strlen($iv)!==mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_CBC))
                return false;

            $key = pack('H*', $key);
            $decrypted = trim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, $decoded, MCRYPT_MODE_CBC, $iv));
            $mac = substr($decrypted, -64);
            $decrypted = substr($decrypted, 0, -64);
            $calcmac = hash_hmac('sha256', $decrypted, substr(bin2hex($key), -32));

            if($calcmac!==$mac)
                return false;

            $decrypted = unserialize($decrypted);
            return $decrypted;
        }

        public static function encryptPassword($pass)
        {
            $result = Encryption::encrypt($pass, 'e3f080b6edfcf6fff70654021c7c2e43');
            return $result;
        }

        public static function decryptPassword($pass)
        {
            $result =  self::decrypt($pass, self::$encryptionKey_password);
            return $result;
        }

        public static function encryptUserKey($userKey)
        {
            $result = Encryption::encrypt($userKey, self::$encryptionKey_userKey);
            return $result;
        }

        public static function decryptUserKey($userKey)
        {
            $result =  self::decrypt($userKey, self::$encryptionKey_userKey);   
            return $result;
        }

    }
}
?>
