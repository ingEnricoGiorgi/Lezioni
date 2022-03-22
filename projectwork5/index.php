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
    $Persona1= new Persona($nome,$cognome,$eta,$interessi);
    //echo " SALUTO DI PERSONA1 <br>".$Persona1->getPagBenvenuto()."<br>";
    echo "SALUTO DI STUDENTE1 <br>".$Studente1->getPagBenvenutoStud();
    echo "</br></br>SALUTO di PERSONA <br>".$Studente1->getSalutoProtected(); //PROVA stampa estranea al project work
 
 
     echo "<br><br>SALUTO di PERSONA<br>".$Persona1->getPagBenvenuto();
   /*Fatal error: Uncaught Error: Call to protected method Persona::getPagBenvenuto() from global scope
   */
   ?>
</body>
</html>