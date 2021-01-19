<?php
require_once '../Model/UserModel.php';
require_once '../helper/helper.php';
require_once  '../filters/userFilters.php';
require_once  '../controller/AdminCtroller.php';
require_once  '../controller    /kethuaController.php';
class  userController extends kethuaController {

    private  $userModel;
    private  $userFilters;

    public function __construct()
    {
        $this->userModel = new userModel();
        $this->userFilters = new userFilters();
    }
    public  function list()
    {
        $data = $this->userModel->getAll();
        return $this->View('user/index',$data);
    }
    public  function first(){
        //$this->userFilters->apply($this->actionList());
        //phuong thuc nay dung doc lap  nen static
        return   AdminCtroller::render();
    }
    public  function  store(){
        AdminCtroller::$className = 'userController';
        return AdminCtroller::success();
    }

}
