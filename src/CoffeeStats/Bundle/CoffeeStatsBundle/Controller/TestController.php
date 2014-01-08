<?php

namespace CoffeeStats\Bundle\CoffeeStatsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use CoffeeStats\Bundle\CoffeeStatsBundle\Lib\CoffeeDataLib;

class TestController extends Controller {

    public function dataAction() {
        $coffee = new CoffeeDataLib();

        $data = $coffee->getFile();
        die($data);
    }

}
