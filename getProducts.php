<?php
require_once dirname(__FILE__) . '/Product/product.php';
require_once dirname(__FILE__) . '/headers.php';

$Product = new Product();
echo $Product->selectProducts();
