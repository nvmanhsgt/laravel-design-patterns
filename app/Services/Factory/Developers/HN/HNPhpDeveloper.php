<?php

namespace App\Services\Factory\Developers\HN;

use App\Services\Factory\Components\TrainingComponentFactory;
use App\Services\Factory\Developers\Developer3;

class HNPhpDeveloper extends Developer3
{
    public $type  = 'HNPhp';
    public $price = 1500;
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
        $this->trainingComponentFactory->trainingBasic();
        $this->trainingComponentFactory->trainingFramework();
    }
}