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
public function getStato(){
    $nomeS=$this->getNome();
    $cognomeS=$this->getCognome();
    $etaS=$this->getEta();
    $interessiS=$this->getInteressi();
    return "Sono lo studente: $nomeS $cognomeS 
    ho $etaS anni e l'interesse per $interessiS il mio indirizzo di studio e: $this->ind_studio";
}





}
?>