<?php
/*
Gli attributi della classe padre non devono essere accessibili
dall’esterno, e solo la classe figlio può invocarne il metodo del saluto

Gli attributi sono visibili solo da dentro la classe « private »
Il metodo getPagBenvenuto diventa « protected
*/

class Persona {
private $nome="";
private $cognome="";
private $eta="";
private $interessi="";
private $saluto="";

public function __construct($nome,$cognome,$eta,$interessi){
    $this->nome=$nome;
    $this->cognome=$cognome;
    $this->eta=$eta;
    $this->interessi=$interessi;
    $this->saluto="SONO ".$nome." ".$cognome;
}

protected function getPagBenvenuto(){
         return $this->saluto;
}


public function getNome(){
         return $this->nome;
 }
 public function getCognome(){
         return $this->cognome;
 }
 public function getEta(){
         return $this->eta;
 }
 public function getInteressi(){
         return $this->interessi;
 }


}

?>