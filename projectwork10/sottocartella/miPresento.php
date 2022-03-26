<?php
trait miPresento{
    public function miPresento($sesso){
      $saluto=parent::getPagbenvenuto();//Persona
      $ruolo =$this->getPagGender($sesso);//altro Trait
      $indirizzo=$this->getIndStudio();//richiama metodo
      //nella classe che lo usa

      return "$saluto, $ruolo e frequento l'uni:$indirizzo </br>";  
    }
}
?>