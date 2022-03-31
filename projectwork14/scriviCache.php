<?php

trait scriviCache {

    function storeFile($fileToCache) {
        $this->fileToCache = $fileToCache;
        $this->cache = file_get_contents($fileToCache);
        apcu_store($fileToCache, $this->cache, 0);//Aggiorna la CACHE, in modo permanente
    }
    
}
?>