<?php

namespace CoffeeStats\Bundle\CoffeeStatsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function dashboardAction()
    {
        $coffeeLib = CoffeeDataLib();
        
        return $this->render('CoffeeStatsBundle:Default:dashboard.html.twig');
    }
}
