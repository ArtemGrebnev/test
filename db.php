<?php

Class database{
    private $link;
    
    public function __construct() {
        $this->connect();
    }
    
    private function connect(){
        $conf = require_once 'conf.php';
        
        $dsn = 'mysql:host='.$conf['host'].';dbname='.$conf['db_name'].';charset='.$conf['charset'];
        
        $this->link = new PDO($dsn, $conf['username'], $conf['password']);
        
        return $this;       
    }
    public function execute($sql){
        $sth = $this->link->prepare($sql);
        return $sth->execute();
    }
    
    public function query($sql) {
         $sth = $this->link->prepare($sql);
         
         $sth->execute();
        
        $result = $sth->fetchALL(PDO::FETCH_ASSOC);
        
        if ($result === false){
            return[];
        }
        
        return $result;
    }
}









/*class pdoconf extends PDO {
    private $engine;
    private $host;
    private $database;
    private $user;
    private $pass;
    
    public function __construct(){
        $this->engine ='mysql';
        $this->host ='localhost';
        $this->database ='my bd';
        $this->user ='Artem';
        $this->pass ='qwerty';
        $dns = 
                $this->engine.':dbname='.$this->database.";host=".$this->host;
                parent::__construct($dns, $this->user, $this->pass);
        
    }
}*/


/*$mysqli = new mysqli("localhost", "Artem", "qwerty", "my bd");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySql: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}*/
?>