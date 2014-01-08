<?php

namespace CoffeeStats\Bundle\CoffeeStatsBundle\Lib;

class CoffeeDataLib {

    private $url = '';

    function __construct($ip)
    {
        $this->url = 'http://'.$ip.'/live.csv';
        
    }
    
    public function getFile() {
        
        $ch = curl_init();
        $timeout = 4;
        curl_setopt($ch, CURLOPT_URL, $this ->url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        $data = curl_exec($ch);
        curl_close($ch);
        
        return $data;
    }
}
