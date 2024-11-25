<?php

    require_once '../../components/Conexion.php';
    require_once '../../components/Usuario.php';

    $obj = new Usuarios();
    $pass = sha1($_POST['password']);

    $datos = array (
        $_POST['nombre'],
        $_POST['apellido'],
        $_POST['usuario'],
        $pass
    );

    echo $obj -> registroUsuario($datos)

?>