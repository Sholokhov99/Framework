<?php
class homeController
{
    public function home($id = null)
    {
        \Source\Session::checkSessionUser();
        new \Source\ViewPage(__FUNCTION__);
    }

    public function authenication($id = null){
      \Source\Route::redirectUsers();
        //new \Source\Route::redirectUsers();
        new \Source\ViewPage(__FUNCTION__);
    }

    public function registration($id = null){
        \Source\Route::redirectUsers();
        new \Source\ViewPage(__FUNCTION__);
    }

    public function news($id = null){
        new \Source\ViewPage(__FUNCTION__);
    }
}
