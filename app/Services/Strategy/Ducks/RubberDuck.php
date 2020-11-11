<?php

namespace App\Services\Strategy\Ducks;

use App\Services\Strategy\Duck;
use App\Services\Strategy\Ducks\Behaviors\Fly\FlyNoWay;
use App\Services\Strategy\Ducks\Behaviors\Quack\MuteQuack;

/**
 * Class RubberDuck
 *
 * @package App\Services\Strategy\Ducks
 */
class RubberDuck extends Duck
{
    /**
     * RubberDuck constructor.
     *
     * @param MuteQuack $quackBehavior
     * @param FlyNoWay $flyBehavior
     */
    public function __construct(MuteQuack $quackBehavior, FlyNoWay $flyBehavior)
    {
        parent::__construct($quackBehavior, $flyBehavior);
    }

    /**
     * @return mixed|string
     */
    public function display()
    {
        return 'I am Rubber Duck';
    }
}
