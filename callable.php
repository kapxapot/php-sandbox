<?php

class Event
{
}

class InvokeMe
{
    public function __invoke(Event $e) : string
    {
        return 'object';
    }
}

$i = new InvokeMe();

$f = fn (Event $e) => 'closure';

var_dump(
    [
        'InvokeMe callable? ' . is_callable($i) ? 'Y' : 'N',
        'InvokeMe object? ' . is_object($i) ? 'Y' : 'N',
        'InvokeMe class? ' . get_class($i),
        'Closure callable? ' . is_callable($f) ? 'Y' : 'N',
        'Closure object? ' . is_object($f) ? 'Y' : 'N',
        'Closure class? ' . get_class($f),
    ]
);

$ci = \Closure::fromCallable($i);
$cf = \Closure::fromCallable($f);

var_dump([$ci, $cf]);

$rfi = new \ReflectionFunction($ci);
$rff = new \ReflectionFunction($cf);

$pi = $rfi->getParameters()[0];
$pf = $rff->getParameters()[0];

var_dump(
    [
        $pi->getClass()->name,
        $pf->getClass()->name,
    ]
);
