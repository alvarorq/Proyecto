<?php

try {
    $base=new PDO("mysql:host=localhost;dbname=job","root","");
    
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO_ERRMODE_EXCEPTION);

   
    

    $sql="select * from usuarios where userName= :usuario AND password= :password";
    $resultado=$base->prepare($sql);
    $usuario=htmlentities(addslashes($_POST['usuario']));
    $password=htmlentities(addslashes($_POST['password']));

    $resultado->bindValue(":usuario", $usuario);
    $resultado->bindValue(":password", $password);
    $resultado->execute();

    $numero_registro=$resultado->rowCount();
    if($numero_registro!=0){

        session_start();

        $_SESSION['usuario']=$usuario;
        

        header("location:dentro.php");
    }
    else{
        header("location:login.php");
    }

    
} catch (Exception $e) {
    die("Error: ".$e->getMessage());
   
}