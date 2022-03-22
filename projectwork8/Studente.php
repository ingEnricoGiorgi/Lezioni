
<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Studente
 *
 * @author elpen
 */
class Studente extends Persona {
    public $ind_studio = "";
    public $nome = "PIPPO";
    private static $numIstanzeStud = 0;
    
    /*
     * Questa classe NON ha il costruttore, per cui usa quello della superclasse
     * 
     * 
     */     
    public function __construct($nome,$cognome,$eta,$interessi) {
        //inizializzazione
        $this->nome = $nome; 
        $this->cognome = $cognome;
        $this->eta = $eta;
        $this->interessi = $interessi;     
        
        self::$numIstanzeStud++;
    }
    
    public static function getInstancesOfStudente() {
        //return self::$numIstanze;
        return Studente::$numIstanzeStud;
    }  
     
    public function setIndStudio($ind_studio) {
        $this->ind_studio = $ind_studio;
    }
     
    public function getPagBenvenutoStud() {
        $saluto_persona = $this->getPagBenvenuto();
        return $saluto_persona.", e frequento ".$this->ind_studio;
    }
}
?>
