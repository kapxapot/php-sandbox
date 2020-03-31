<?php

trait With
{
    protected $value;

    public function value()
    {
        return $this->value;
    }

    public function with($value) : self
    {
        $this->value = $value;
        return $this;
    }
}

class Base
{
    use With;
}

class Derived extends Base
{
}

$base = new Base();
$derived = new Derived();

var_dump($base->with('value'));
var_dump($derived->with('value'));
