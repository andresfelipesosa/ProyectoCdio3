<?php
include('../app/config/config.php');
include('../app/config/conexion.php');

$username = $_POST['username'];
$password = $_POST['password'];

$query_login = $pdo->prepare("SELECT * FROM tb_usuarios WHERE username = '$username'");
$query_login->execute();

$usuarios = $query_login->fetchAll(PDO::FETCH_ASSOC);
$contador = 0;

foreach ($usuarios as $usuario){
    $contador = $contador + 1;
    $nombres = $usuario['nombres'];
    $password_tb = $usuario['contrasenia'];
}

if ($contador == "0"){
    echo "Error al ingresar los datos, vuelva a hacerlo";
    header('Location: '.$URL.'/login/error.php');
}else{

    if ($password == $password_tb){
        session_start();
        $_SESSION['sesion_username'] = $username;
        header('Location: '.$URL.'/layout/unidades/portal_principal.php');
    }else{
        echo "Error al ingresar la contraseña, vuelva a hacerlo";
        header('Location: '.$URL.'/login/error.php');
    }
}