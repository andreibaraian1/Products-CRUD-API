<?php
require_once dirname(__FILE__) . '/../Product.php';
class Book extends Product
{
    public $weight;

    public function __construct($sku, $name, $price, $weight)
    {
        $this->weight = $weight;
        $description = $weight . "KG";
        parent::__construct($sku, $name, $price, 'Books', $description);
    }
}
