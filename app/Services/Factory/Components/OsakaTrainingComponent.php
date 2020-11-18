<?php

namespace App\Services\Factory\Components;

class OsakaTrainingComponent extends TrainingComponentFactory
{
    public function trainingGit()
    {
        echo "Training Git";
    }

    public function trainingBasic()
    {
        echo "Training Basic" . PHP_EOL;
    }

    public function trainingFramework()
    {
        echo "Training Laravel" . PHP_EOL;
    }
}