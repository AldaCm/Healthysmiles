<?php
     header("Access-Control-Allow-Origin: *");
     
     $correo = $_REQUEST["correo"];
     $contrasena = $_REQUEST["contrasena"];
     
     $sql = "SELECT * FROM tblUsuario WHERE usuCorreo ='$correo'";

     require("conexion.php");
     
     $resultado = mysqli_query($conexion, $sql);

     if($registro = mysqli_fetch_assoc($resultado)){
        if(password_verify($contrasena,$registro["usuContrasena"])){
            $retorno = array("correo" => $registro["usuCorreo"],
                             "nombre" => $registro["usuNombre"]);
        }  
        else{
            $retorno = array("fallo" => "contrasena");
        } 
    }
     else{
         $retorno = array("fallo" => "usuario");
     }

     mysqli_close($conexion);
     header('Content-type: application/json');
     echo json_encode($retorno);
     
?>