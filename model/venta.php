<?php
include_once('conexion.php');

class venta{
  private $nClaveVenta;
  private $sFecha;
  private $nCantidad;
  private $nTotal;

  function setClave($valor){
    $this->nClaveVenta = $valor;
  }
  function getClave(){
    return $this->nClaveVenta;
  }
  function setFecha($valor){
    $this->sFecha = $valor;
  }
  function getFecha(){
    return $this->sFecha;
  }
  function setCantidad($valor){
    $this->nCantidad=$valor;
  }
  function getCantidad(){
    return $this->nCantidad;
  }
  function setTotal($valor){
    $this->nTotal = $valor;
  }
  function getTotal(){
    return $this->nTotal;
  }




}

?>
