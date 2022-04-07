<?php

require_once "data/Category.php";

use Category\{Category};

$category = new Category();
$category->setName("Macbook");
$category->setExpensive(true);

$category = new Category();
$category->setName("est");
$category->setExpensive(true);

echo "Product {$category->getName()} is very {$category->isExpensive()}" . PHP_EOL;
