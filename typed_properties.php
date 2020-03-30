<?php

class Inner
{
}

class Some
{
    private ?Inner $first = null;
    private Inner $second;

    public function __construct()
    {
    }

    public function first() : ?Inner
    {
        return $this->first;
    }

    public function second() : Inner
    {
        return $this->second;
    }
}

$some = new Some();

var_dump($some->first());
//var_dump($some->second()); // fatal error
