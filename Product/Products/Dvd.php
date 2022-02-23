<?php
require_once dirname(__FILE__) . '/../Product.php';
class Dvd extends Product
{
    public $size;

    public function __construct($sku, $name, $price, $size)
    {
        $this->size = $size;
        $description = $size . " MB";
        parent::__construct($sku, $name, $price, 'DVD', $description);
    }
}
