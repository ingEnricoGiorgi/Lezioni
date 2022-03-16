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
    
    $nome='Franz'; 
    $cognome='Djaro';
    $eta="50";
    $interessi="kaffe";

    $Persona1= new Persona($nome,$cognome,$eta,$interessi);
    $Studente1= new Studente($nome,$cognome,$eta,$interessi);
    $Studente1->setIndStudio("Come Preparare una buonissima miscela");

    echo " SALUTO DI PERSONA1 <br>".$Persona1->getPagBenvenuto()."<br>";
    echo "</br></br> SALUTO DI STUDENTE1 <br>".$Studente1->getPagBenvenutoStud();

   ?>
</body>
</html>