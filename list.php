<?php

[$a, $b] = null;

var_dump([$a, $b]);

[$a, $b] = [];

var_dump([$a, $b]);

[$a, $b] = [1];

var_dump([$a, $b]);

[$a, $b] = [2, 3];

var_dump([$a, $b]);

[$a, $b] = [4, 5, 6];

var_dump([$a, $b]);

[, $b] = [1, 2];

var_dump($b);
