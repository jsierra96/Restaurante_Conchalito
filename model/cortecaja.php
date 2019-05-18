<?php
include_once('conexion.php');
class cortecaja{
private $nClaveCorte;
private $sFechaIni;
private $sFechaFin;
private $nTotal;

function setClave($valor){
  $this->nClaveCorte = $valor;
}
function getClave(){
  return $this->nClaveCorte;
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
function setTotal($valor){
  $this->nTotal = $valor;
}
function getTotal(){
  return $this->nTotal;
}




}




 ?>
