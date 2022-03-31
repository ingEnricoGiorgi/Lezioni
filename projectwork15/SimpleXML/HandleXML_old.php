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


class HandleXML {
    private $fileToCache = 'cache/phpflow.xml';
    private $checkForNewFile = 'phpflow.xml';
    
    function __construct(){
    }
    
    public function readXmlFile($fileXML){
        $xml = simplexml_load_file($fileXML);
        //print_r($xml);//tutta la struttura
        return $xml;
    }
    
    function stringXML() {        
        $string = <<<XML
        <?xml version='1.0'?> 
        <catalogo_film>
          <cd>
            <titolo>Matrix Resurrections</titolo>
            <attore>Keano Reeves</attore>
            <nazione>USA</nazione>
            <regista>Lana Wachowski</regista>
            <budget>190 M$</budget>
            <year>2022</year>
          </cd>
        </catalogo_film>
        XML;
        $xml = simplexml_load_string($string);
        
        return $xml;
    } 
}
?>