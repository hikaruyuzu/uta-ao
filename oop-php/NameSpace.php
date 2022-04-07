<?php

// sebenarnya dia di akses di dalam glbal namespace di dalam namespace {}
require_once "data/ConstantNamespace.php";
require_once "data/Helper.php";

$accaount1 = new Data\One\Users\ConstantNamespace();
$accaount2 = new Data\Two\Sellers\ConstantNamespace();

Helper\ErrorHanler();
echo Helper\APPLICATION;

