<?php
require_once '../helper/helper.php';
class  kethuaController
{
    public function reder($file,$data)
    {
        $path = '../View'. $file .'.php';
       // dd($path);
        if(file_exists($path))
        {
            extract($data);
            require_once $path;
        }
        else
            {
            echo 'EROR_404 FOURD';
        }
    }

}
