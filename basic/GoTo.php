<?php
// fitur ini gapernah dipake membingunkan flow aplikasi
goto a;
echo "Hello world";

a:
echo "Jumpp to A". PHP_EOL;


// bisa juga digunakan untuk end while
$counter = 1;
while(true) {
    echo "Counter ke $counter" . PHP_EOL;
    $counter++;

    if ($counter > 10) {
        goto end;
    }

}

end:
echo "Jump to end";
