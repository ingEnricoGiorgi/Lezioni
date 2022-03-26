<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of AggiornaCache
 *
 * @author elpen
 */
include "leggiCache.php";
include "scriviCache.php";

class AggiornaCache{
    use scriviCache;
    use leggiCache;
    private $fileToCache = "";
    private $cache = "";
    
    function __construct($fileToCache) {
        $this->fileToCache = $fileToCache;
        $this->cache = file_get_contents($fileToCache);
        apcu_store($fileToCache, $this->cache, 0);//Aggiorna la CACHE, in modo permanente
    }
    
      
    function updateCache($newFileToCache) {            
        $newCache = file_get_contents($newFileToCache);           

        if ((!apcu_exists($newFileToCache)) || apcu_fetch($this->fileToCache) != $newCache) {
             apcu_store($this->fileToCache, $newCache, 0);                
            return "Il File è stato modificato! Cache updated!";
        } else {
            return "Cache not updated!";
        }
    }

   
   
}
