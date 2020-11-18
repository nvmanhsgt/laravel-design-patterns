<?php

namespace App\Services\Factory\Developers\HN;

use App\Services\Factory\Components\TrainingComponentFactory;
use App\Services\Factory\Developers\Developer3;

class HNJavaDeveloper extends Developer3
{
    public $type  = 'HNJava';
    public $price = 1000;
    /**
     * @var TrainingComponentFactory
     */
    public $trainingComponentFactory;

    public function __construct($trainingComponent)
    {
        $this->trainingComponentFactory = $trainingComponent;
    }

    public function training()
    {
        $this->trainingComponentFactory->trainingGit();
        $this->trainingComponentFactory->trainingFramework();
    }
}