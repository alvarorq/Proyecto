<?php

Class Db{

    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "job";
    private $link;
    private $stmt;
    private $array;
 
    static $_instance;
 
    /*La función construct es privada para evitar que el objeto pueda ser creado mediante new*/
    private function __construct(){
       $this->conectar();
    }
 
    /*Evitamos el clonaje del objeto. Patrón Singleton*/
    private function __clone(){ }
 
    /*Función encargada de crear, si es necesario, el objeto. Esta es la función que debemos llamar desde fuera de la clase para instanciar el objeto,
     y así, poder utilizar sus métodos*/
    public static function getInstance(){
       if (!(self::$_instance instanceof self)){
          self::$_instance=new self();
       }
       return self::$_instance;
    }
 
    /*Realiza la conexión a la base de datos.*/
    private function conectar(){
       $this->link=mysqli_connect($this->servername, $this->username, $this->password);
       mysqli_select_db($this->link, $this->dbname);
       @mysqli_query("SET NAMES 'utf8'");
       //respetar acentos
       mysqli_set_charset($this->link, "utf8");
    }
 
    /*Método para ejecutar una sentencia sql*/
    public function ejecutar($sql){
       $this->stmt=mysqli_query($this->link, $sql);
       return $this->stmt;
    }
 }

?>