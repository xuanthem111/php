<?php


class userModel
{
    const  MALE =1;
    const FEMALE =2;
    public  function  getAll(){
        return [
            ['id' =>1,'name'=>'cao tuan vu','sex'=>self::MALE],
            ['id' =>2,'name'=>'cao tuan vu 1','sex'=>self::FEMALE],
            ['id' =>3,'name'=>'cao tuan vu 2','sex'=>self::MALE],
            ['id' =>4,'name'=>'cao tuan vu 3','sex'=>self::FEMALE],
            ['id' =>5,'name'=>'cao tuan vu 4','sex'=>self::MALE],
            ['id' =>6,'name'=>'cao tuan vu 5','sex'=>self::MALE],
            ['id' =>7,'name'=>'cao tuan vu 6','sex'=>self::FEMALE],
            ['id' =>8,'name'=>'cao tuan vu 7','sex'=>self::MALE],
            ['id' =>9,'name'=>'cao tuan vu 8','sex'=>self::MALE],
        ];
    }
}