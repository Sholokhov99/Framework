<?php
include_once API_ROOT.'checkSecretKey.php';
class homeController
{
    public function home($id = null)
    {
        new \Source\ViewPage(__FUNCTION__);
    }
        
    public function authenication($id = null){
        if($_SESSION['secretKey'])
        {
            $resault = new checkSecretKey($_SESSION['id'],$_SESSION['secretKey']);
            if($resault)
            {
                
                \Source\Route::redirect('/private/account');
            }
                
            else
                echo 'delete session';
            
        }
        else
            new \Source\ViewPage(__FUNCTION__);
    }
}

