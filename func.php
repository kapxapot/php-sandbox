<?php

class Some
{
    private $func;

    public function __construct(\Closure $func)
    {
        $this->func = $func;
    }

    public function callFunc($num)
    {
        return ($this->func)($num);
    }
}

$obj = new Some(
    function ($num) {
        return $num * $num;
    }
);

var_dump($obj->callFunc(4));
