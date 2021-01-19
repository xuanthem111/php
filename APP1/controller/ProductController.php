<?php

require_once '../Model/ProductModel.php';
require_once '../controller/kethuaController.php';
require_once '../helper/helper.php';
require_once  '../filters/userFilters.php';
require_once  '../controller/AdminCtroller.php';

class ProductController extends kethuaController
{
    private  $productModel;
    private  $userFilters;

    public function __construct()
    {
        $this->productModel = new productModel();
        $this->userFilters = new userFilters();
    }
    public function  list()
    {
        $data = $this->productModel->getAll();

        return $this->View('product/index',$data);
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