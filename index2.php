<?php
// Riprodurre una concessionaria di automobili in OOP seguendo questa gerarchia di classi, 
// con caratteristiche a scelta (Marchio, Modello, Prezzo….e altri a vostra scelta)

// Automobile
//     SUV
//     Utilitaria
//     Sportiva

// Implementare un metodo nella classe Automobile che permetta di stampare quante auto sono state prodotte. 
// Per ogni Classe che estende Automobile implementare un altro attributo oltre marchio, 
// modello e prezzo ed un metodo che permetta di stampare la stringa "Modello: , Marchio: , Prezzo: e nuovo attributo"

class Automobile{
    public $marchio;
    public $modello;
    public $prezzo;
    public $motore;
    public static $counter=0;
    
    public function __construct($new_marchio, $new_modello, $new_prezzo, $new_motore){
        $this->marchio=$new_marchio;
        $this->modello=$new_modello;
        $this->prezzo=$new_prezzo;
        $this->prezzo=$new_motore;
        self::$counter++;
    }    
}

class Suv extends Automobile{
    public $trasmissione;
    public function __construct($new_marchio, $new_modello, $new_prezzo, $new_motore, $new_trasmissione){
        parent::__construct($new_marchio, $new_modello , $new_prezzo, $new_motore);
        $this->trasmissione = $new_trasmissione;
    }
    public function suv_Info(){
        echo "Modello: $this->modello , Marchio: $this->marchio , Prezzo: $this->prezzo , Motore: $this->motore, Trasmissione: $this->trasmissione \n";
    }
}

class Utilitaria extends Automobile{
    public $lunghezza;
    public function __construct($new_marchio, $new_modello, $new_prezzo, $new_motore, $new_lunghezza){
        parent::__construct($new_marchio, $new_modello, $new_prezzo, $new_motore);
        $this->lunghezza = $new_lunghezza;
    }
     public function utilitaria_Info(){
        echo "Modello: $this->modello , Marchio: $this->marchio, Prezzo: $this->prezzo, Motore: $this->motore, Lunghezza: $this->lunghezza \n";
    }
}

class Sportiva extends Automobile{
    public $freni;
    public function __construct($new_marchio, $new_modello, $new_prezzo, $new_motore, $new_freni){
        parent::__construct($new_marchio, $new_modello, $new_prezzo, $new_motore);
        $this->freni = $new_freni; 
    }
    public function sportiva_Info(){
        echo "Modello: $this->modello , Marchio: $this->marchio , Prezzo: $this->prezzo , Motore: $this->motore, Freni: $this->freni \n";
    }
}


$suv1= new Suv ("Tigua", "Volkswagen", 39000, "disel", "trazione anteriore");
$utilitaria1= new Utilitaria ("Panda", "Fiat", 10000 , "benzina", "3,69 metri");
$sportiva1= new Sportiva ("911", "Porsche", 140000, "3.0L flat-6", "freni a disco ventilati" );

$suv1->suv_Info();
$utilitaria1->utilitaria_Info();
$sportiva1->sportiva_Info();

echo "Il numero di auto presenti nella Concessionaria è : " . Automobile::$counter. "\n";
                        
