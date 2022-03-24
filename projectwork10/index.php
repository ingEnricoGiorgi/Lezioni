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

            $nome1='Loris'; 
            $cognome1='Capirossi';
            $eta1="32";
            $interessi1="moto";
            //overloading costruct studente
            $Studente1= new Studente($nome1,$cognome1,$eta1,$interessi1);
            $Studente1->setIndStudio("ingegneria meccanica");
        
            $nome2='Method'; 
            $cognome2='Djari';
            $eta2="23";
            $interessi2="World of Warcraft";
            //overloading costruct studente
            $Studente2= new Studente($nome2,$cognome2,$eta2,$interessi2, "F");
            $Studente2->setIndStudio("Twitch");
               
            echo "usiamo i trait gender e mi presento: <br><br>";
            echo $Studente1->getPagGender('m')."<br>";
            echo $Studente2->getPagGender('F')."<br>";

            echo "<br>SALUTO DI STUDENTE1 <br>".$Studente1->miPresento('m');
            echo "<br><br>SALUTO DI STUDENTESSA2 <br>".$Studente2->miPresento('F');
         
           ?>
        </body>
        </html>