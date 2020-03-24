<?php

abstract class Base
{
}

class Derived extends Base
{
}

abstract class BaseUser
{
    public abstract function getObj() : Base;
}

class DerivedUser extends BaseUser
{
    public function getObj() : Derived // works since PHP 7.4
    {
        return new Derived();
    }
}

$du = new DerivedUser();
$duObj = $du->getObj();

var_dump($duObj);
