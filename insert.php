<?php
   header('Access-Control-Allow-Origin: *');
   $arr = [
       [
           'ID' =>'1',
           'Name' => 'Iphone8',
           'Price' => 200
       ],
       [
        'ID' =>'2',
        'Name' => 'Iphone9',
         'Price' => 300
       ],
       [
        'ID' =>'3',
        'Name' => 'Iphone9 plus',
        'Price' => 400
        ],
        [
            'ID' =>'4',
            'Name' => 'Iphone10',
            'Price' => 200
        ],
        [
            'ID' =>'5',
            'Name' => 'Iphone11',
            'Price' => 200
        ],
        [
            'ID' =>'6',
            'Name' => 'Iphone12',
            'Price' => 200
        ],
        [
            'ID' =>'7',
            'Name' => 'Oppo A9 2020',
            'Price' => 600
        ],
    ];
    //conver arr to stringfy
    echo json_encode($arr);
?>