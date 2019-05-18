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
  return $this->nClaveProd;
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
  //++++++++++++++++++++++++++++++++ Eliminar productos +++++++++++++++++++++++++++++++++++++++
  public function Agregar($uClave){
    $oConexion = new conexion();
    $oRet = -1;
    $sQuery ="INSERT INTO Productos(nClaveProd, sTipo, sNombre, sTamano, nPrecio, sImg, nClaveUsu) VALUES 
      ('".$this->nClaveProd."','".$this->sTipo."','".$this->sNombre."','".$this->sTamano."','".$this->nPrecio."','".$this->sImg."','".$uClave."');";
    if($oConexion->conecta()){
      $oRet = $oConexion->ejecutarComando($sQuery);
    }
    $oConexion->desconecta();
    return $oRet;
  }
//++++++++++++++++++++++++++++++++ Eliminar productos +++++++++++++++++++++++++++++++++++++++
    public function Eliminar(){
      $oConexion = new conexion();
      $oRet = -1;
      $sQuery ="DELETE FROM Productos WHERE nClaveProd='".$this->nClaveProd."';";
      if($oConexion->conecta()){
        $oRet = $oConexion->ejecutarComando($sQuery);
        
      }
      $oConexion->desconecta();
      return $oRet;
    }
//++++++++++++++++++++++++++++++ Modificar productos ++++++++++++++++++++++++++++++++++++++++
    public function Modificar($img){
      $oConexion = new conexion();
      $oRet = -1;
      if($img == "si"){
        $sQuery ="UPDATE Productos SET sTipo='".$this->sTipo."',sNombre='".$this->sNombre."', 
          sTamano='".$this->sTamano."',nPrecio='".$this->nPrecio."',sImg='".$this->sImg."' 
          WHERE nClaveProd='".$this->nClaveProd."';";
      }else{
        $sQuery ="UPDATE Productos SET sTipo='".$this->sTipo."',sNombre='".$this->sNombre."', 
          sTamano='".$this->sTamano."',nPrecio='".$this->nPrecio."' WHERE nClaveProd='".$this->nClaveProd."';";
      }
      if($oConexion->conecta()){
        $oRet = $oConexion->ejecutarComando($sQuery);
        
      }
      $oConexion->desconecta();
      return $oRet;
    }
//++++++++++++++++++++++++++++++ Agregar productos ++++++++++++++++++++++++++++++++++++++++++
    
}
?>
