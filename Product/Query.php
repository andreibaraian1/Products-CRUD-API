<?php
require_once dirname(__FILE__) . '/../Database/Database.php';
class Query
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
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

    public function deleteProduct($id)
    {
        $stmt = $this->db->mysqli->prepare("DELETE FROM products WHERE sku = ?");
        $stmt->bind_param("s", $id);
        $stmt->execute();
        $stmt->close();
    }

    public function insertProduct($sku, $name, $price, $productType, $description)
    {
        $stmt = $this->db->mysqli->prepare("INSERT INTO products (sku,name,price,productType,description) VALUES (?,?,?,?,?)");
        $stmt->bind_param("ssiss", $sku, $name, $price, $productType, $description);
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
