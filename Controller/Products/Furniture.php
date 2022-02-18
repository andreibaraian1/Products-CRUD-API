<?php
require_once dirname(__DIR__).'/../Product/Product.php';
class Furniture extends Product
{
    public $height;
    public $width;
    public $length;
    public $description;
    public function __construct($sku, $name, $price, $height, $width, $length)
    {
        parent::__construct($sku, $name, $price, 'Furniture');
        $this->height = $height;
        $this->width = $width;
        $this->length = $length;
        $this->description = $height . "x" . $width . "x" . $length;
        
    }
}
