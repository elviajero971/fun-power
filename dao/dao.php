<?php
abstract class Dao {
    private static $myConnection = null;
    
    public static function connect() {
        if (self::$myConnection == null) {
            try {
                self::$myConnection = new PDO(BDDNAME, BDDUSER, BDDPASSWORD);
                self::$myConnection->exec('SET NAMES UTF8');
            }
            catch (PDOexception $e) {
                throw new FormException(6, "Impossible d'accéder à la bd: ".$e->getMessage());
            }
        }
        return self::$myConnection;
    }
}
