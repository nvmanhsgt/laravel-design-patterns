<?php

namespace App\Services\Factory\Problem1;

class Developer1Factory
{
    private $simpleFactory;

    public function __construct()
    {
        $this->simpleFactory = new SimpleFactory();
    }

    public function produceDeveloper($type)
    {
        $developer = $this->simpleFactory->createDeveloper($type);
        $developer->training();
        $developer->deliver();

        return $developer;
    }
}