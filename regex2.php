<?php

preg_match('/^[\w\p{Cyrillic}\s\-\']+$/u', 'aba-b\'a', $test1);
preg_match('/^[\w\p{Cyrillic}\s\-\']+$/u', 'аба-ба', $test2);
preg_match('/^[\w\s\-\']+$/u', 'aba-b\'a', $test3);

var_dump([$test1, $test2, $test3]);

$ultRegex = '/^(\w|[\p{Cyrillic}]|-|\'|\s)+$/u';

preg_match($ultRegex, 'ab a-b\'a', $test4);
preg_match($ultRegex, 'аб а-ба', $test5);
preg_match($ultRegex, 'aba a-b\'a аб а-ба', $test6);
preg_match($ultRegex, 'aba123 a-b\'a аб123 а-ба 123', $test7);

var_dump([$test4, $test5, $test6, $test7]);
