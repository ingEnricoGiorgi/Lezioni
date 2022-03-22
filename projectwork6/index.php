<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX</title>
</head>
<body>
    <?php
    include './Persona.php';
    include './Studente.php';
    
    $nome='Method'; 
    $cognome='Djari';
    $eta="23";
    $interessi="World of Warcraft";

    ;
    $Studente1= new Studente($nome,$cognome,$eta,$interessi);
    $Studente1->setIndStudio("Twitch");
       
    echo "SALUTO DI STUDENTE1 <br>".$Studente1->getPagBenvenutoStud();
    echo "STAMPO stato STUDENTE1 <br>".$Studente1->getStato();
 
   ?>
</body>
</html>