<?php


class AdminCtroller
{
    public static  $className = 'AdminCtroller';

     //tra ve 1 file view ;1 file giao dien

    public static function render()
    {
        echo "Function nay reder ra 1 file view--". self::$className;
    }
    public static  function success()
    {
        echo "Data duoc cap nhat thanh cong" .self::$className;
    }

}
?>