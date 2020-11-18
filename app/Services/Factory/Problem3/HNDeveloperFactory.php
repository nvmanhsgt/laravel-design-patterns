<?php

namespace App\Services\Factory\Problem3;

use App\Services\Factory\Developers\Developer3;
use App\Services\Factory\Components\HNTrainingComponent;
use App\Services\Factory\Developers\HN\HNPhpDeveloper;
use App\Services\Factory\Developers\HN\HNJavaDeveloper;
use App\Services\Factory\Developers\HN\HNNodeDeveloper;

class HNDeveloperFactory extends Developer3Factory
{
    public function createDeveloper($type): Developer3
    {
        $HNTrainingComponent = new HNTrainingComponent();
        switch ($type) {
            case 'php':
                $developer = new HNPhpDeveloper($HNTrainingComponent);
                break;
            case 'java':
                $developer = new HNJavaDeveloper($HNTrainingComponent);
                break;
            case 'node':
                $developer = new HNNodeDeveloper($HNTrainingComponent);
                break;
            default:
                $developer = null;
        }

        return $developer;
    }
}