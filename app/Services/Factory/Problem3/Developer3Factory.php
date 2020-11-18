<?php

namespace App\Services\Factory\Problem3;

use App\Services\Factory\Developers\Developer3;

abstract class Developer3Factory
{
    public function produceDeveloper($type)
    {
        $developer = $this->createDeveloper($type);
        $developer->training();
        $developer->deliver();

        return $developer;
    }

    abstract public function createDeveloper($type): Developer3;
}