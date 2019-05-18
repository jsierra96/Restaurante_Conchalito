<?php 
    session_start();
    require_once '../model/producto.php';
    require_once 'IdsGenera.php';
    $oPro = new producto();
    $carpeta='../images/productos/';
    $oPro->setClave($_REQUEST['id']);
    $oPe = $_REQUEST['opera'];
    $oRet = -1 ;
    $CadJson = '';
    $ac ='no';
    if($oPe == 'a' || $oPe == 'c'){
        $ac = $_REQUEST['imagen'];
        $aux = 'images/productos/';
        $aux2 = '';
        if ($ac == 'si'){
            if(isset($_FILES["file"])){
                $file = $_FILES["file"];
                $nombre = $file["name"];
                $ruta_provisional = $file["tmp_name"];
                $src = $carpeta.$nombre;
                $aux2 = $aux.$nombre;
                if(file_exists($src))
                    unlink($src);
                move_uploaded_file($ruta_provisional, $src);
            }
            $oPro->setImg($aux2);
        }
        $oPro->setNombre($_REQUEST['nombre']);
        $oPro->setTipo($_REQUEST['tipo']);
        $oPro->setTamano($_REQUEST['size']);
        $oPro->setPrecio($_REQUEST['costo']);
        if($oPe =="a")
            $oRet = $oPro->Modificar($ac);
        else{
            $ids = new ids();
            $id = $ids->generar("producto");
            $oPro->setClave($id);
            $oRet = $oPro->Agregar($_SESSION['user']["uClave"]);
        }
    }else if($oPe == 'b'){
        $oRet = $oPro->Eliminar();
    }

    if($oRet > -1){
        $CadJson = '{
            "success": true,
            "respuesta": "OPeracion exitosa"
        }';
    }else{
        $CadJson = '{
            "success": false,
            "respuesta": "Fallo en la consulta"
        }';
    }
    header('Content-type: application/json');
    echo $CadJson;
?>