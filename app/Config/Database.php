<?php 
namespace App\Config;
use PDO;
class Database{
    
    private $host = "localhost";
    private $db_name =  "auth_system";
    private $db_username = "root";
    private $db_password = "";
    public $conn;
    
    public function __construct()
    {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->db_name", $this->db_username, $this->db_password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Connected successfully";
          } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
          }
    }
}
?>