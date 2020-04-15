<?php

$pattern = '/^(\\\\|\/)?\.\./';

$tests = [
    '\\..\\log\\app.log',
    '/../log/app.log',
    '..\\log\\app.log',
    '../log/app.log',
];

foreach ($tests as $test) {
    var_dump(
        [
            $test,
            preg_match($pattern, $test)
        ]
    );
}
