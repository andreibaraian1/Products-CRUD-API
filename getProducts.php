<?php
require_once dirname(__FILE__).'/Product/Query.php';
require_once dirname(__FILE__).'/headers.php';
$Query = new Query();
echo $Query->selectProducts();
