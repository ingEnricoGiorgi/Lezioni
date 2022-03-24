<?php
/**
 * 
 * Descrizione di Persona
 * Esempio di classe padre
 * @author erProf
 */
class Persona {
    //Proprietà
    private $nome = "";     
    private $cognome = "";
    private $eta = "";
    private $interessi = "";    
    private $saluto = "";
   
    
    //costruttore
    public function __construct($nome,$cognome,$eta,$interessi) {
        //inizializzazione
        $this->nome = $nome; 
        $this->cognome = $cognome;
        $this->eta = $eta;
        $this->interessi = $interessi;
        $this->saluto = "Buongiorno sono ".$nome." ".$cognome;
       
    }

    public function setProfile($nome,$cognome,$eta,$interessi) {
        //inizializzazione
        $this->nome = $nome; 
        $this->cognome = $cognome;
        $this->eta = $eta;
        $this->interessi = $interessi;
        $this->saluto = "Buongiorno sono ".$nome." ".$cognome;
       
    }
    
    //metodo che restituisce la pagina di saluto
    public function getPagBenvenuto() {
         return $this->saluto;
    } 
    
   
}
?>