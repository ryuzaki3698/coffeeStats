<?php

namespace CoffeeStats\Bundle\CoffeeStatsBundle\Lib;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CoffeeDataLib
 *
 * @author SUPINTERNET
 */
class CoffeeDataLib {

    //private $url = 'http://10.102.187.190/live.csv';

    function __construct($ip)
    {
        $url1 = 'http://'.$ip.'/live.csv';
        
    }
    
    public function getFile() {
        
        $ch = curl_init();
        $timeout = 4;
        curl_setopt($ch, CURLOPT_URL, $this ->url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        $data = curl_exec($ch);
        curl_close($ch);
        //$dat = explode(",", $data);
        return $data;
        var_dump( explode( ',', $data ) );
    }
}
