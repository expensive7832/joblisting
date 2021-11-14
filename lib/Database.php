<?php

class Database{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $db_name = DB_NAME;
    private $pwd = DB_PASS;
    private $dbh;
    private $error;
    private $stmt;

    public function __construct(){
        $dsn = "mysql:host=" .$this->host. ";dbname=" .$this->db_name;

        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
        );

        try {
            
            $this->dbh = new PDO($dsn, $this->user, $this->pwd, $options);

        } catch (PDOException $e) {
            $this->error = $e->getMessage();
        }
    }

    public function query($query){
      $this->stmt =  $this->dbh->prepare($query);
    }

    public function bind($param, $val, $type = null){
        if(is_null($type)){
            switch(true){
                case is_int($val) :
               $type =  PDO::PARAM_INT;
               break;
               case is_bool($val) :
                $type = PDO::PARAM_BOOL;
                break;
                case is_null($val) :
                    $type = PDO::PARAM_NULL;
                    break;
                default: 
                $type = PDO::PARAM_STR;
                break;
            }
        }

        return $this->stmt->bindValue($param, $val, $type);
    }

    public function execute(){
        return $this->stmt->execute();
      }
  
      public function fetchResults(){
        $this->execute();
        return $this->stmt->fetchAll();
      }
  
      public function fetchSingle(){
        $this->execute();
        return $this->stmt->fetch();
      }

   
}
?>