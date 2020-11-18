<?php

namespace App\Services\Factory\Problem2;

abstract class Developer2Factory
{
    public function produceDeveloper($type)
    {
        $developer = $this->createDeveloper($type);
        $developer->training();
        $developer->deliver();
        return $developer;
    }

    abstract public function createDeveloper($type);
}