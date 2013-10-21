<?php
include ("Usuario_Modelo.php");
include ("MySQL.php");
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario_PD
 *
 * @author RayEspinosa
 */
class Usuario_PD {
    //put your code here
    
    public function getUsuarioById($idUsuario)
    {
        if(isset($idUsuario) && $idUsuario>0)
        {
            $con = new MySQL();
            $con->abrirConeccion();
            $sp = $con->llamarSP("obtenerUsuarioById",array($idUsuario));
            $result = mysql_query($sp);
            $usuario = new Usuario_Modelo($result->idUsuario,
            $result->nombre,$result->apellidoPaterno, $result->apellidoMaterno, 
            $result->email, $result->contrasena,
            $result->genero,$result->telefono, $result->edad, 
            $result->facebook, $result->twitter, $result->foto,  
            $result->fechaIngreso, $result->nickname, $result->descripcion, 
            $result->fkPerfil,$result->fkOrdenamiento);
            return $usuario;
        }
        else {
            return null;
        } 
    }
        
}


?>
