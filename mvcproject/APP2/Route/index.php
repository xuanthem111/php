<?php
require_once '../Midllware/CheckAdmin.php';
require_once '../Controller/UserController.php';
require_once '../helper/helper.php';

if (isset($_POST['email']) && isset($_POST['password']))
{
    $cendentail = $_POST;
    $middlware = new checkAdmin($cendentail);

    $isAdmin = $middlware->isAdmin();

    if ($isAdmin)
    {
        $userCotroller = new  UserController();
         $list = $userCotroller->actionList();
         dd($list);


    }
    else{
        return 'K co';
    }
}
