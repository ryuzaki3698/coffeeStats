<?php

namespace CoffeeStats\Bundle\CoffeeStatsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use CoffeeStats\Bundle\CoffeeStatsBundle\Lib\CoffeeDataLib;

class TestController extends Controller {

    public function dataAction() {
        $coffee = new CoffeeDataLib('10.102.187.190');

        $data = $coffee->RemoteFileExists();

        var_dump($data);
        die($data);
    }

}
