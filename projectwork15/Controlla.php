<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Controlla
 *
 * @author elpen
 */
class Controlla extends AggiornaCache{
    private $fileToCache = 'cache/phpflow.xml';
    private $checkForNewFile = 'phpflow.xml';
    //private bool $modificato = false;
    
    function __construct($checkForNewFile, $fileToCache){
        $this->checkForNewFile = $checkForNewFile;
        $this->fileToCache = $fileToCache;
        parent::storeFile($fileToCache);
    }
    
    function checkFile() {
        //"< 10" si mette solamente per dare la possibilità di far vedere 
        //didatticamente l'effetto di modifica del file...
        if (!file_exists($this->fileToCache) || time() - filemtime($this->checkForNewFile) < 10){
            //***IL FILE E' STATO MODIFICATO***
            $cache = fopen($this->fileToCache, 'w+');
            fwrite($cache, file_get_contents($this->checkForNewFile));
            fclose($cache);
            $rispostaCache = parent::updateCache($this->checkForNewFile);
            return $rispostaCache; 
        } else {
            //FILE INVARIATO, QUINDI SI CONTINUA A LEGGERE DALLA CACHE
            return "Nessuna modifica al file. Quindi, CACHE not updated!<br> -- Leggo cache: ".parent::readCache();             
        }
    } 
}
?>