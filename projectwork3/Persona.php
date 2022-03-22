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
/*
public function getPagBenvenuto(){
       return $this->saluto;
}
OTTENGO IL SEGUENTE ERRORE:
Fatal error: Uncaught Error: Call to undefined method Persona::getPagBenvenuto() 
in D:\xampp\htdocs\php penserini\projectwork3\index.php:28 Stack trace: #0 {main} 
thrown in D:\xampp\htdocs\php penserini\projectwork3\index.php on line 28

*/

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