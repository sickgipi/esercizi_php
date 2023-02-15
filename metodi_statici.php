<?php
class Pubblicazione{

    # attributi
    private $titolo;
    private $autore;
    private $numero_pagine;
    private static $costo_per_pagina = 0.02;


    # definizione costruttore
    public function __construct($titolo, $autore, $numero_pagine){
        $this->titolo = $titolo;
        $this->autore = $autore;
        $this->numero_pagine = $numero_pagine;
    }

    # metodi

    public function getTitolo(){
        return $this->titolo;
    }
    public function getAutore(){
        return $this->autore;
    }
    public function getNumeroPagine(){
        return $this->numero_pagine;
    }
    public static function getCosto_per_pagina(){
        return self::$costo_per_pagina;  // self si riferisce all'attributo statico
    }

    public function setTitolo($titolo){
        $this->titolo = $titolo;
    }

    public function setNumeroPagine($numero_pagine){
        $this->numero_pagine = $numero_pagine;
    }

    public static function setCosto_per_pagina($costo_per_pagina){
        self::$costo_per_pagina = $costo_per_pagina;  // self si riferisce all'attributo statico
    }

    public function prezzo(){
        return $this->numero_pagine * self::$costo_per_pagina; 
    }

    public function toString(){
        return "Titolo: " . $this->titolo . " Autore: " . $this->autore . " Numero pagine: " . $this->numero_pagine. " Prezzo: " . $this->prezzo();
    }

   

}


?>