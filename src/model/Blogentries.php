<?php
namespace comsta\model;

use comsta\model\Blogentry;

/**
 * Klasse für Blogeinträge
 */
class Blogentries { 

    public static $entries = [];

    public static function add(Blogentry $entry) {
        self::$entries[] = $entry;
    }

     /** 
     * Gibt einen bestimmten Eintrag zurück. 
     * 
     * @param int $id Id des gesuchten Eintrags 
     * @return Array Array, dass einen Eintrag repräsentiert, bzw. wenn dieser nicht vorhanden ist, null. 
     */  
    public static function getEntry($id) {  
        if(array_key_exists($id, self::$entries)) {  
            return self::$entries[$id];  
        }        
        return null;          
    }
}