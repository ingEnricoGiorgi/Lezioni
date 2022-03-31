<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include 'HandleXML.php';
        $fileXML_new = 'phpflow_new.xml';
        
        /*
         * Estrarre elementi particolari
         */
        $handle = new HandleXML();
        
        $catalogo_xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?>
<catalogo_film></catalogo_film>');
        
        $elementi = ['titolo','lingua','regista','costo','year'];
        $handle->setCDElements($fileXML_new,$elementi,$catalogo_xml);
        
        $elementi = ['titolo1','lingua1','regista1','costo1','year1'];
        $handle->setCDElements($fileXML_new,$elementi,$catalogo_xml);
        
        //$handle->getCDElements($fileXML_1);
        ?>
    </body>
</html>
