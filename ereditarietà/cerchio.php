<?php

class Cerchio {
    const PI = 3.14;
    private $raggio;

    public function __construct($raggio){
        $this->raggio = $raggio;
    }
    public function setrRaggio($raggio){
        $this->raggio = $raggio;
    }

    public function getRaggio(){
        return $this->raggio;
    }

    public function area(){
        return Cerchio::PI * $this->raggio * $this->raggio;
    }

    public function circonferenza(){
        return 2 * Cerchio::PI * $this->raggio;
    }

    
}

class CoronaCircolare extends Cerchio {
    private $raggio_interno;

    public function __construct($raggio, $raggio_interno){
        parent::__construct($raggio);
        $this->raggio_interno = $raggio_interno;
    }

    public function getRaggio_interno(){
        return $this->raggio_interno;
    }

    public function area()  {
        $area_interna=$this ->raggio_interno * $this->raggio_interno * Cerchio::PI;
        return parent::area() - $area_interna;
    }

    public function circonferenza_interna(){
        return 2 * Cerchio::PI * $this->raggio_interno;
    }
}

?>