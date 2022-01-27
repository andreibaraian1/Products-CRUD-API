<?php

class Product
{
    public $sku;
    public $name;
    public $price;
    public $productType;
    public $description;


    public function __construct($sku, $name, $price, $productType, $description)
    {

        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->productType =$productType;
        $this->description=$description;

    }

}