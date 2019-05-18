<?php
include_once('conexion.php');
class bitempleados{
  private $nClaveBit;
  private $sFechaIni;
  private $sFechaFin;
  private $nSueldo;
  private $nFaltas;
  private $nRetrasos;
  private $nTotalapagar;
  function setClave($valor){
    $this->nClaveBit = $valor;
  }
  function getClave(){
    return $this->nClaveBit;
  }
  function setFechaIni($valor){
    $this->sFechaIni = $valor;
  }
  function getFechaIni(){
    return $this->sFechaIni;
  }
  function setFechaFin($valor){
    $this->sFechaFin = $valor;
  }
  function getFechaFin(){
    return $this->sFechaFin;
  }
  function setSueldo($valor){
    $this->nSueldo=$valor;
  }
  function getSueldo(){
    return $this->nSueldo;
  }
  function setFaltas($valor){
    $this->nFaltas=$valor;
  }
  function getFaltas(){
    return $this->nFaltas;
  }
  function setRetrasos($valor){
    $this->nRetrasos=$valor;
  }
  function getRetrasos(){
    return $this->nRetrasos;
  }
  function setTotalapagar($valor){
    $this->nTotalapagar=$valor;
  }
  function getTotalapagar(){
    return $this->nTotalapagar;
  }

}

 ?>
