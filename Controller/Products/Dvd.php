<?php
require_once dirname(__DIR__).'/../Product/Product.php';
class Dvd extends Product
{
    public $size;
    public $description;

    public function __construct($sku, $name, $price, $size)
    {
        parent::__construct($sku, $name, $price, 'DVD');
        $this->size = $size;
        $this->description = $size . " MB";
    }
}
