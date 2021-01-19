<?php
   header('Access-Control-Allow-Origin: *');
   $arr = [
       [
           'ID' =>'1',
           'Name' => 'Iphone1',
           'Price' => 200
       ],
       [
        'ID' =>'2',
        'Name' => 'Iphone14',
         'Price' => 300
       ],
       [
        'ID' =>'3',
        'Name' => 'Iphone15',
        'Price' => 400
        ],
        [
            'ID' =>'1',
            'Name' => 'Iphone2',
            'Price' => 200
        ],
        [
            'ID' =>'1',
            'Name' => 'Iphone3',
            'Price' => 200
        ],
        [
            'ID' =>'1',
            'Name' => 'Iphone4',
            'Price' => 200
        ],
        [
            'ID' =>'4',
            'Name' => 'Iphone8',
            'Price' => 600
        ],
        [
            'ID' =>'5',
            'Name' => 'oppo a9',
            'Price' => 600
        ],
        [
            'ID' =>'6',
            'Name' => 'sumsung glax',
            'Price' => 500
        ],
        [
            'ID' =>'4',
            'Name' => 'Iphone12',
            'Price' => 1200
        ],
    ];
    //conver arr to stringfy
    echo json_encode($arr);
?>