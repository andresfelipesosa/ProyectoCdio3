<?php
include('../app/config/config.php');
include('../app/config/conexion.php');

$names = $_POST['names'];
$lastname1 = $_POST['lastname1'];
$lastname2 = $_POST['lastname2'];
$username = $_POST['username'];
$password = $_POST['password'];

$query_register = $pdo->prepare("SELECT * FROM tb_usuarios WHERE username = '$username'");
$query_register->execute();

$usuarios = $query_register->fetchAll(PDO::FETCH_ASSOC);
$contador = 0;

foreach ($usuarios as $usuario){
    $contador = $contador + 1;
}

if ($contador == "0"){
    $sql = 'INSERT INTO tb_usuarios(username, nombres, apellido_pri, apellido_sec, contrasenia) 
            VALUES (:username, :names, :lastname1, :lastname2, :password)';
    $result = $pdo->prepare($sql);

    $result->bindParam(':username', $username);
    $result->bindParam(':names', $names);
    $result->bindParam(':lastname1', $lastname1);
    $result->bindParam(':lastname2', $lastname2);
    $result->bindParam(':password', $password);

    $result->execute();

    header('Location: '.$URL.'/register/exito.php');

}else{
    header('Location: '.$URL.'/register/error.php');
}