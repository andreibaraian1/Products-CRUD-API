<?php
require_once './Product/Product.php';
class Book extends Product
{
    public $weight;
    public $description;

    public function __construct($sku, $name, $price,$weight)
    {
        parent::__construct($sku, $name, $price, 'Books');
        $this->weight = $weight;
        $this->description = $weight . "KG"; 
    }
}
