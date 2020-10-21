<?php
include_once "../CarpetaVista/autentificador.php";
include_once "usuario.php";
class AutenticacionMock{
    function comprobarUsuario($login,$pass){
        $p1= new Usuario("admin","1234","adolfo","perez");
        $p2= new Usuario("login","1234","nombre","nombre");
        $usuarios= array(
        1 => $p1,
        2 => $p2);
            
            foreach($usuarios as $usu){
                if(strcmp($login,$usu->getLogin())==0){            
                        if(strcmp($pass,$usu->getPassword())==0){
                            
                            return $usu;
                            
                        }
              }
               
            }
    return false;
        }
    }
?>