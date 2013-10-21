<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Ordenamiento_Modelo
 *
 * @author Raymundo
 */
class Ordenamiento_Modelo {
    //put your code here
    private $idordenamiento;
    private $nombre;
    private $descripcion;
    private $activo;
    
     public function __construct() {
        
    }
    public function __construct_TODO($idordenamiento,$nombre,$descripcion) 
    {
        $this->idordenamiento=$idordenamiento;
        $this->nombre=$nombre;
        $this->descripcion=$descripcion;
        $this->activo="1";
    }
    
}

?>
