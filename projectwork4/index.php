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
    include './StudentePrototipo.php';
    include './Studente.php';
    
    $nome='Dottor'; 
    $cognome='Jelo';
    $eta="50";
    $interessi="DROIDI";

    $Studente1= new Studente($nome,$cognome,$eta,$interessi);
    $Studente1->setIndStudio("Ingegneria robotica");

    echo "SALUTO DI STUDENTE1 <br>".$Studente1->getPagBenvenutoStud()."<br>";

   ?>
</body>
</html>