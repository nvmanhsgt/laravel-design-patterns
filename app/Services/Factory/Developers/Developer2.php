<?php

namespace App\Services\Factory\Developers;

abstract class Developer2
{
    public $type  = '';
    public $price = 0;

    public function training()
    {
        echo $this->type . ' Developer is trained' . PHP_EOL;
    }

    public function deliver()
    {
        echo $this->type . ' Developer is delivered with prices: ' . $this->price;
    }

}