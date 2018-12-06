<?php
class Db 
{ 
    public $db;   // handle of the db connexion    
    private static $dns = "mysql:host=localhost;dbname=job;charset=utf8mb4"; 
    private static $user = "root"; 
    private static $pass = "";     
    private static $instance;

    public function __construct ()  
    {        
       $this->db = new PDO(self::$dns,self::$user,self::$pass);   
    } 

    public static function getInstance()
    { 
        if(!isset(self::$instance)) 
        { 
            $object= __CLASS__; 
            self::$instance=new $object; 
        } 
        return self::$instance; 
    }    
} 
?>