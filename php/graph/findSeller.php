<?php

namespace php\graph;

function personSellMango($name): bool
{
    return substr($name, -1) === "m";
}

$graph = [
    'voce' => ['alice', 'bob', 'claire'],
    'bob' => ['anuj', 'peggy'],
    'alice' => ['peggy'],
    'claire' => ['thom', 'jonny'],
    'anuj' => [],
    'peggy' => [],
    'thom' => [],
    'jonny' => []
];

function searchMangoSeller($name, $graph)
{
    $queue = $graph[$name];
    $verified = [];

    while (!empty($queue)) {
        $person = array_shift($queue);

        if (!in_array($person, $verified)) {
            if (personSellMango($person)) {
                echo "$person eh um vendedor(a) de mangas!\n";
                return true;
            }
            if (isset($graph[$person])) {
                $queue = array_merge($queue, $graph[$person]);
            }
            $verified[] = $person;
        }
    }

    echo "Nenhum vendedor de mangas encontrado.\n";
    return false;
}

searchMangoSeller('voce', $graph);
