<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SeccionUsuarioJoin_Modelo
 *
 * @author Raymundo
 */
class SeccionUsuarioJoin_Modelo {
    //put your code here
    private $fkUsuario;
    private $fkSeccion;
    
    public function __construct() {
        
    }
    public function __construct_TODO($fkUsuario,$fkSeccion) 
    {
        $this->fkUsuario=$fkUsuario;
        $this->fkSeccion=$fkSeccion;
    }
}

?>
