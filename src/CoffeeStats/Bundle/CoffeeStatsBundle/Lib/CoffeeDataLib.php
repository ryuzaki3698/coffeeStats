<?php

namespace CoffeeStats\Bundle\CoffeeStatsBundle\Lib;

class CoffeeDataLib {

    private $url = '';

    function __construct($ip) {
        $this->url = 'http://' . $ip . '/live.csv';
    }

    private function getFile() {

        $ch = curl_init();
        $timeout = 4;
        curl_setopt($ch, CURLOPT_URL, $this->url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        $data = curl_exec($ch);
        curl_close($ch);

        return $data;
    }

    public function remoteFileExists() {
        
        if (!is_file($url)) {
            false;
        }
        return $data;
    }

    private function get($index) {

        $data = $this->getFile();

        $data = explode(',', $data);

        return $data[$index];
    }

    public function GetExpresso() {
        return $this->get(9);
    }

    public function GetLong() {
        return $this->get(7);
    }

    public function GetRistrito() {
        return $this->get(6);
    }
....
    public function GetThe() {
        return $this->get(8);
    }

    public function GetForce() {
        return $this->get(10);
    }

    public function GetConsoElec() {
        return $this->get(2);
    }

}
