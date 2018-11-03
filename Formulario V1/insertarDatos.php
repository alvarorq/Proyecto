<?php
include "connexion.php";



    mysql_query("INSERT INTO ofertas (
        idofertas, descripcion, personaContacto, telefonoContacto, email, direccion, poblacion, codigoPostal, provinca, estadoOferta,
         FechaConfirmacion, psicologo, candidatos, observaciones) 
         VALUES ('$_POST[descripcion]', '$_POST[contacto]', '$_POST[telefono]', '$_POST[email]', '$_POST[direccion]', '$_POST[poblacion]',
         '$_POST[poblacion]', '$_POST[cp]', '$_POST[provincia]', '$_POST[estado]', '$_POST[fechaselec]', '$_POST[psicologo]', '$_POST[candidato]',
         '$_POST[observaciones]')",$conn);
?>