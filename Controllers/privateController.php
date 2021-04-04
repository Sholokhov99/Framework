<?php
class privateController
{
    public function account($id)
    {
        new \Source\ViewPage(__FUNCTION__);
    }

    public function unlog($id){
        \Source\Session::clearSessionAuthenicationUser();
        \Source\Route::redirect('/');
    }
}
