<?php
include_once('conexion.php');
class usuario{
  private $nClaveUsu;
  private $sTipo;
  private $sApePaterno;
  private $sApeMaterno;
  private $sNombre;
  private $nTelefono;
  private $sDireccion;
  private $sEmail;
  private $sContrasenia;
  private $sCompleto;

function setClave($dato){
  $this->nClaveUsu = $dato;
}
function getClave(){
  return $this->nClaveUsu;
}
function setTipo($dato){
  $this->sTipo = $dato;
}
function getTipo(){
  return $this->sTipo;
}
function setApePaterno($dato){
  $this->sApePaterno = $dato;
}
function getApePaterno(){
  return $this->sApePaterno;
}
function setApeMaterno($dato){
  $this->sApeMaterno = $dato;
}
function getApeMaterno(){
  return $this->sApeMaterno;
}
function setNombre($dato){
  $this->sNombre= $dato;
}
function getNombre(){
  return $this->sNombre;
}
function setTelefono($dato){
  $this->nTelefono = $dato;
}
function getTelefono(){
  return $this->nTelefono;
}
function setDireccion($dato){
  $this->sDireccion = $dato;
}
function getDireccion(){
  return $this->sDireccion;
}
function setEmail($dato){
  $this->sEmail = $dato;
}
function getEmail(){
  return $this->sEmail;
}
function setContrasenia($dato){
  $this->sContrasenia=$dato;
}
function getContrasenia(){
  return $this->sContrasenia;
}
function setCompleto(){
  $this->sCompleto=$this->sNombre." ". $this->sApePaterno." ".$this->sApeMaterno;
}
function getCompleto(){
  return $this->sCompleto;
}














}
 ?>
