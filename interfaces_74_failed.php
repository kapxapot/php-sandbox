<?php

interface BasicInterface
{
    public function method() : int;
}

interface ExtendedInterface extends BasicInterface
{
    public function extendedMethod() : string;
}

class Basic implements BasicInterface
{
    public function method() : int
    {
        return 1;
    }
}

class Extended extends Basic implements ExtendedInterface
{
    public function extendedMethod() : string
    {
        return "hey";
    }
}

class BasicUsage
{
    protected BasicInterface $inner;

    public function __construct(BasicInterface $inner)
    {
        $this->inner = $inner;
    }

    public function usage() : array
    {
        return [
            $this->inner->method()
        ];
    }
}

class ExtendedUsage extends BasicUsage
{
    protected ExtendedInterface $inner;

    public function __construct(ExtendedInterface $inner)
    {
        parent::__construct($inner);
        $this->inner = $inner;
    }

    public function usage() : array
    {
        return [
            $this->inner->method(),
            $this->inner->extendedMethod()
        ];
    }
}

$basic = new BasicUsage(new Basic());
$extended = new ExtendedUsage(new Extended());

var_dump($basic->usage());
var_dump($extended->usage());
