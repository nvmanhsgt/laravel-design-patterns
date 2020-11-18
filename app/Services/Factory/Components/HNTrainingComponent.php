<?php

namespace App\Services\Factory\Components;

class HNTrainingComponent extends TrainingComponentFactory
{
    public function trainingGit()
    {
        echo "Training Git" . PHP_EOL;
    }

    public function trainingBasic()
    {
        echo "Training Japanese Basic" . PHP_EOL;
    }

    public function trainingFramework()
    {
        echo "Training Laravel" . PHP_EOL;
    }
}