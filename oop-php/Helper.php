<?php

require_once "helper/Helper.php";

use Data\Helper\{Helper};

// tidak perlu membuat object

// bgini caranya mengakses static
echo Helper::$appName . PHP_EOL;

Helper::$appName = "Kizuna Ai";
echo Helper::$appName . PHP_EOL;

Helper::ErrorMathHandler();



