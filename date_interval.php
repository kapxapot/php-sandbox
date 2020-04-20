<?php

$d1 = new \DateTime('2020-10-10');
$d2 = new \DateTime('2020-01-01');

var_dump(
    [
        $d1->diff($d2),
        $d2->diff($d1),
        $d1 > $d2,
        $d2 > $d1
    ]
);
