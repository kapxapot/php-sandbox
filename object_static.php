<?php

class One
{
    protected int $id;
    protected string $name;

    public function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public static function make()
    {
        return new static(1, 'some');
    }
}

class Two extends One
{
    protected string $text;

    public function __construct(int $id, string $name, string $text)
    {
        parent::__construct($id, $name);

        $this->text = $text;
    }
}

var_dump(Two::make()); // fatal error
