<?php
    class controller{
        private $model;
        public function __construct(){
            require_once("C:/xampp/htdocs/proyectb/model/model.php");
            $this->model=new model();
        }
        public function registrar($nombre,$apellidos,$email,$password){
            $idRegistrar=$this->model->registroUsuarios($nombre,$apellidos,$email,$password);
            return ($idRegistrar!=false)?header("Location: login.php"):header("Location: register.php");
        }
    }
?>