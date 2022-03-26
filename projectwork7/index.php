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
    
  
     
    $nome1='Loris'; 
    $cognome1='Capirossi';
    $eta1="32";
    $interessi1="moto";
    
    $Studente1= new Studente($nome1,$cognome1,$eta1,$interessi1);
    $Studente1->setIndStudio("ingegneria meccanica");

    $nome2='Method'; 
    $cognome2='Djari';
    $eta2="23";
    $interessi2="World of Warcraft";

    ;
    $Studente2= new Studente($nome2,$cognome2,$eta2,$interessi2, "F");
    $Studente2->setIndStudio("Twitch");
       
    echo "SALUTO DI STUDENTE1 <br>".$Studente1->getPagBenvenuto();
    echo "<br><br>SALUTO DI STUDENTE2 <br>".$Studente2->getPagBenvenuto();
 
   ?>
</body>
</html>