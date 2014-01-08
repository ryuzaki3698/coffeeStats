<?php

namespace CoffeeStats\Bundle\CoffeeStatsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use CoffeeStats\Bundle\CoffeeStatsBundle\Lib\CoffeeDataLib;

class CoffeeController extends Controller
{
    public function addAction()
    {
        $request = $this->getRequest();
        
        $add = $request->request->get('coffee_add');
        $add = $add['stock'];
        $user = $this->getUser();
        $user->setStockCoffee($user->getStockCoffee() + $add);
        
        $em = $this->getDoctrine()->getManager();
        $em->flush();
        
        return $this->redirect($this->generateUrl('coffee_stats_homepage'));
    }
}
