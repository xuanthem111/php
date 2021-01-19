<?php


class userFilters
{
    public  function apply(array $array)
    {
        for ($user =0;$user < count($array);$user++){
            print_r($array[$user]);

        }
    }
}