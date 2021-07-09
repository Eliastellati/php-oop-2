<?php
class User
{
    protected $name;
    protected $surname;
    protected $mail;
    protected $address;
    protected $discount;

    function __construct($name, $surname, $mail, $discount = 0){
        $this->name = $name;
        $this->surname = $surname;
        $this->mail = $mail;
        $this->getDiscount($discount);
    }


    public function getFullName() {
        return $this->name . " " . $this->surname;
    }

    public function getEmail() {
        return $this-> mail;
    }

    public function getDiscount() {
        return $this-> discount;
    }
}



?>