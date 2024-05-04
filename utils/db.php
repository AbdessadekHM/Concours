<?php
$info = [
    'servername' => 'localhost:3000',
    'username' => 'root',
    'password' => '',
    'DB_name' => 'auth_php'
];
class DB{
    private $conn;
    function __construct($info){
        extract($info);
        try {
            $this->conn = new PDO("mysql:host=$servername;dbname=$DB_name",$username,$password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            $this->conn = NULL;
            echo "error message : $e";
        }
        
    }
    function Create($table,$data){
        $query = "INSERT INTO $table(name,phone,email,password) VALUES (:name,:phone,:email,:password) ";
        $statement = $this->conn->prepare($query);
        $statement->execute($data);
    }
    function Read($table,$condition=''){
        if(!$condition){
            $query = "SELECT * FROM $table";    
        }else{
            $query = "SELECT * FROM $table WHERE $condition";
        }
        $statement = $this->conn->prepare($query);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_OBJ);
        $result = $statement->FetchAll();
        return $result;
    }
    function Update($table,$data,$condition){
        $query = "UPDATE $table SET name=:name,phone=:phone,email=:email,password=:password WHERE $condition";
        $statement = $this->conn->prepare($query);
        $statement->execute($data);
        
    }
    function Delete($table,$condition){
        $query = "DELETE FROM $table WHERE $condition";
        $statement = $this->conn->prepare($query);
        $statement->execute();
        
        
    }
}