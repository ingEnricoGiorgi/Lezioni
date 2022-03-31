<?php



class HandleXML{
    function __construct(){}

public function setCDElements($fileXML_new,$elementi,$catalogo_xml){}

public function getCDElements($xmlFile){
     $xml=simplexml_load_file($xmlFile);
     $cd_num=0;   

     foreach($xml->cd as $singoloCD){
         $cd_num++;
         echo "<br><br>FILM -> CD_".$cd_num."<br>";
         echo "TITOLO".$singoloCD->titolo."<br>";
         echo "TITOLO".$singoloCD->lingua."<br>";
         echo "TITOLO".$singoloCD->regista."<br>";
         echo "TITOLO".$singoloCD->costo."<br>";
         echo "TITOLO".$singoloCD->year."<br>";
     }



}


}

?>