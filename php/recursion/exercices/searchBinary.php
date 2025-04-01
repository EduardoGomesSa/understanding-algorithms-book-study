<?php 

namespace phpCodes\recursion\exercises;

function searchBinary(array $data, int $item, int $low = 0, ?int $high = null) {
    if($high === null) {
        $high = count($data) - 1;
    }

    if($low > $high) return -1;

    $mid = floor(($low + $high) / 2);
    $kick = $data[$mid];

    if($kick === $item) {
        return $mid;
    }

    if($kick > $item) {
        return searchBinary($data, $item, $low, $mid - 1);
    } else {
        return searchBinary($data, $item, $mid + 1, $high);
    }
}

$data = [1, 2, 3, 4, 5, 6, 7];
echo searchBinary($data, 1);
echo "\n";

echo searchBinary($data, 6);
echo "\n";

echo searchBinary($data, 2);
echo "\n";

echo searchBinary($data, 6);
echo "\n";

echo searchBinary($data, 10);
echo "\n";