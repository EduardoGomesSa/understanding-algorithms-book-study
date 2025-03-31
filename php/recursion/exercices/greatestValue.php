<?php 

namespace phpCodes\recursion\exercises;

function greatestValue(array $data, $greatest) {
    if(count($data) === 0) return 0;
    if(count($data) === 1) {
        if($greatest < $data[0]) {
            return $data[0];
        }
        return $greatest;
    } 

    if($greatest < $data[0]) {
        $greatest = $data[0];
    }
    
    return greatestValue(array_slice($data, 1), $greatest);
}

$data = [1, 3, 2, 4, 1, 2, 3, 2, 1];
echo greatestValue($data, $data[0]);
echo "\n";