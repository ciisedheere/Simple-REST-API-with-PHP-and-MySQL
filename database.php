<?php
class Database{
    
    private $db_host = 'localhost';
    private $db_name = 'id3236142_api_database';
    private $db_username = 'id3236142_api_manager';
    private $db_password = 'n*7jN6Gd9w1>)y[S';
    
    
    public function dbConnection(){
        
        try{
            $conn = new PDO('mysql:host='.$this->db_host.';dbname='.$this->db_name,$this->db_username,$this->db_password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }
        catch(PDOException $e){
            echo "Connection error ".$e->getMessage(); 
            exit;
        }
        
        
    }
}
?>