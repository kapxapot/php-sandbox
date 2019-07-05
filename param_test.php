<?php

class C
{
}

function f(C $c) : void
{
}

function g(?C $c) : void
{
}

function h(C $c = null) : void
{
}

//f(null); // fatal error
g(null);
h(null);
h();
