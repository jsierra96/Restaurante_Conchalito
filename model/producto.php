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
//---------------------------- Obtener todos productos -----------------------------------

  public function ObtenerAll(){
    $array = null;
    $oConexion = new conexion();
    $sQuery = "SELECT * FROM Productos";
    if($oConexion->conecta()){
      $oDatos = $oConexion->ejecutaConsulta($sQuery);
      if($oDatos){
        for($i = 0;$i < count($oDatos); $i++){
            $producto = new producto();
            $producto->setClave($oDatos[$i][0]);
            $producto->setTipo($oDatos[$i][1]);
            $producto->setNombre($oDatos[$i][2]);
            $producto->setTamano($oDatos[$i][3]);
            $producto->setPrecio($oDatos[$i][4]);
            $producto->setImg($oDatos[$i][5]);
            $array[$i] = $producto;
        }
      }
    }
      return $array;
  }



}
?>
