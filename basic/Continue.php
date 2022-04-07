<?php

for ($counter = 0; $counter <= 100; $counter++) {
    if ($counter %3 == 0) {
        continue;
    }

    echo "Continue ke $counter" . PHP_EOL;
}
