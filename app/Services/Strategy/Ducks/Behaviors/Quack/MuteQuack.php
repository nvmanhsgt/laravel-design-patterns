<?php

namespace App\Services\Strategy\Ducks\Behaviors\Quack;

use App\Services\Strategy\Ducks\Behaviors\QuackBehavior;

/**
 * Class MuteQuack
 *
 * @package App\Services\Strategy\Ducks\Behaviors\Quack
 */
class MuteQuack implements QuackBehavior
{
    /**
     * @return mixed|string
     */
    public function quack()
    {
        return 'Silence';
    }
}
