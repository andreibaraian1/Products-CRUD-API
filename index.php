<?php
include './Controller/Products/Book.php';
include './headers.php';

$book = new Book('1', 'numetest', 30, 2);
var_dump($book);

echo 'Nothing here';
