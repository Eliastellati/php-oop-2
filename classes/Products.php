<?php
class Product
{
    protected $name;
    protected $price;
    protected $quantity;
    protected $min_order;

    function __construct($name, $price, $quantity = 1, $min_order = 1)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->min_order = $min_order;
    }


    public function getPrice(){
        return $this->price;
    }

    public function getQuantity(){
        return $this->quantity;
    }

    public function getMinOrder(){
        return $this->min_order;
    }

    public function buyItem(){
        return $this->quantity >= $this->min_order ? true : false;
    }
}
?>