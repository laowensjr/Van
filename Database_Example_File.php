<?php
class Database {
    
    // DB Params
    private $host = "YOUR HOST GOES HERE";
    private $db_name = "DATABASE NAME";
    private $username = "USERNAME";
    private $password ="PASSWORD";
    private $conn;
    
    
    
    //DB Connect
    public function connect() {
        
        $this->conn = null;
       
        $this->conn = new mysqli($this->host, $this->username, $this->password,  $this->db_name);
        if($this->conn->connect_error){
            echo "Fail" . $this->conn->connect_error;
                       
        }
        //echo "Connected";
        
       return $this->conn;
       
    }

}
    
    //$dbh0 = new Database();
   //$dbh= $dbh0->connect();
   