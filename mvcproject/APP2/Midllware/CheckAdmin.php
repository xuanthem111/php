<?php


class CheckAdmin
{
    private $email;
    private $password;
    const EMAIL_ADMIN = 'NguyenXuanThem@gmail.com';
    const PASS_ADMIN = '123123123';

    public function __construct($cendentail)
    {
        $this->email = $cendentail['email'];
        $this->password = $cendentail['password'];
    }
    public function isAdmin(){
        if($this->email == self::EMAIL_ADMIN && $this->password == self::PASS_ADMIN){
            return true;
        }
        return false;
    }


}