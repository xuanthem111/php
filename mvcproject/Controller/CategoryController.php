<?php
class CategoryController extends  BaseController
{

    public function index()
    {
        $pageTitle = 'Danh sach san pham theo danh muc : lap top';
        $categories = [
            [
                'id' => 1,
                'name' => 'laptop',
            ],
            [
                'id' => 2,
                'name' => 'Mobile',
            ],
            [
                'id' => 3,
                'name' => 'Desktop',
            ],
            [
                'id' => 4,
                'name' => 'laptop',
            ],
            [
                'id' => 5,
                'name' => 'laptop',
            ],

        ];
       $this->View('frontend.categories.index',[
           'categories' => $categories,
           'pageTitle' => $pageTitle,
       ]);
    }
    public function show()
    {
        echo __METHOD__;
    }
}
