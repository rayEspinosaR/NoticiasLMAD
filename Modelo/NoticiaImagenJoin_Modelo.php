<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NoticiaImagenJoin_Modelo
 *
 * @author Raymundo
 */
class NoticiaImagenJoin_Modelo {
    //put your code here
    private $fkNoticia;
    private $fkImagen;
    private $renderOrden;
    private $activo;

    public function __construct() {
        
    }
    public function __construct_TODO($fkNoticia,$fkImagen,$renderOrden) 
    {
        $this->fkNoticia=$fkNoticia;
        $this->fkImagen=$fkImagen;
        $this->renderOrden=$renderOrden;
        $this->activo = "1";
    }
}

?>
