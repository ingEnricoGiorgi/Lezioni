<?php
class Persona {
public $nome="";
public $cognome="";
public $eta="";
public $interessi="";
public $saluto="";

public function __construct($nome,$cognome,$eta,$interessi){
    $this->nome=$nome;
    $this->cognome=$cognome;
    $this->eta=$eta;
    $this->interessi=$interessi;
    $this->saluto="SONO ".$nome." ".$cognome;
}

public function getPagBenvenuto(){
   // $this->saluto ="Sono ".$this->nome." ".$this->cognome;
    return $this->saluto;
}


}

?>