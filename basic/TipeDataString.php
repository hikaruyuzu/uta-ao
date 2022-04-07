<?php

$waifu = "Tsukasa Chan";
echo "Hello test test test hallo",  $waifu, "\n";

$name = "Hallo watahi namaewa koidesu";
echo $name;

// heredoc bisa passing variable
// nowdoc gabisa parsing variable

$testHeredoc = <<<TESTAJA
Ini adalah hiredoc disini kamu bisa
membuat multiline string bahkan dengan quote
"test test test" bisa passing
TESTAJA;

echo $testHeredoc;

echo <<<'TESTAJANWDOC'
Nah kalo ini namanya nowdoc dia gabisa passing dari variable lain wkwkwkw
wkwkw
wwlwwkwk
TESTAJANWDOC;



