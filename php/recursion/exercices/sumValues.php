<?php 

namespace phpCodes\recursion\exercises;

function sumValues(array $data) {
    if(count($data) === 0) return 0;
    if(count($data) === 1) return $data[0];

    return $data[0] + sumValues(array_slice($data, 1));
}

$data = [1, 2, 3, 4];

echo sumValues($data);
echo "\n";