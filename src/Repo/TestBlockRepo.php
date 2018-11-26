<?php
namespace comsta\Repo;

use comsta\model\Blockentry;

/**
 * Klasse für Blogeinträge
 */
class TestBlockRepo {
    
    private static $dbConnection;

    private static $entries = array(  
        array("title"=>"Eintrag 1", "content"=>"Ich bin der erste Eintrag."),  
        array("title"=>"Eintrag 2", "content"=>"Ich bin der ewige Zweite!"),  
        array("title"=>"Eintrag 3", "content"=>"Na dann bin ich die Nummer drei.")  
    );  

    public static function setConnection($conn) {
        self::$dbConnection = conn;
    }

     /** 
     * Gibt alle Einträge des Blogs zurück. 
     * @return Array Array von Blogeinträgen. 
     */  
    public static function getEntries() {  
        return self::$entries;  
    }  

     /** 
     * Gibt einen bestimmten Eintrag zurück. 
     * 
     * @param int $id Id des gesuchten Eintrags 
     * @return Array Array, dass einen Eintrag repräsentiert, bzw. wenn dieser nicht vorhanden ist, null. 
     */  
    public static function getEntry($id) {  
        if(array_key_exists($id, self::entries)) {  
            return self::$entries[$id];  
        }
        
        return null;          
    }  

    public static function getAllEntry($id) {  
        if(array_key_exists($id, self::entries)) {  
            return self::$entries[$id];  
        }
        return null;       
    }  
}

// Anruf Björn 10:55 Uhr / Termin Freitag 11:00 - 12:00 Uhr

?>