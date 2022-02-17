<?php
require_once './Controller/Database/Database.php';
class Product
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    public function selectProducts()
    {
        return ($this->db->selectAll('products'));
    }
    public function deleteProduct($id)
    {

        $this->db->delete('products', "sku='$id'");
    }
    public function insertProduct($sku, $name, $price, $productType, $description)
    {

        $this->db->insert('products', ['sku' => $sku, 'name' => $name, 'price' => $price, 'productType' => $productType, 'description' => $description]);
    }
}
