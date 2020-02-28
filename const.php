<?php

class Some
{
    public const Br = '1';
    public const BrBr = self::Br . self::Br;
}

var_dump([Some::Br, Some::BrBr]);
