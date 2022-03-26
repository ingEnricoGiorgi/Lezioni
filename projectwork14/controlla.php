<?php
function checkCache(){
   $oriFile="phpflow.xml";
   $cache=file_get_contents($oriFile);

   if((!apcu_exists('phpflow')) || apcu_fetch('phpflow')!= $cache){
       echo "Inserisci il file modificato nelle cache";
       echo "<br>";

       $cache = file_get_contents($oriFile);
       apcu_store("phpflow", $cache, 0);
       return $cache;
   }else {
       echo "continua ad usare il file.xml della cache";
       echo "<br>";
       print (apcu_fetch("phpflow"));
   }
  
}
$checkCache=checkCache();
echo $checkCache."!!";

?>