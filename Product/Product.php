<?php
require_once dirname(__FILE__) . '/../Database/Database.php';
class Product
{
    protected $db;
    public $sku;
    public $name;
    public $price;
    public $type;

    public function __construct($sku = null, $name = null, $price = null, $type = null)
    {
        $this->db = new Database();

        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->type = $type;
    }

    public function selectProducts()
    {
        $arr = [];
        $stmt = $this->db->mysqli->prepare("SELECT * FROM products");
        $stmt->execute();
        $result = $stmt->get_result();
        while ($row = $result->fetch_assoc()) {
            $arr[] = $row;
        }
        return json_encode($arr);
        $stmt->close();
    }

    public function deleteProduct($product)
    {
        $id = $product->sku;
        $stmt = $this->db->mysqli->prepare("DELETE FROM products WHERE sku = ?");
        $stmt->bind_param("s", $id);
        $stmt->execute();
        $stmt->close();
    }

    public function getProduct($id)
    {
        $stmt = $this->db->mysqli->prepare("SELECT * FROM products WHERE sku = ?");
        $stmt->bind_param("s", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_object();
        $stmt->close();
    }
}
