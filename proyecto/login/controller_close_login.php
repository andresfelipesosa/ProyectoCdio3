<?php
include('../app/config/config.php');
include('../app/config/conexion.php');

session_start();
if(isset($_SESSION['sesion_username'])){
    session_destroy();
    header('Location: '.$URL.'/login/index.php');
}else {

}
?>