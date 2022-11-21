<?php
include('../../../../app/config/config.php');
include('../../../../app/config/conexion.php');

$query_login = $pdo->prepare("UPDATE tb_usuarios SET quiz1=".$_GET["value"]." WHERE username='".$_GET["username"]."'");
$query_login->execute();
?>
