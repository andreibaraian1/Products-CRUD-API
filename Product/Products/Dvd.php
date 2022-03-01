<?php
require_once dirname(__FILE__) . '/../Product.php';
class Dvd extends Product
{
    public $size;

    public function __construct($sku, $name, $price, $size)
    {
        $this->size = $size;
        parent::__construct($sku, $name, $price, 'DVD');
    }

    public function insertProduct($product)
    {
        $description = $product->size . " MB";
        $stmt = $this->db->mysqli->prepare("INSERT INTO products (sku,name,price,productType,description) VALUES (?,?,?,?,?)");
        $stmt->bind_param("ssiss", $product->sku, $product->name, $product->price, $product->type, $description);
        $stmt->execute();
        $stmt->close();
    }
}
