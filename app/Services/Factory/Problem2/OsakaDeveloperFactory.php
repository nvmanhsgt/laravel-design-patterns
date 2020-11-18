<?php

namespace App\Services\Factory\Problem2;

use App\Services\Factory\Developers\Osaka\OsakaJavaDeveloper;
use App\Services\Factory\Developers\Osaka\OsakaNodeDeveloper;
use App\Services\Factory\Developers\Osaka\OsakaPhpDeveloper;

class OsakaDeveloperFactory extends Developer2Factory
{
    public function createDeveloper($type)
    {
        switch ($type) {
            case 'php':
                $developer = new OsakaPhpDeveloper();
                break;
            case 'java':
                $developer = new OsakaJavaDeveloper();
                break;
            case 'node':
                $developer = new OsakaNodeDeveloper();
                break;
            default:
                $developer = null;
        }

        return $developer;
    }
}