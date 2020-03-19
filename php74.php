<?php

// typed properties

class Test
{
    public int $num;
    public string $str;
}

$test = new Test();
$test->num = 123;
$test->str = 'str';

var_dump($test);

// arrow functions

$factor = 10;
$nums = array_map(
    fn ($n) => $n * $factor,
    [1, 2, 3, 4]
);

var_dump($nums);

// coalescing assignment

$some ??= 'some';

var_dump($some);

// arrays unpacking

$first = [1, 2, 3];
$second = [4, 5, 6];
$merged = [...$first, ...$second];

var_dump($merged);
