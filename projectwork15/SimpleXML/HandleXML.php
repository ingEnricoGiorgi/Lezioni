<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of HandleXML
 *
 * @author elpen
 */
class HandleXML {
    
    function __construct(){
    }
    
    public function setCDElements($fileXML_new,$elementi,$catalogo_xml){
        $cd_ele = $catalogo_xml->addChild('cd');
        
        $cd_ele->addChild('titolo',$elementi[0]);
        $cd_ele->addChild('lingua',$elementi[1]);
        $cd_ele->addChild('regista',$elementi[2]);
        $cd_ele->addChild('costo',$elementi[3]);
        $cd_ele->addChild('year',$elementi[4]);
                
        $catalogo_xml->saveXML($fileXML_new);
        echo 'File xml salvato: '.$fileXML_new;
    }
    
    public function getCDElements($xmlFile){
        $xml = simplexml_load_file($xmlFile);
        $cd_num = 0;
        
        foreach ($xml->cd as $singoloCD){
            $cd_num++;
            echo "<br><br>FILM -> CD_".$cd_num."<br>";
            echo 'TITOLO: '.$singoloCD->titolo."<br>";
            echo 'Lingua: '.$singoloCD->lingua."<br>";
            echo 'Regista: '.$singoloCD->regista."<br>";
            echo 'Costo: '.$singoloCD->costo."<br>";
            echo 'Anno: '.$singoloCD->year."<br>";
        }
    }
    
    public function getCDSingleElement($xmlFile,$ele){
        $xml = simplexml_load_file($xmlFile);
        $cd_num = 0;
        
        foreach ($xml->cd as $singoloCD){
            $cd_num++;
            echo "<br><br>FILM -> CD_".$cd_num."<br>";
            switch($ele){
                case 'titolo':
                    echo 'TITOLO: '.$singoloCD->titolo."<br>";
                    break;
                case 'lingua':
                    echo 'Lingua: '.$singoloCD->lingua."<br>";
                    break;
                case 'regista':
                    echo 'Regista: '.$singoloCD->regista."<br>";
                    break;
                case 'costo':
                    echo 'Costo: '.$singoloCD->costo."<br>";
                    break;
                case 'year':
                    echo 'Anno: '.$singoloCD->year."<br>";
                    break;
                default:
                    echo 'Valore non riconosciuto!';
            }
        }
    }
    
    public function readXmlFile($fileXML){
        $xml = simplexml_load_file($fileXML);
        //print_r($xml);//tutta la struttura
        return $xml;
    }
    
    function stringXML() {        
        $string = <<<XML
        <?xml version="1.0" encoding="UTF-8"?> 
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
    
    function instanceOfXMLObj() {        
        $string = <<<XML
        <?xml version="1.0" encoding="UTF-8"?> 
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
        $xml = new SimpleXMLElement($string);
        
        return $xml;
    } 
}
