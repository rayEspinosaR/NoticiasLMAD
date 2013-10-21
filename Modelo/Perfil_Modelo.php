<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Perfil _Modelo
 *
 * @author Raymundo
 */
class Perfil_Modelo {
    //put your code here
    private $idperfil;
    private $tipoPerfil;
    private $activo;
    
    public function __construct() {
        
    }
    public function __construct_TODO($idperfil,$tipoPerfil) 
    {
        $this->idperfil=$idperfil;
        $this->tipoPerfil=$tipoPerfil;
        $this->activo="1";
    }
}

?>
