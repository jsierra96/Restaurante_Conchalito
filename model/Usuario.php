<?php
    require_once 'conexion.php';
    class Usuario{
        private $uClave;
        private $sTipo;
        private $sPaterno;
        private $sMaterno;
        private $sNombre;
        private $nTelefono;
        private $sDireccion;
        private $sEmail;
        private $sPassword;
        private $sCompleto;
//-------------------------------------- Set's ----------------------------------------------------
        function setClave($dato){
            $this->uClave = $dato;
        }
        function setNombre($dato){
            $this->sNombre= $dato;
        }
        function setPaterno($dato){
            $this->sPaterno = $dato;
        }
        function setMaterno($dato){
            $this->sMaterno = $dato;
        }
        function setTelefono($dato){
            $this->nTelefono = $dato;
        }
        function setDireccion($dato){
            $this->sDireccion = $dato;
        }
        function setEmail($dato){
            $this->sEmail = $dato;
        }
        function setPassword($dato){
            $this->sPassword = $dato;
        }
        function setCompleto(){
            $this->sCompleto = $this->sNombre." ". $this->sApePaterno." ".$this->sApeMaterno;
        }
        function setTipo($dato){
            $this->sTipo = $dato;
        }
//-------------------------------------- Get's ----------------------------------------------------
        function getClave(){
            return $this->uClave;
        }
        function getNombre(){
            return $this->sNombre;
        }
        function getPaterno(){
            return $this->sPaterno;
        }
        function getMaterno(){
            return $this->sMaterno;
        }
        function getTelefono(){
            return $this->nTelefono;
        }
        function getDireccion(){
            return $this->sDireccion;
        }
        function getEmail(){
            return $this->sEmail;
        }
        function getPassword(){
            return $this->sPassword;
        }
        function getTipo(){
            return $this->sTipo;
        }
        function getCompleto(){
            return $this->sCompleto;
        }
//++++++++++++++++++++++++++++ Verificación de existencia de un usuario ++++++++++++++++++++++++++++++
        public function verificar(){
            $oConexion = new conexion();
            $oDatos = null;
            $bRet = false;
            $sQuery = "SELECT * FROM Usuarios WHERE sEmail='".$this->sEmail."' AND sContrasenia='".$this->sPassword."';";
            if($oConexion->conecta()){
                $oDatos = $oConexion->ejecutaConsulta($sQuery);
                if($oDatos){
                    $this->setClave($oDatos[0][0]);
                    $this->setNombre($oDatos[0][4]);
                    $this->setPaterno($oDatos[0][2]);
                    $this->setMaterno($oDatos[0][3]);
                    $this->setTelefono($oDatos[0][5]);
                    $this->setDireccion($oDatos[0][6]);
                    $this->setEmail($oDatos[0][7]);
                    $this->setPassword($oDatos[0][8]);
                    $this->setTipo($oDatos[0][1]);
                    $this->setCompleto();
                    $bRet = true;
                }
                $oConexion->desconecta();
            }
            return $bRet;
        }
    }
?>