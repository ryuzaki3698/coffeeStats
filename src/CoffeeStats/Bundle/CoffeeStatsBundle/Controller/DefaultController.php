<?php

namespace CoffeeStats\Bundle\CoffeeStatsBundle\Controller;

use CoffeeStats\Bundle\CoffeeStatsBundle\Form\CoffeeAddType;
use CoffeeStats\Bundle\CoffeeStatsBundle\Lib\CoffeeDataLib;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function dashboardAction()
    {
        $user = $this->getUser();
        
        // need coffee
        if($user->getStockCoffee() < 300) {
            $user->setNeedCoffee(true);
        } 
        
        $coffeeLib = new CoffeeDataLib($user->getIp());
        
        $form_add_coffee_stock = $this->createForm(new CoffeeAddType());
        
        return $this->render('CoffeeStatsBundle:Default:dashboard.html.twig', array(
            'form_add_coffee_stock' => $form_add_coffee_stock->createView(),
        ));
    }
}
