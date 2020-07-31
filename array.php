<?php

//$a = [0, 1];
//var_dump([$a[0] ?? null, $a[1] ?? null, $a[2] ?? null]);

var_dump(implode('<br/><br/>', []));

$a = [1];

var_dump($a[1] ?? null);

[$first, $second] = $a;

var_dump([$first, $second]); // notice
