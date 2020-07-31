<?php

$parts1 = ['aa', null];
$parts2 = [null, null];

var_dump(implode(' ', array_filter($parts1)));
var_dump(implode(' ', array_filter($parts2)));
