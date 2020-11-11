<?php

namespace App\Services\Strategy\Ducks\Behaviors\Fly;

use App\Services\Strategy\Ducks\Behaviors\FlyBehavior;

/**
 * Class FlyWithWings
 *
 * @package App\Services\Strategy\Ducks\Behaviors\Fly
 */
class FlyWithWings implements FlyBehavior
{
    /**
     * @return mixed|string
     */
    public function fly()
    {
        return 'I am flying';
    }
}
