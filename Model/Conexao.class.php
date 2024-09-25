<?php

class Conexao {
    private static $conn;

    public static function get_instance() {
        if (self::$conn === null) {
            try {
                $dsn = "pgsql:host=localhost";
                $dbname = "dbname=Pit";
                $username = "root";
                $password = null;

                self::$conn = new PDO($dsn, $dbname, $username, $password);
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }
        }
        return self::$conn;
    }
}

?>