<?php
class Studente extends Persona {
    public $ind_studio="";

public function setIndStudio($ind_studio){
    $this->ind_studio = $ind_studio;
}
public function getPagBenvenutoStud(){
    $saluto_persona=$this->getPagBenvenuto();
    return $saluto_persona." e frequento: ".$this->ind_studio."<br>";
}
public function getStato(){
    return "Sono lo studente: ".parent::getNome()." ".parent::getCognome().
    "ho ".parent::getEta()." anni e i mie interessi sono: ".parent::getInteressi();
}

}
?>