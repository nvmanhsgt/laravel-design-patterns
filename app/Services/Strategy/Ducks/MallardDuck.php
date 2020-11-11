<?php

namespace App\Services\Strategy\Ducks;

use App\Services\Strategy\Duck;
use App\Services\Strategy\Ducks\Behaviors\Fly\FlyWithWings;
use App\Services\Strategy\Ducks\Behaviors\Quack\Quack;

class MallardDuck extends Duck
{
    /**
     * MallardDuck constructor.
     *
     * @param Quack $quackBehavior
     * @param FlyWithWings $flyBehavior
     */
    public function __construct(Quack $quackBehavior, FlyWithWings $flyBehavior)
    {
        parent::__construct($quackBehavior, $flyBehavior);
    }

    /**
     * @return mixed|string
     */
    public function display()
    {
        return 'I am Mallard Duck';
    }
}
