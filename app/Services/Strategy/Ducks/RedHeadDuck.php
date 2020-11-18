<?php

namespace App\Services\Strategy\Ducks;

use App\Services\Strategy\Duck;
use App\Services\Strategy\Ducks\Behaviors\Fly\FlyNoWay;
use App\Services\Strategy\Ducks\Behaviors\Quack\Quack;

class RedHeadDuck extends Duck
{
    /**
     * RedHeadDuck constructor.
     *
     * @param Quack $quackBehavior
     * @param FlyNoWay $flyBehavior
     */
    public function __construct(Quack $quackBehavior, FlyNoWay $flyBehavior)
    {
        parent::__construct($quackBehavior, $flyBehavior);
    }

    /**
     * @return mixed|string
     */
    public function display()
    {
        return 'I am Red Head Duck';
    }
}
