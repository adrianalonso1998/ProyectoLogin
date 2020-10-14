<?php
include_once "../CarpetaModelo/AutenticacionMock.php";
$correo=$_POST['correo'];
$password=$_POST['password'];
$aunt= new AutenticacionMock();
$aunt->comprobarUsuario($correo,$password);
$res=$aunt->comprobarUsuario($correo,$password);
if ($res!=false){
    $login=$res->getLogin();
    header("Location: datosUsuario.php?login=$login");
}
else{
    header('Location: errorAutenticacion.php');
}
?>
