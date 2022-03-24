<?php
class Studente extends Persona {
    private $ind_studio="";
    private $sesso="M";
    public $saluto="";

public function __construct(){
    if(4===func_num_args()){
        parent::setProfile(func_get_arg(0),func_get_arg(1),func_get_arg(2),func_get_arg(3));
    }elseif(5===func_num_args()){
        parent::setProfile(func_get_arg(0),func_get_arg(1),func_get_arg(2),func_get_arg(3));
        $this->sesso = func_get_arg(4);
    }
}


public function setIndStudio($ind_studio){
    $this->ind_studio = $ind_studio;
}
public function getPagBenvenutoStud(){
    $saluto_persona=$this->getPagBenvenuto();
    // $saluto_persona=parent::getPagBenvenuto();
    if($this->sesso === "M" || $this->sesso === "m" || $this->sesso === ""){
       return $saluto_persona." uno studente che frequenta: ".$this->ind_studio."<br>";
    }elseif($this->sesso === "F" || $this->sesso === "f"){
       return $saluto_persona." una studentessa che frequenta: ".$this->ind_studio."<br>";
    }
    
}
/*Fatal error: Cannot override final method 
Persona::getPagBenvenuto() 
in D:\xampp\htdocs\php 
penserini\Lezioni\projectwork12\Studente.php on line 30

*/
protected final function getPagBenvenuto(){
    //no override
    return parent::$saluto;
}

}
?>