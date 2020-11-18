<?php

namespace App\Services\Factory\Problem1;

use App\Services\Factory\Developers\Sgt\JavaDeveloper;
use App\Services\Factory\Developers\Sgt\NodeDeveloper;
use App\Services\Factory\Developers\Sgt\PhpDeveloper;

class SimpleFactory
{
    public function createDeveloper($type)
    {
        switch ($type) {
            case 'php':
                $developer = new PhpDeveloper();
                break;
            case 'java':
                $developer = new JavaDeveloper();
                break;
            case 'node':
                $developer = new NodeDeveloper();
                break;
            default:
                $developer = null;
        }

        return $developer;
    }
}