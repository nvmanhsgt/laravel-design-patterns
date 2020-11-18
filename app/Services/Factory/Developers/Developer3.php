<?php

namespace App\Services\Factory\Developers;

abstract class Developer3
{
    public $type  = '';
    public $price = 0;

    abstract function training();

    public function deliver()
    {
        echo $this->type . ' Developer is delivered with prices: ' . $this->price;
    }
}