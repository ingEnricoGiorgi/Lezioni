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
        include 'AggiornaCache.php';
        include 'Controlla.php';
        
        $fileToCache = 'cache/phpflow.xml';
        $checkForNewFile = 'phpflow.xml';
        
        $controllaFile = new Controlla($checkForNewFile,$fileToCache);
        echo $controllaFile->checkFile();
        ?>
    </body>
</html>
