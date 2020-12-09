<?php
    

class ConnectionFactory {

    private static $connection = null;

    private function __construct() {
        
    }

    public static function getConnection() {
        if (self::$connection == null) {
            try {
                self::$connection = new PDO("mysql:host=localhost;dbname=notepad;",'root','');
                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$connection->exec('SET NAMES "utf8"');
            } catch (Exception $e) {
                
                echo $e;
            }
        }
        
        return self::$connection;
    }
}  
