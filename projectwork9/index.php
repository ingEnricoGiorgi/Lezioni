<!DOCTYPE html>
<!--
Presa
in esame la classe «Persona», si desidera realizzare un contatore che conti
quante volte viene istanziata la classe, e per ogni volta stampi in output il valore
Un
tipo di problema di questo tipo non può essere risolto se non si fa uso
dell’operatore STATIC
-->
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            include 'Persona.php';
            //require_once 'Persona.php';
            include 'Studente.php';

            $nome1 = "Loris";     
            $cognome1 = "Penserini";
            $eta1 = "50";
            $interessi1 = "DRONI";  
            
            $nome2 = "Mario";     
            $cognome2 = "Rossi";
            $eta2 = "55";
            $interessi2 = "JAVA"; 
            
            $nome3 = "Anna";     
            $cognome3 = "Fiore";
            $eta3 = "25";
            $interessi3 = "MUSICA"; 
            
            $nome4 = "John";     
            $cognome4 = "Gate";
            $eta4 = "22";
            $interessi4 = "PHP"; 

            //CREO GLI OGGETTI "Persona1", "Persona2" e "Persona3"
            $Persona1 = new Persona($nome1, $cognome1, $eta1, $interessi1);
            echo "<br> La classe 'Persona' è stata istanziata n. ".Persona::getInstancesOfPersona()." volte.";
            echo "<br> La classe 'Persona' è stata istanziata in totale n. ".Persona::getInstancesOfTotale()." volte.";
            
            $Persona2 = new Persona($nome2, $cognome2, $eta2, $interessi2);
            echo "<br> La classe 'Persona' è stata istanziata n. ".Persona::getInstancesOfPersona()." volte.";
            echo "<br> La classe 'Persona' è stata istanziata in totale n. ".Persona::getInstancesOfTotale()." volte.";
            
            $Persona3 = new Persona($nome3, $cognome3, $eta3, $interessi3);
            echo "<br> La classe 'Persona' è stata istanziata n. ".Persona::getInstancesOfPersona()." volte.";
            echo "<br> La classe 'Persona' è stata istanziata in totale n. ".Persona::getInstancesOfTotale()." volte.";

            $Studente1 = new Studente($nome4, $cognome1, $eta1, $interessi1);
            echo "<br><br><br> La classe 'Studente' è stata istanziata n. ".Studente::getInstancesOfStudente()." volte.";
            echo "<br> La classe 'Persona' è stata istanziata n. ".Persona::getInstancesOfPersona()." volte.";
            echo "<br> La classe 'Persona' è stata istanziata in totale n. ".Persona::getInstancesOfTotale()." volte.";
            
             
            
           // $Studente1 = new Studente($nome4, $cognome4, $eta4, $interessi4);
           // echo "<br> La classe 'Studente' è stata istanziata n. ".Studente::getInstancesOfStudente()." volte.<br><br>";
        ?>
    </body>
</html>
