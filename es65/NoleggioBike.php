<?php

class NoleggioBike {
    private $mountainBikes = [];
    private $passeggioBikes = [];
    private $corsaBikes = [];

    public function __construct($mountainBikesC, $passeggioBikesC, $corsaBikesC)
    {
        for ($i = 0; $i < $mountainBikesC; $i++) {
            $this->mountainBikes[] = new Bike(20, "mountain-bike");
        }
        for ($i = 0; $i < $passeggioBikesC; $i++) {
            $this->passeggioBikes[] = new Bike(20, "passeggio");
        }
        for ($i = 0; $i < $corsaBikesC; $i++) {
            $this->corsaBikes[] = new Bike(20, "corsa");
        }
    }

    public function getRastrelliera($tipo){
        if($tipo == "mountain-bike"){
            return $this->mountainBikes;
        }
        if($tipo == "passeggio"){
            return $this->passeggioBikes;
        }
        if($tipo == "corsa"){
            return $this->corsaBikes;
        }
        return null;
    }



        public function getBike($tipo, $misura){
            if($tipo == "mountain-bike"){
                if(count($this->mountainBikes) > 0){
                    $bike = array_pop($this->mountainBikes);
                    $bike->setMisura($misura);
                    return $bike;
                }
            }
            if($tipo == "passeggio"){
                if(count($this->passeggioBikes) > 0){
                    $bike = array_pop($this->passeggioBikes);
                    $bike->setMisura($misura);
                    return $bike;
                }
            }
            if($tipo == "corsa"){
                if(count($this->corsaBikes) > 0){
                    $bike = array_pop($this->corsaBikes);
                    $bike->setMisura($misura);
                    return $bike;
                }
            }
            return null ;
        }

        public function setBike($bike){
            if($bike->getTipo() == "mountain-bike"){
                $this->mountainBikes[] = $bike;
            }
            if($bike->getTipo() == "passeggio"){
                $this->passeggioBikes[] = $bike;
            }
            if($bike->getTipo() == "corsa"){
                $this->corsaBikes[] = $bike;
            }
        }

        public function getN(){
            return count($this->mountainBikes) + count($this->passeggioBikes) + count($this->corsaBikes);
        }

        public function toString($tipo){


        $rastrelliera = $this->getRastrelliera($tipo);
        $string = "Elenco biciclette di tipo $tipo: ";
        foreach ($rastrelliera as $bike) {
            if ($bike !== null) {
                $string .= $bike->toString() . ", ";
            }
        }
        return $string;
        }









}