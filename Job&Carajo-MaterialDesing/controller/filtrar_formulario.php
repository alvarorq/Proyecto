<?php
function VPost($campo, $default='')
{
    if (isset($_POST[$campo]))
    {
        return $_POST[$campo];
    }
    else
    {
        return $default;
    }
}

function FiltrarLogin(Gestor_Errores $errores){
    if(VPost("usuario")==""){
        $errores->AnotaError('usuario', 'Introduce tu nombre de usuario.');
    }
    if(VPost("password")==""){
        $errores->AnotaError('password', 'Introduce tu contraseña.');
    }
}

function segundoLogin(Gestor_Errores $errores){
    if(!VPost("login")){
        $errores->AnotaError('login','Usuario o contraseña erroneos');
    }
}

function FiltraCamposPost(Gestor_Errores $errores)
{
    if(VPost("descripcion")==""){
        $errores->AnotaError('descripcion', 'La DESCRIPCION no puede estar vacio.');
    }       

    if(VPost("contacto")==""){
        $errores->AnotaError('contacto', 'La PERSONA DE CONTACTO no puede estar vacio.');
    }       

    if(VPost("telefono")=="" || !ctype_digit(VPost("telefono")) || strlen(VPost("telefono"))!=9){
        $errores->AnotaError('telefono', 'El TELEFONO DE CONTACTO no es valido o esta vacio.');
    }

    if(VPost("provincia")=="------------------"){
        $errores->AnotaError('provincia', 'Selecciona una PROVINCIA.');
    }

    if(strlen(VPost("cp"))>5 || strlen(VPost("cp"))<5 || !ctype_digit(VPost("cp"))){
        $errores->AnotaError('cp', 'El CODIGO POSTAL esta vacio o no es valido.');
    }

    if(VPost("email")=="" || !filter_var( VPost("email") , FILTER_VALIDATE_EMAIL)){
        $errores->AnotaError('email', 'El EMAIL introducido no es valido.');
    }
    
    if( !comFecha(VPost("fechaselec"))){
        $errores->AnotaError('fechaselec', 'La FECHA introducida no es valida.');
    }
}