<?php
namespace Models
{
    require_once("config.php");
    class SqlModel
    {
        private function GetConnect()
        {
            $connection = new \Models\SettingDatabase();
            return $connection->Connect();
        }
        
        public function Select($sql)
        {
            $connect = self::GetConnect();
            if(!is_null($connect))
            {
                $data = $connect->query($sql); 
                $resault = $data->fetchAll();
                return $resault;
            }
            return false;
        }
        
        public function Insert($sql)
        {
            $connect = self::GetConnect();
            if(!is_null($connect)) 
            {
                $result = $connect->prepare($sql);
                return $result->execute();
            }
            else
                return null;
            
        }
        
    }
}
