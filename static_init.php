<?php

class Cool
{
    private $str;

    public function __construct(string $str)
    {
        $this->str = $str;
    }

    public function getStr()
    {
        return $this->str;
    }
}

class Some
{
    public static $cools = [
        new Cool('one'),
        new Cool('two')
    ];

    public static function do()
    {
        foreach (self::$cools as $cool) {
            var_dump($cool->getStr());
        }
    }
}

Some::do();
