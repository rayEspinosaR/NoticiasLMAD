<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Video_Modelo
 *
 * @author Raymundo
 */
class Video_Modelo {
    //put your code here
    private $idvideo;
    private $videoPath;
    
    public function __construct() {
        
    }
    public function __construct_TODO($idvideo,$videoPath) 
    {
        $this->idvideo=$idvideo;
        $this->videoPath=$videoPath;
    }   
}

?>
