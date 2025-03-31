<?php 

namespace phpCodes\recursion\exercises;

function counterItemNumberArray(array $data) {
    if(count($data) === 0) return 0;
    if(count($data) === 1) return 1;

    return 1 + counterItemNumberArray(array_slice($data, 1));
}

$data = [1, 2, 3, 4, 5, 5, 5];

echo counterItemNumberArray($data);
echo "\n";