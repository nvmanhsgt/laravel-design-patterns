<?php

namespace App\Http\Controllers\Repository;

use App\Http\Controllers\Controller;
use App\Services\Factory\Problem0\Developer0Factory;
use App\Services\Factory\Problem1\Developer1Factory;
use App\Services\Factory\Problem2\OsakaDeveloperFactory;
use App\Services\Factory\Problem3\HNDeveloperFactory;

class DeveloperController extends Controller
{
    public function developer()
    {
        $factory = new Developer0Factory();
        $factory->produceDeveloper('java');
    }

    public function developerSgt()
    {
        $factory =  new Developer1Factory();
        $factory->produceDeveloper('node');
    }

    public function developerOsaka()
    {
        $factory = new OsakaDeveloperFactory();
        $factory->produceDeveloper('node');
    }

    public function developerHn()
    {
        $factory = new HNDeveloperFactory();
        $factory->produceDeveloper('php');
    }
}
