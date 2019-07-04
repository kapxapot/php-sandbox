<?php

namespace Hello;

class SomeClass
{
    public function getClass()
    {
        return static::class;
    }
}

$c = new SomeClass();

var_dump(['get_class', get_class($c)]);
var_dump(['getClass()', $c->getClass()]);
var_dump(['::class', SomeClass::class]);
