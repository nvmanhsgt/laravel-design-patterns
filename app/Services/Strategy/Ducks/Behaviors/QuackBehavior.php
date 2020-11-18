<?php

namespace App\Services\Strategy\Ducks\Behaviors;

/**
 * Interface QuackBehavior
 *
 * @package App\Services\Strategy\Ducks\Behaviors
 */
interface QuackBehavior
{
    /**
     * @return mixed
     */
    public function quack();
}
