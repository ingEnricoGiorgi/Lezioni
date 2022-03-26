<?php

trait leggiCache {
    function readCache(){
        return apcu_fetch($this->fileToCache);
    }

}
?>