<?php

require_once "data/Product.php";

use Product\Manga\{Manga};

$manga1 = new Manga("Kaguya sama love is war vol 1", 200000);
echo $manga1->getMangaTitle() . PHP_EOL;
echo $manga1->getMangaPrice() . PHP_EOL;




