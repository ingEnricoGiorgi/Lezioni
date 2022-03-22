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
    include './Dirigente.php';
    
    $nome='Franz'; 
    $cognome='Djaro';
    $eta="50";
    $interessi="kaffe";

    $nomeD='Flavio'; 
    $cognomeD='Raponi';
    $etaD="40";
    $interessiD="Droni";

    $Persona1= new Persona($nome,$cognome,$eta,$interessi);
    $Studente1= new Studente($nome,$cognome,$eta,$interessi);
    $Studente1->setIndStudio("Come Preparare una buonissima miscela");
    $dirigente1= new Dirigente($nomeD,$cognomeD,$etaD,$interessiD);
    $dirigente1->setScuola("Commmerciali FANO");

    echo " SALUTO DI PERSONA1 <br>".$Persona1->getPagBenvenuto()."<br>";
    echo "</br></br> SALUTO DI STUDENTE1 <br>".$Studente1->getPagBenvenutoStud();
    echo "</br></br> SALUTO DI DIRIGENTE <br>".$dirigente1->getPagBenvenutoDir();
    
   ?>
</body>
</html>