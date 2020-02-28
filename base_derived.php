<?php

class Base
{
    public static function create() : self
    {
        return new static();
    }
}

class Derived extends Base
{
}

var_dump(Base::create());
var_dump(Derived::create());
