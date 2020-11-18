<?php

namespace App\Http\Controllers\Strategy;

use App\Http\Controllers\Controller;
use App\Services\Strategy\Ducks\Decoy;
use App\Services\Strategy\Ducks\MallardDuck;
use App\Services\Strategy\Ducks\RedHeadDuck;
use App\Services\Strategy\Ducks\RubberDuck;

class DuckController extends Controller
{
    /**
     * @return string
     */
    public function rubberDuck()
    {
        /** @var RubberDuck $duck */
        $duck = resolve(RubberDuck::class);
        return $duck->display() . ', ' . $duck->quackPerform() . ', ' . $duck->flyPerform() . ', ' . $duck->swim();
    }

    /**
     * @return string
     */
    public function mallardDuck()
    {
        /** @var MallardDuck $duck */
        $duck = resolve(MallardDuck::class);
        return $duck->display() . ', ' . $duck->quackPerform() . ', ' . $duck->flyPerform() . ', ' . $duck->swim();
    }

    /**
     * @return string
     */
    public function redHeadDuck()
    {
        /** @var RedHeadDuck $duck */
        $duck = resolve(RedHeadDuck::class);
        return $duck->display() . ', ' . $duck->quackPerform() . ', ' . $duck->flyPerform() . ', ' . $duck->swim();
    }

    /**
     * @return string
     */
    public function decoyDuck()
    {
        /** @var Decoy $duck */
        $duck = resolve(Decoy::class);
        return $duck->display() . ', ' . $duck->quackPerform() . ', ' . $duck->flyPerform() . ', ' . $duck->swim();
    }
}
