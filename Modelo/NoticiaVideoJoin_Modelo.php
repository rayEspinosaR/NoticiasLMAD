<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NoticiaVideoJoin_Modelo
 *
 * @author Raymundo
 */
class NoticiaVideoJoin_Modelo {
    //put your code here
    private $fkNoticia;
    private $fkVideo;
    private $renderOrden;
    private $activo;
    public function __construct() {
        
    }
    public function __construct_TODO($fkNoticia,$fkVideo,$renderOrden) 
    {
        $this->fkNoticia=$fkNoticia;
        $this->fkVideo=$fkVideo;
        $this->renderOrden=$renderOrden;
        $this->activo = "1";
    }
}

?>
