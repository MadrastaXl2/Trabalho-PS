<?php

class Conexao {
    private static $conn;

    public static function get_instance() {
        if (self::$conn === null) {
            try {                
                self::$conn = new PDO("mysql:host=localhost;dbname=Pit","root","");
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }
        }
        return self::$conn;
    }
}

?>