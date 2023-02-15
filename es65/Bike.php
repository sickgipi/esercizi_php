<?php

    class Bike
    {
        //atributi
        private $matricola;
        private $misura;
        private $tipo; #passeggio, mountain-bike, corsa
        private $oraInizio;
        private static $prezzoPasseggio = 5;
        private static $prezzoMountainBike = 7;
        private static $prezzoCorsa = 8;


        //metodi
        public function __construct($mis, $tip)
        {
            $this->misura = $mis;
            $this->tipo = $tip;
            $this->oraInizio = time();
        }

        public function getMatricola()
        {
            return $this->matricola;
        }

        public function setMatricola($matricola)
        {
            $this->matricola = $matricola;
        }

        public function getMisura()
        {
            return $this->misura;
        }

        public function setMisura($misura)
        {
            $this->misura = $misura;
        }

        public function getTipo()
        {
            return $this->tipo;
        }

        public function setTipo($tipo)
        {
            $this->tipo = $tipo;
        }

        public function getOraInizio()
        {
            return $this->oraInizio;
        }

        public function setOraInizio($oraInizio)
        {
            $this->oraInizio = $oraInizio;
        }

        public function getPrezzoPasseggio()
        {
            return self::$prezzoPasseggio;
        }

        public function setPrezzoPasseggio($prezzoPasseggio)
        {
            self::$prezzoPasseggio = $prezzoPasseggio;
        }

        public static function getPrezzoMountainBike()
        {
            return self::$prezzoMountainBike;
        }

        public static function setPrezzoMountainBike($prezzoMountainBike)
        {
            self::$prezzoMountainBike = $prezzoMountainBike;
        }

        public static function getPrezzoCorsa()
        {
            return self::$prezzoCorsa;
        }

        public static function setPrezzoCorsa($prezzoCorsa)
        {
            self::$prezzoCorsa = $prezzoCorsa;
        }

        public function toString()
        {
            return "Matricola: " . $this->matricola . " Misura: " . $this->misura . " Tipo: " . $this->tipo . " Ora inizio: " . $this->oraInizio;
        }

        public function rental_fee($oraFineNoleggio)
        {
            $durataNoleggio = strtotime() - strtotime($this->oraInizioNoleggio);
            $importo = ($durataNoleggio / 3600) * $this->costoPerOra[$this->tipo];
            return $importo;
        }





    }

?>




