<?php
class Studente extends Persona {
    public $ind_studio="";

public function setIndStudio($ind_studio){
    $this->ind_studio = $ind_studio;
}
public function getPagBenvenutoStud(){
    $saluto_persona=$this->getPagBenvenuto();
    return $saluto_persona." e frequento: ".$this->ind_studio;
}
public function getSalutoProtected(){
    return "stampo getPagBenvenuto protected di Persona: ". parent::getPagBenvenuto();
}


}
?>