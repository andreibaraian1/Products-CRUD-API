<?php
require_once './Product/Query.php';
require_once './headers.php';

$Query = new Query();
echo $Query->selectProducts();
