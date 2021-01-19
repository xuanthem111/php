<?php


class AdminController
{
    public function view($file,$data)
    {
        $path = 'Views/'.$file.'.php';
        if (file_exists($path)){
            ob_start();
            require_once $path;
            $content =ob_get_clean();
            require_once 'Views/Layout/main.php';

        }
        else
        {
            echo "404 NOT FOUND";
        }


    }
}