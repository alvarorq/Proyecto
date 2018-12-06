<?php

include 'connexion.php';

//DEVUELVE UN ARRAY CON LOS USUARIOS EXISTENTES Y DETALLES
function userList(){
    $conn=Db::getInstance();
    $sql="select * from usuarios";
    $users=[];
    $result = $conn->db->query($sql);
        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $users[]=$row;     
        }
    return $users;
}

//AÑADIR UN USUARIO A LA BASE DE DATOS
function addUser($datos){
    $conn=Db::getInstance();
    $sql="INSERT INTO usuarios (userName , pass , typeAccount) VALUES (:user , :passw , :tipo)";
    
    $name=$datos['name'];
    $passw=$datos['password'];
    $tipo=$datos['tipo'];
    
    $resultado = $conn->db->prepare($sql);
    $resultado->bindValue(":user", $name);
    $resultado->bindValue(":passw", $passw);
    $resultado->bindValue(":tipo", $tipo);
    $resultado->execute();
}

//MODIFICA UN USUARIO
function modifyUser($id, $datos){
    $conn = Db::getInstance();
    $sql = "UPDATE ofertas SET userName=:user, pass=:passw, typeAccount=:tipo WHERE idusuarios =".$id;

    $name=$datos['name'];
    $passw=$datos['password'];
    $tipo=$datos['tipo'];

    $resultado = $conn->db->prepare($sql);
    
    $resultado->bindValue(":user", $name);
    $resultado->bindValue(":passw", $passw);
    $resultado->bindValue(":tipo", $tipo);
    $resultado->execute();
}

//ELIMINA UN USUARIO
function deleteUser($id){
    $conn = Db::getInstance();
    $sql = "DELETE FROM usuarios WHERE idusuarios=?";
    $sentencia = $conn->db->prepare($sql);
    $sentencia->bindParam(1, $id, PDO::PARAM_INT);
    $sentencia->execute();
}


?>