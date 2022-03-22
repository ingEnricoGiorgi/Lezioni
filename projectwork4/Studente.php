<?php
class Studente extends StudentePrototipo {
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

public function getPagBenvenutoStud():string{
    return $this->saluto.", uno studente, e frequento ".parent::getIndStudio();
    
}





}
?>