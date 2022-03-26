<?php
/**
 * 
 * Descrizione di Persona
 * Esempio di classe padre
 * @author erProf
 */
class Persona {
    //Proprietà
    public $nome = "";     
    public $cognome = "";
    public $eta = "";
    public $interessi = "";    
    public $saluto = "";
    private static $numIstanze = 0;
    private static $numIstanzeIndiretta = 0;
    
    //costruttore
    public function __construct($nome,$cognome,$eta,$interessi) {
        //inizializzazione
        $this->nome = $nome; 
        $this->cognome = $cognome;
        $this->eta = $eta;
        $this->interessi = $interessi;
        $this->saluto = "Buongiorno sono ".$nome." ".$cognome;
        
        self::$numIstanze++;
    }

    protected function setIstances(){
        self::$numIstanzeIndiretta++;
    }
    
    //metodo che restituisce la pagina di saluto
    public function getPagBenvenuto() {
         return $this->saluto;
    } 
    
    //restituisce il numero di volte che è stato chiamato il costruttore 
    public static function getInstancesOfPersona() {
        //return self::$numIstanze;
        return Persona::$numIstanze;
    }  
    
    public static function getInstancesOfTotale() {
       
        return Persona::$numIstanze+self::$numIstanzeIndiretta;
    }  
}
?>