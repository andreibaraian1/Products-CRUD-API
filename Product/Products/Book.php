<?php
require_once dirname(__FILE__) . '/../Product.php';
class Book extends Product
{
    public $weight;

    public function __construct($sku, $name, $price, $weight)
    {
        $this->weight = $weight;
        parent::__construct($sku, $name, $price, 'Books');
    }

    public function insertProduct($product)
    {
        $description = $product->weight . "KG";
        $stmt = $this->db->mysqli->prepare("INSERT INTO products (sku,name,price,productType,description) VALUES (?,?,?,?,?)");
        $stmt->bind_param("ssiss", $product->sku, $product->name, $product->price, $product->type, $description);
        $stmt->execute();
        $stmt->close();
    }
}
