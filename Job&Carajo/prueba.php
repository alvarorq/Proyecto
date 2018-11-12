<?php
    include "connexion.php";

    function borrarOferta($conn, $id){
        $sql= "DELETE FROM ofertas WHERE idofertas=(?)";
        $sentencia = $conn->prepare($sql);
        $sentencia->bind_param('i',$id);
        $sentencia->execute();
        echo "<p>Se ejecuto";
    }

    $id=7;
echo "<p>preborrado";
    borrarOferta($conn,$id);
echo $id;

?>