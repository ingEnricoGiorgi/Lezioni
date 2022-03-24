<?php

trait gender {
public function getPagGender($sesso){
    if($sesso === "M" || $sesso === "m" || $sesso === ""){
        return "Sono uno studente";
     }elseif($sesso === "F" || $sesso === "f"){
        return "Sono una studentessa";
     }
}

}
?>