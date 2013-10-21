<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Seccion_Modelo
 *
 * @author Raymundo
 */
class Seccion_Modelo {
    //put your code here
    private $idseccion;
    private $nombre;
    private $activo;
    
    public function __construct() {
        
    }
    public function __construct_TODO($idseccion,$nombre) 
    {
        $this->idseccion=$idseccion;
        $this->nombre=$nombre;
        $this->activo="1";
    }
}

?>
