<?php

namespace App\Services\Strategy\Ducks\Behaviors\Quack;

use App\Services\Strategy\Ducks\Behaviors\QuackBehavior;

/**
 * Class Squeak
 *
 * @package App\Services\Strategy\Ducks\Behaviors\Quack
 */
class Squeak implements QuackBehavior
{
    /**
     * @return mixed|string
     */
    public function quack()
    {
        return 'Squeak';
    }
}
