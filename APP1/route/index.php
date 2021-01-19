<?php

require_once '../helper/helper.php';
require_once '../middleware/CheckAdmin.php';
require_once '../controller/userController.php';
require_once '../controller/ProductController.php';
require_once '../model/UserModel.php';

$controller = $_GET['controller'];
$action = $_GET['action'];


$arrControler = [
    'user',
    'product'
];
// id productName userName quantity total => orderModel-->OrderController-
if (isset($controller) && isset($action)) {
    if (in_array($controller, $arrControler)) {
        $controller = ucfirst($controller). 'Controller';

        $user = new $controller();

        $user->$action();

    }
    else
    {
        require_once '../view/errors/lost/404.php';
    }
}
?>