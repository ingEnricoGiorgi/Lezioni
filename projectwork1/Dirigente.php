<?php
class Dirigente extends Persona {
public $scuola = "";

public function setScuola($scuola){
    $this->scuola=$scuola;
}

public function getPagBenvenutoDir(){
    $saluto_persona = $this->getPagBenvenuto();
    return $saluto_persona.", e dirigo la scuola ".$this->scuola;
}


}
?>