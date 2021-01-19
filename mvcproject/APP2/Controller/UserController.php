<?php
require_once '../Controller/kethuaController.php';
require_once '../Model/UserModel.php';
require_once '../helper/helper.php';
class UserController extends kethuaController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new userModel();
    }
    public function actionList()
    {
        $data = $this->userModel->getAll();

        return $this->reder('/User/product',$data);
    }

}