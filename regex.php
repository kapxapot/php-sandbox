<?php

$pattern = '/^[^\?#\+]+$/';

var_dump(
    [
        preg_match($pattern, null),
        preg_match($pattern, ''),
        preg_match($pattern, 'ababa'),
        preg_match($pattern, 'aba?ba'),
        preg_match($pattern, 'aba+ba'),
        preg_match($pattern, 'aba#ba'),
    ]
);

preg_match('/^[\w\p{Cyrillic}\s\-\']+$/u', 'aba-b\'a', $test1);
preg_match('/^[\w\p{Cyrillic}\s\-\']+$/u', 'аба-ба', $test2);
preg_match('/^[\w\s\-\']+$/u', 'aba-b\'a', $test3);

var_dump([$test1, $test2, $test3]);

$ultRegex = '/^(\w|[\p{Cyrillic}]|-|\'|\s)+$/u';

preg_match($ultRegex, 'ab a-b\'a', $test3);
preg_match($ultRegex, 'аб а-ба', $test4);
preg_match($ultRegex, 'aba a-b\'a аб а-ба', $test5);
preg_match($ultRegex, 'aba123 a-b\'a аб123 а-ба 123', $test6);

var_dump([$test3, $test4, $test5, $test6]);
