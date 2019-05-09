<?php
include 'conexion.php';
class producto{

private $nClaveProd;
private $sTipo;
private $sNombre;
private $sTamano;
private $nPrecio;
private $sImg;

function setClave($valor){
  $this->nClaveProd = $valor;
}
function getClave(){
  return $this ->nClaveProd;
}
function setTipo($valor){
  $this->sTipo = $valor;
}
function getTipo(){
  return $this->sTipo;
}
function setNombre($valor){
  $this->sNombre= $valor;
}
function getNombre(){
  return $this->sNombre;
}
function setTamano($valor){
  $this->sTamano=$valor;
}
function getTamano(){
  return $this->sTamano;
}
function setPrecio($valor){
  $this->nPrecio = $valor;
}
function getPrecio(){
  return $this->nPrecio;
}
function setImg($valor){
  $this->sImg = $valor;
}
function getImg(){
  return $this->sImg;
}




}
?>
