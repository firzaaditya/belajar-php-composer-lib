<?php

namespace Firza\BelajarComposer;

class Customer
{
    public function __construct(private string $name)
    {
    }

    public function sayHello(string $name) : string
    {
        return "Hello $name, My Name is $this->name";
    }
}
