<?php

$min = 10000000000000;
$max = 99999999999999999;
// A variable which stores line break
$space = "<br><br>";

// A variable that stores vertical lines
$line = "<hr>";

for ($i = 0; $i < rand(220, 250); $i++) {


    if ($i <= 10) {
        echo "MTN 1000" . $space;
        echo mt_rand($min, $max) . $line;
    }

    elseif (10 < $i && $i <= 30) {
        echo "MTN 500" . $space;
        echo mt_rand($min, $max) . $line;
    }

    elseif (30 < $i && $i <= 70) {

        echo "9Mobile 1000" . $space;
        echo mt_rand($min, $max) . $line;
    }

    elseif (70 < $i && $i <= 110) {
        echo "9Mobile 500" . $space;
        echo mt_rand($min, $max) . $line;
    }

    elseif (110 < $i && $i <= 150) {
        echo "9Mobile 1000" . $space;
        echo mt_rand($min, $max) . $line;
    }

    elseif (150 < $i && $i <= 170) {
        echo "Glo 1000" . $space;
        echo mt_rand($min, $max) . $line;
    }

    elseif (170 < $i && $i <= 190) {
        echo "Glo 500" . $space;
        echo mt_rand($min, $max) . $line;
    }

    elseif (190 < $i && $i <= 210) {
        echo "Airtel 1000" . $space;
        echo mt_rand($min, $max) . $line;
    }

    else {
        echo "Airtel 500" . $space;
        echo mt_rand($min, $max) . $line;
    }
}

echo "Done.";
?>