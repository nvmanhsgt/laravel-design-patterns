<?php

namespace App\Services\Strategy\Ducks\Behaviors\Fly;

use App\Services\Strategy\Ducks\Behaviors\FlyBehavior;

/**
 * Class FlyNoWay
 *
 * @package App\Services\Strategy\Ducks\Behaviors\Fly
 */
class FlyNoWay implements FlyBehavior
{
    /**
     * @return mixed|string
     */
    public function fly()
    {
        return 'I can not fly';
    }
}
