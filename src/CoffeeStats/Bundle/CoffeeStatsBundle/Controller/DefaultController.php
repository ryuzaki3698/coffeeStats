<?php

namespace CoffeeStats\Bundle\CoffeeStatsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use CoffeeStats\Bundle\CoffeeStatsBundle\Lib\CoffeeDataLib;

class DefaultController extends Controller
{
    public function dashboardAction()
    {
        $user = $this->getUser();
        
        $coffeeLib = new CoffeeDataLib($user->getIp());
        
       // $coffeeLib = new 
        
        return $this->render('CoffeeStatsBundle:Default:dashboard.html.twig');
    }
}
