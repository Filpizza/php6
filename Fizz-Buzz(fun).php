<?php

echo "Enter three numbers\n";
$handle = fopen ("php://stdin","r");
echo "Enter Fizz = ";
$fizz = (int)fgets($handle);
echo "Enter Buzz = ";
$buzz = (int)fgets($handle);
echo "Enter Last = ";
$last = (int)fgets($handle);
function by_fbz($f, $b, $l){

    $n = 0;
    while ($n++ < $l){

        if ($n % $f == 0 && $n % $b == 0) {
            echo "FB ";
        }
        elseif ($n % $f == 0) {
            echo "F ";
        }
        elseif ($n % $b == 0) {
            echo "B ";
        }
        else {
            echo "$n ";
        }
    }
    return true;
}
by_fbz($fizz, $buzz, $last);