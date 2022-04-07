<?php

require_once "data/Shape.php";

use Data\{Shape, Rectangle};


$shape = new Shape();
echo $shape->getShapeCorner() . PHP_EOL;

$rectangle = new Rectangle();
echo $rectangle->getRectangleCorner() . PHP_EOL;
echo $rectangle->getShapeCornerParent() . PHP_EOL;
