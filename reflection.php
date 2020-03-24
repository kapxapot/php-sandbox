<?php

class Some
{
    public static string $id = 'id';
}

$class = Some::class;

$id = $class::$id;

var_dump($id);
