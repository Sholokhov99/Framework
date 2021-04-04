<?php
namespace Models;
use PDO;
use PDOException;
class SettingDatabase
{
    private $_strHost = "localhost";
    private $_strDB = "eds";
    private $_strUser = "mysql";
    private $_strPassword = "mysql";
    private $_strCharset = "utf8";
    private $_pbo = null;
        
    //private $_connectStr = "mysql:host=".self::$_strHost.";dbname={$this->_strDB};charset=$this->_strCharset";
        
    //
    //  Подключение к БД
    //
    public function Connect()
    {
        try
        {
            $this->_pbo = new PDO(
                "mysql:host={$this->_strHost};dbname={$this->_strDB};charset=$this->_strCharset",
                $this->_strUser,
                $this->_strPassword);
        } catch (PDOException $e) 
        {
            $this->_pbo = null;
            echo "Error connect";
        }
        return $this->_pbo;
    }
        
    //
    //  Отключение от БД
    //
    public function Disconnect()
    {
        $this->_pdo = null;
    }
}
?>