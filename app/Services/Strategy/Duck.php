<?php

namespace App\Services\Strategy;

use App\Services\Strategy\Ducks\Behaviors\QuackBehavior;
use App\Services\Strategy\Ducks\Behaviors\FlyBehavior;

abstract class Duck
{
    /**
     * @var FlyBehavior
     */
    protected $flyBehavior;
    /**
     * @var QuackBehavior
     */
    protected $quackBehavior;

    /**
     * Duck constructor.
     *
     * @param QuackBehavior $quackBehavior
     * @param FlyBehavior $flyBehavior
     */
    public function __construct(QuackBehavior $quackBehavior, FlyBehavior $flyBehavior)
    {
        $this->quackBehavior = $quackBehavior;
        $this->flyBehavior   = $flyBehavior;
    }

    /**
     * @return mixed
     */
    abstract public function display();

    /**
     * @return string
     */
    public function swim()
    {
        return "All duck float";
    }

    /**
     * @return mixed
     */
    public function quackPerform()
    {
        return $this->quackBehavior->quack();
    }

    /**
     * @return mixed
     */
    public function flyPerform()
    {
        return $this->flyBehavior->fly();
    }

    /**
     * @return FlyBehavior
     */
    public function getFlyBehavior(): FlyBehavior
    {
        return $this->flyBehavior;
    }

    /**
     * @param FlyBehavior $flyBehavior
     */
    public function setFlyBehavior(FlyBehavior $flyBehavior): void
    {
        $this->flyBehavior = $flyBehavior;
    }

    /**
     * @return QuackBehavior
     */
    public function getQuackBehavior(): QuackBehavior
    {
        return $this->quackBehavior;
    }

    /**
     * @param QuackBehavior $quackBehavior
     */
    public function setQuackBehavior(QuackBehavior $quackBehavior): void
    {
        $this->quackBehavior = $quackBehavior;
    }
}
