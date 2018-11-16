<?php
    require "connexion.php";

    function borrarOferta($id){
        $conn = Db::getInstance();
        $sql = "DELETE FROM ofertas WHERE idofertas=?";
        $sentencia = $conn->db->prepare($sql);
        $sentencia->bindParam(1, $id, PDO::PARAM_INT);
        $sentencia->execute();
        $arr = $sql->fetchAll(PDO::FETCH_ASSOC);
        
        return $arr;
    }

    $id=7;
echo "<p>preborrado";
    borrarOferta($id);
echo $id;

?>