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
        $fileXML_1 = 'phpflow_1.xml';
        
        /*
         * Estrarre elementi particolari
         */
        $handle = new HandleXML();
        //$handle->getCDElements($fileXML_1);
        
        $handle->getCDSingleElement($fileXML_1,"titolo");
        ?>
    </body>
</html>
