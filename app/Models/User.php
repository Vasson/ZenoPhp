<?php 
namespace App\Models;
use App\Config\Database;
use PDO;
class User extends Database{
    
    private $tbl_name = "auth_user";
    public $name;
    public $email;
    public $password;
    public $id;
    public $user_name;
    public $user_email;
    
    public function register(){
        
        $pass_hash = password_hash($this->password,PASSWORD_DEFAULT);
        
        $sql = "INSERT INTO ".$this->tbl_name." (name, email, password)
        VALUES ('".$this->name."', '".$this->email."', '".$pass_hash."')";
        // use exec() because no results are returned
        
        if($this->conn->exec($sql)){
            return true;
        }else{
            return false;
        }
    }
    
    public function checkExistingUser($userEmail){
        $stmt = $this->conn->prepare("SELECT * FROM ".$this->tbl_name." WHERE email = '".$userEmail."'");
        $stmt->execute();
        if($stmt->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }
    
    public function login(){
        $stmt = $this->conn->prepare("SELECT * FROM ".$this->tbl_name." WHERE email = '".$this->email."'");
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if($row && password_verify($this->password,$row['password'])){
            $this->id = $row['id'];
            $this->user_email = $row['email'];
            $this->user_name = $row['name'];
            return true;
        }else{
            return false;
        }
    }
}
?>