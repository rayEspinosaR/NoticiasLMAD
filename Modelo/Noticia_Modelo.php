<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Noticia_Modelo
 *
 * @author Raymundo
 */
class Noticia_Modelo {
    //put your code here
    private $idNoticia;
    private $titulo;
    private $descripcionBreve;
    private $descripcionLarga;
    private $fechaPublicacion;
    private $visitas;
    private $likes;
    private $comentarios;
    private $fkUsuario;
    private $fkSeccion;
    private $activo;
   
    public function __construct() { }
    
    public function __construct_TODO($idNoticia,$titulo,$descripcionBreve,$descripcionLarga,$fechaPublicacion,
        $visitas,$likes,$comentarios,$fkUsuario,$fkSeccion ) 
    {
        $this->idNoticia=$idNoticia;
        $this->titulo=$titulo;
        $this->descripcionBreve=$descripcionBreve;
        $this->descripcionLarga=$descripcionLarga;
        $this->fechaPublicacion=$fechaPublicacion;
        $this->visitas=$visitas;
        $this->likes=$likes;
        $this->comentarios=$comentarios;
        $this->fkUsuario=$fkUsuario;
        $this->fkSeccion=$fkSeccion;
        $this->activo="1";
    }
    
}

?>
