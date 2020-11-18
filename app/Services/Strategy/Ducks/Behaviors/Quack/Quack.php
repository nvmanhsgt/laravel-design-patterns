<?php

namespace App\Services\Strategy\Ducks\Behaviors\Quack;

use App\Services\Strategy\Ducks\Behaviors\QuackBehavior;

/**
 * Class Quack
 *
 * @package App\Services\Strategy\Ducks\Behaviors\Quack
 */
class Quack implements QuackBehavior
{
    /**
     * @return mixed|string
     */
    public function quack()
    {
        return 'Quack';
    }
}
