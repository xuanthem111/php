<?php
    class BanNuDepNhat{
       const ENOUGH_HEIGTH = 165;
       const ENOUGH_WEIGTH = 48;
       const WHITE = 0;
       const BLACK = 1;
       const BEATIFUL1 = "Hien Lanh";
        public $height;
        public $weigth;
        public $white;
        public $character;
    function setHeigth($height){
        $this->height = $height;
    }
    function getHeigth(){
        return $this->height;
    }
    function setWeight($weigth){
        $this->weigth = $weigth;
    }
    function getWeigth(){
        return $this->weigth;
    }
    function setWhite($white){
        $this->white = $white;
    }
    function getWhite(){
        return $this->white;
    }
    function setCharacter($character){
        $this->character = $character;
    }
    function getCharacte(){
        return $this->character;
    }
    function checkEnoughHeigth(){
        if($this->getHeigth() > self::ENOUGH_HEIGTH && $this->getWeigth() >= self::ENOUGH_WEIGTH && $this->getWhite() == self::WHITE && $this->getCharacte() == self::BEATIFUL1){
            echo"Da Duyet:v";
        }else{
            echo"K Duoc Duyet :v";
        }
    }
}
    $gaiDepNhat = new BanNuDepNhat();
    $gaiDepNhat->setHeigth(170);
    $gaiDepNhat->setWeight(50);
    $gaiDepNhat->setWhite(0);
    $gaiDepNhat->setCharacter("Hien Lanh");
    $gaiDepNhat->checkEnoughHeigth();
?>