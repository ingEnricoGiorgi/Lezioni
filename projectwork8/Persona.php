
<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Descrizione di Persona
 * Esempio di classe padre
 * @author elpen
 */
class Persona {
    //Proprietà
    public $nome = "";     
    public $cognome = "";
    public $eta = "";
    public $interessi = "";    
    public $saluto = "";
    private static $numIstanze = 0;
    
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
    
    //metodo che restituisce la pagina di saluto
    public function getPagBenvenuto() {
         return $this->saluto;
    } 
    
    //restituisce il numero di volte che è stato chiamato il costruttore 
    public static function getInstancesOfPersona() {
        //return self::$numIstanze;
        return Persona::$numIstanze;
    }  
}
?>