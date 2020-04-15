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
