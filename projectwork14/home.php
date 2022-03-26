<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body>
    <?php
    include "AggiornaCache.php";
    include "controlla.php";
    
    $fileToCache = 'cache/phpflow.xml';
    $checkForNewFile = 'phpflow.xml';

    $controllaFile= new Controlla($checkForNewFile, $fileToCache);
    echo $controllaFile->checkFile();
    
    ?>
</body>
</html>