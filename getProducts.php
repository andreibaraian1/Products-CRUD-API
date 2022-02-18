<?php
require_once dirname(__DIR__).'./Product/Query.php';
require_once dirname(__DIR__).'./headers.php';

$Query = new Query();
echo $Query->selectProducts();
