<?php

echo '1. nulls' . PHP_EOL;

$a = [0, 1];
var_dump([$a[0] ?? null, $a[1] ?? null, $a[2] ?? null]);

echo '2. implode' . PHP_EOL;

var_dump(implode('<br/><br/>', []));

echo '3. decomposition' . PHP_EOL;

$a = [1];
[$first, $second] = $a;
var_dump([$first, $second]); // notice

echo '4. merge' . PHP_EOL;

var_dump(
    array_merge(
        [
            'one' => 1,
            'two' => 2,
        ],
        [
            'two' => 3,
        ]
    )
);
