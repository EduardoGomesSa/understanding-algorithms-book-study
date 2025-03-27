<?php 

namespace phpCodes\recursion;

function factorial($n) {
    if($n === 1) return 1;

    return $n * factorial($n - 1);
}

echo factorial(5) . "\n";
echo factorial(3) . "\n";
echo factorial(10) . "\n";
echo factorial(4) . "\n";
echo factorial(1) . "\n";