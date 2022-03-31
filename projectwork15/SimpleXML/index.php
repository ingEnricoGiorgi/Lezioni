<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include 'HandleXML.php';
        
        $fileXML = 'phpflow.xml';
        $fileXML_1 = 'phpflow_1.xml';
        /*
         * Accesso tramite file XML
         */
        $xmlTest = new HandleXML();
        $obj_xml_file = $xmlTest->readXmlFile($fileXML);        
        echo "Struttura del file XML: <br>";
        print_r($obj_xml_file);
        /*
         * Accesso tramite stringa XML
         * Notate la differenza dell'output con l'uso del tag <pre>
         */
        $xml_string = $xmlTest->stringXML();
        echo "<br><br>Struttura della stringa XML: <br><pre>";
        print_r($xml_string);
        /*
         * Accesso tramite "new SimpleXMLElement($string)"
         */
        $obj_xml_string = $xmlTest->stringXML();
        echo "<br><br>Struttura XML usando 'new SimpleXMLElement()': <br>";
        print_r($obj_xml_string);
        
        ?>
    </body>
</html>
