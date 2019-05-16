<?php
    session_start();
    require_once '../model/Usuario.php'; 
    $uSer = new Usuario();
    $uSer->setEmail($_REQUEST['usuario']);
    $uSer->setPassword($_REQUEST['password']);
    if($uSer->verificar()){
        $oUser = array("uClave" => $uSer->getClave(), "Nombre"=>$uSer->getNombre(),
                    "Paterno"=>$uSer->getPaterno(), "Materno"=>$uSer->getMaterno(),"Tipo"=>$uSer->getTipo(),
                    "Email"=>$uSer->getEmail(),"Telefono"=>$uSer->getTelefono(),"Dir"=>$uSer->getDireccion());
        $_SESSION['user'] = $oUser;
        $CadJson = '{
            "success":true,
            "respu":"Usuario encontrado"}';
    }else{
        $CadJson = '{
            "success":false,
            "respu":"No existe el usuario"}';
    }
    //header("Content-type: application:/json");
    echo $CadJson;
?>