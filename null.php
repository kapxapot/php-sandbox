<?php

$a[null] = null;

var_dump($a);

var_dump(get_class(null)); // warning

$iAmNull = null;

var_dump($iAmNull instanceof \DateTime);
