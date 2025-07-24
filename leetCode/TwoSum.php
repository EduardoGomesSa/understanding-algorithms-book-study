<?php

namespace leetCode;

// class Solution {

//     /**
//      * @param Integer[] $nums
//      * @param Integer $target
//      * @return Integer[]
//      */
//     function twoSum(array $nums, $target) {
//         for($i=0;$i<count($nums)-1;$i++){
//             if($nums[$i] + $nums[$i+1] == $target) return [$i,$i+1];
//         } 
//     }


// }

/**
//  * @param Integer[] $nums
 * @param Integer $target
 * @return Integer[]
 */
function twoSum(array $nums, $target)
{
    for ($i = 0; $i < count($nums) - 1; $i++) {
        if ($nums[$i] + $nums[$i + 1] == $target) return [$i, $i + 1];
    }

    return [];
}

$nums =[2,7,11,15];
$target = 9;
$result = twoSum($nums, $target);

print_r (twoSum($nums, $target));
