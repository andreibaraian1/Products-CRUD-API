<?php
require_once './Product/Query.php';
require_once './headers.php';
require_once './Controller/Products/Book.php';
require_once './Controller/Products/Dvd.php';
require_once './Controller/Products/Furniture.php';
$json = file_get_contents('php://input');
$values = json_decode($json, true);
$result = (object) $values;
$Query = new Query();
switch ($result->productType) {
    case 'Books':
        $product = new Book($result->sku, $result->name, $result->price, $result->weight);
        break;
    case 'Furniture':
        $product = new Furniture($result->sku, $result->name, $result->price, $result->height, $result->width, $result->length);
        break;
    case 'DVD':
        $product = new Dvd($result->sku, $result->name, $result->price, $result->size);
        break;
}
$Query->insertProduct($product->sku, $product->name, $product->price, $product->type, $product->description);
