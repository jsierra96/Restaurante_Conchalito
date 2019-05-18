<?php
include_once('conexion.php');
class publicidad{
    private $nClavePub;
    private $sFecha;
    private $sDescripcion;
    private $sImg;

    function setClave($valor){
      $this->nClavePub = $valor;
    }
    function getClave(){
      return $this->nClavePub;
    }
    function setFecha($valor){
      $this->sFecha = $valor;
    }
    function getFecha(){
      return $this->sFecha;
    }
    function setDescripcion($valor){
      $this->sDescripcion=$valor;
    }
    function getDescripcion(){
      return $this->sDescripcion;
    }
    function setImg($valor){
      $this->sImg = $valor;
    }
    function getImg(){
      return $this->sImg;
    }



}



 ?>
