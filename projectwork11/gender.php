<?php

trait gender {
/* se metto il metodo da pubblico a privato ottengo:
Fatal error: Uncaught Error: Call to private method 
Studente::getPagGender() from global scope
*/   
private function getPagGender($sesso){
    if($sesso === "M" || $sesso === "m" || $sesso === ""){
        return "Sono uno studente";
     }elseif($sesso === "F" || $sesso === "f"){
        return "Sono una studentessa";
     }
}

}
?>