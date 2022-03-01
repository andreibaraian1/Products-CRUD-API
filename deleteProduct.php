<?php
require_once dirname(__FILE__) . '/Product/Product.php';
require_once dirname(__FILE__) . '/Product/Products/Book.php';
require_once dirname(__FILE__) . '/Product/Products/Dvd.php';
require_once dirname(__FILE__) . '/Product/Products/Furniture.php';
require_once dirname(__FILE__) . '/headers.php';

$id = $_GET['id'];
$Prod = new Product();
$result = $Prod->getProduct($id);
preg_match_all('!\d+!', $result->description, $matches);
$res = $matches[0];

switch ($result->productType) {
    case 'Books':
        $product = new Book($result->sku, $result->name, $result->price, $res[0]);
        break;
    case 'Furniture':
        $product = new Furniture($result->sku, $result->name, $result->price, $res[0], $res[1], $res[2]);
        break;
    case 'DVD':
        $product = new Dvd($result->sku, $result->name, $result->price, $res[0]);;
        break;
}

$product->deleteProduct($product);
