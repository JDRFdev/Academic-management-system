<?php 
class DatabaseConnection{
    private static ?DatabaseConnection $instance = null;
    private \PDO $connection;
    private function __construct() {
        $host ="mysql:host=127.0.0.1;port=3307;dbname=academicmanagementsystem";
        $username ="root";
        $password ="";
        $this->connection = new \PDO($host,$username,$password); 
    }
    public static function getInstance():DatabaseConnection{
        if(self::$instance===null){
            self::$instance = new DatabaseConnection();
        }
        return self::$instance;
    }
    public function getConnection():\PDO {
        return $this->connection;
    }
}
?>