<?php
    require_once '../model/producto.php';
    $aJson = null;
    $oProductos = new producto();
    $aux = $oProductos->ObtenerAll();
    if($aux != null){
        $aJson = '[';
            foreach($aux as $sPro){
                $aJson = $aJson.'{
                    "clave":"'.$sPro->getClave().'",
                    "img":"../'.$sPro->getImg().'",
                    "nombre":"'.$sPro->getNombre().'",
                    "size":"'.$sPro->getTamano().'",
                    "tipo":"'.$sPro->getTipo().'",
                    "precio":"'.$sPro->getPrecio().'"
               },';
            }
            $aJson = substr($aJson,0, strlen($aJson)-1);
        $aJson = $aJson.']';
    }else{
        $aJson = '{"clave":"No hay datos",
            "img":"No hay datos",
            "nombre":"No hay datos",
            "size":"No hay datos",
            "tipo":"No hay datos",
            "precio":"No hay datos"
          }';
    }

    header('Content-type: application/json');
    
    echo($aJson);
?>