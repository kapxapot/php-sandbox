<?php

trait SomeTrait
{
    public function func() : string
    {
        return parent::func() . ' Trait';
    }
}

class Base
{
    public function func() : string
    {
        return 'Base';
    }
}

class WithoutTrait extends Base
{
    public function func() : string
    {
        return parent::func() . ' WithoutTrait';
    }
}

class WithTrait extends Base
{
    use SomeTrait
    {
        func as protected parentFunc;
    }

    public function func() : string
    {
        return $this->parentFunc() . ' WithTrait';
    }
}

$without = new WithoutTrait();
$with = new WithTrait();

var_dump([
    'without' => $without->func(),
    'with' => $with->func(),
]);
