<?php
include "../CarpetaVista/autentificador.php";
include "usuario.php"
class AunteticadorMock{



    function comprobarUsuario()
    {
    $usuarios= array(
    1 => Usuario,
    "admin" => "admin",);
        $mensaje = "";
        if (is_array($usuarios)) {
            foreach ($usuarios as $valor) {
                $mensaje = $mensaje . $valor;
            }
            return $mensaje;
        } else {
            $mensaje = "no has pasado un array";
            return $mensaje;
        }
    }


}

?>