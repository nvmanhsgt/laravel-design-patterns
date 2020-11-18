<?php

namespace App\Services\Factory\Developers\HN;

use App\Services\Factory\Components\TrainingComponentFactory;
use App\Services\Factory\Developers\Developer3;

class HNNodeDeveloper extends Developer3
{
    public $type  = 'HNNode';
    public $price = 1200;
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
        $this->trainingComponentFactory->trainingBasic();
        $this->trainingComponentFactory->trainingFramework();
    }
}