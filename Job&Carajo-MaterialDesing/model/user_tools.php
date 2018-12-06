<?php
include_once('connexion.php');
//COMPRUEBA EL USUARIO Y CONTRASEÑA

function creaLogin($datos){
    $conn=Db::getInstance();
    $sql="select * from usuarios where userName= :usuario AND password= :password";
    $resultado=$conn->db->prepare($sql);
    $usuario=htmlentities(addslashes($datos['usuario']));
    $password=htmlentities(addslashes($datos['password']));

    $resultado->bindValue(":usuario", $usuario);
    $resultado->bindValue(":password", $password);
    $resultado->execute();

    $numero_registro=$resultado->rowCount();
    $rs=$resultado->fetch(PDO::FETCH_ASSOC);
    $user=$rs;
    
    if($numero_registro!=0){

        session_start();

        $_SESSION['usuario']=$usuario;
        $_SESSION['inicio']=date("h:i");
        $_SESSION['user']=$user;
        
        return true;
    }
    else{
        return false;
    }
}

//OBTENER ROL DEL USUARIO ACTIVO
function rolUsuario(){
    $user=$_SESSION['user'];
    
    if($user['typeAccount']==0){
        return 'Administrador';
    }
    else{
        return 'Psicologo';
    }
}
?>