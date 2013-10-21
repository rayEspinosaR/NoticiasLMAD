<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario_Modelo
 *
 * @author Raymundo
 */
class Usuario_Modelo {
    //put your code here
    private $idUsuario;
    private $nombre;
    private $apellidoPaterno;
    private $apellidoMaterno;
    private $email;
    private $contrasena;
    private $genero;
    private $telefono; 
    private $edad;
    private $facebook;
    private $twitter;
    private $foto;
    private $fechaIngreso;
    private $nickname;
    private $descripcion;
    private $activo;
    private $fkPerfil;
    private $fkOrdenamiento;
  
  
    public function __construct(){    }
  
    public function __construct_TODO($idUsuario,$nombre,$apellidoPaterno, $apellidoMaterno, $email, $contrasena,
    $genero,$telefono, $edad, $facebook, $twitter, $foto,  $fechaIngreso, $nickname, $descripcion, $fkPerfil,
    $fkOrdenamiento)
    {
        $this->idUsuario = $idUsuario  ;
        $this->nombre = $nombre  ;
        $this->apellidoPaterno =  $apellidoPaterno ;
        $this->apellidoMaterno =  $apellidoMaterno ;
        $this->email =  $email ;
        $this->contrasena = $contrasena  ;
        $this->genero =  $genero ;
        $this->telefono =  $telefono ; 
        $this->edad =  $edad ;
        $this->facebook = $facebook  ;
        $this->twitter = $twitter  ;
        $this->foto =  $foto ;
        $this->fechaIngreso = $fechaIngreso  ;
        $this->nickname =  $nickname ;
        $this->descripcion = $descripcion  ;
        $this->fkPerfil = $fkPerfil  ;
        $this->fkOrdenamiento =  $fkOrdenamiento ;
    }
    
    
}

?>
