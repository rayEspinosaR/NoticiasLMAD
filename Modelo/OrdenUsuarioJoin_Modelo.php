<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of OrdenUsuarioJoin_Modelo
 *
 * @author Raymundo
 */
class OrdenUsuarioJoin_Modelo {
    //put your code here
    private $fkUsuario;
    private $fkOrden;
    
    public function __construct() {
        
    }
    public function __construct_TODO($fkUsuario,$fkOrden) 
    {
        $this->fkUsuario=$fkUsuario;
        $this->fkOrden=$fkOrden;
    }
}

?>
