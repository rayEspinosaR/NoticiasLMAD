<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Comentario_Modelo
 *
 * @author Raymundo
 */
class Comentario_Modelo {
    //put your code here
    private $idcomentario;
    private $fkUsuario;
    private $fkNoticia;
    private $fkComentario;
    private $fechaHoraPublicacion;
    private $activo;
    private $nombre;
    private $apellidoPaterno;
    private $apellidoMaterno;
    private $correo;
    private $contenidoComentario;
    
    public function __construct() {
        
    }
    
    public function __construct_TODO($idcomentario,$fkUsuario,$fkNoticia,$fkComentario,$fechaHoraPublicacion,
                $nombre,$apellidoPaterno,$apellidoMaterno,$correo,$contenidoComentario) 
    {
        $this->idcomentario=$idcomentario;
        $this->fkUsuario=$fkUsuario;
        $this->fkNoticia=$fkNoticia;
        $this->fkComentario=$fkComentario;
        $this->fechaHoraPublicacion=$fechaHoraPublicacion;
        $this->nombre=$nombre;
        $this->apellidoPaterno=$apellidoPaterno;
        $this->apellidoMaterno=$apellidoMaterno;
        $this->correo=$correo;
        $this->contenidoComentario=$contenidoComentario;
        $this->activo="1";

    }
}

?>
