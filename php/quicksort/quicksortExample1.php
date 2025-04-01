<?php

namespace php\quicksort;

function quicksort(array $data)
{
    if (count($data) < 2) return $data;

    $pivot = $data[0];
    $minors = [];
    $bigger = [];

    // foreach ($data as $value) {
    //     if ($value <= $pivot) {
    //         $minors[] = $value;
    //     }
    // }

    // foreach ($data as $value) {
    //     if ($value > $pivot) {
    //         $bigger[] = $value;
    //     }
    // }
    // foreach ($data as $value) {
    //     if ($value < $pivot) {
    //         $minors[] = $value;
    //     } elseif ($value > $pivot) {
    //         $bigger[] = $value;
    //     }
    // }
    for ($i = 1; $i < count($data); $i++) {
        if ($data[$i] <= $pivot) {
            $minors[] = $data[$i];
        } elseif ($data[$i] > $pivot) {
            $bigger[] = $data[$i];
        }
    }

    return array_merge(quicksort($minors), [$pivot], quicksort($bigger));
}

$data = [3, 2, 4, 4, 1, 5, 0];
print_r(quicksort($data));
echo "\n";
