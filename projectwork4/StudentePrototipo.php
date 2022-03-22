<?php
/*La classe astratta, è una classe in cui uno o più metodi non 
sono implementati
Per cui, da una classe astratta non si può creare un oggetto
*/
abstract class StudentePrototipo{
    public $ind_studio = "";

public function setIndStudio($ind_studio){
    $this->ind_studio = $ind_studio;
}
//continua a funzionare anche in protected
protected function getIndStudio(){
    return $this->ind_studio;
}

public abstract function getPagBenvenutoStud():string;



}
?>