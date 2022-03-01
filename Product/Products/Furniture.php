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
        parent::__construct($sku, $name, $price, 'Furniture');
    }

    public function insertProduct($product)
    {
        $description = $product->height . "x" . $product->width . "x" . $product->length;
        $stmt = $this->db->mysqli->prepare("INSERT INTO products (sku,name,price,productType,description) VALUES (?,?,?,?,?)");
        $stmt->bind_param("ssiss", $product->sku, $product->name, $product->price, $product->type, $description);
        $stmt->execute();
        $stmt->close();
    }
}
