<?php
require_once './Product/Query.php';
require_once './Product/Product.php';
include_once './Controller/Products/Book.php';
include_once './Controller/Products/Dvd.php';
include_once './Controller/Products/Furniture.php';
require_once './headers.php';
$id = $_GET['id'];
$Query = new Query();
$result = $Query->getProduct($id);
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
$Query->deleteProduct($product->sku);
