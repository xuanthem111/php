<?php
require_once 'Boostrap/app.php';

class ProdutController extends AdminController
{
    private $productModel;

    public function __construct()
    {
        $this->productModel = new productModel();
    }
    public function actionList()
    {
       return $this->productModel->getAll();
    }


}
