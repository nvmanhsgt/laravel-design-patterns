<?php

namespace App\Services\Factory\Problem0;

use App\Services\Factory\Developers\Sgt\JavaDeveloper;
use App\Services\Factory\Developers\Sgt\NodeDeveloper;
use App\Services\Factory\Developers\Sgt\PhpDeveloper;

class Developer0Factory
{
    public function produceDeveloper($type)
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
        $developer->training();
        $developer->deliver();
        return $developer;
    }
}