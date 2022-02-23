<?php
require_once dirname(__FILE__) . '/../Product.php';
class Furniture extends Product
{
    public $height;
    public $width;
    public $length;


    public function __construct($sku, $name, $price, $height, $width, $length)
    {
        $this->height = $height;
        $this->width = $width;
        $this->length = $length;
        $description = $height . "x" . $width . "x" . $length;
        parent::__construct($sku, $name, $price, 'Furniture', $description);
    }
}
