<?php
require_once dirname(__FILE__) . '/headers.php';
require_once dirname(__FILE__) . '/Product/Products/Book.php';
require_once dirname(__FILE__) . '/Product/Products/Dvd.php';
require_once dirname(__FILE__) . '/Product/Products/Furniture.php';
$json = file_get_contents('php://input');
$values = json_decode($json, true);
$result = (object) $values;

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

$product->insertProduct($product);
