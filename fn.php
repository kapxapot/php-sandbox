<?php

class FnClass
{
    public static int $id = 0;
    public \Closure $func;

    public function __construct()
    {
        $this->func = fn () => ++self::$id;
    }
}

$fn = new FnClass();

var_dump([FnClass::$id, ($fn->func)()]);
var_dump([FnClass::$id, ($fn->func)()]);
