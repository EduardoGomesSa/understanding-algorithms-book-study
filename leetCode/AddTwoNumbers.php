<?php

namespace leetCode;

class ListNode
{
    public $val = 0;
    public $next = null;
    function __construct($val = 0, $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }
}

function addTwoNumbers(array $l1, array $l2)
{
    $l1 = (int) implode('', array_reverse($l1));
    $l2 = (int) implode('', array_reverse($l2));
    $result = array_map('intval', str_split(strrev((string)$l1 + $l2)));

    return $result;
}

$l1 = [2, 4, 3];
$l2 = [5, 6, 4];

$result = addTwoNumbers($l1, $l2);

print_r($result);
