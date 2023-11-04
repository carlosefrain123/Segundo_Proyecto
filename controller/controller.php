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
        public function showUs($id){
            $idshowUs=$this->model->showUsuarios($id);
            return($idshowUs!=false)?$idshowUs:header("Location: listaUs.php");
        }
        public function listaUs(){
            $idlistaUs=$this->model->listaUsuarios();
            return($idlistaUs!=false)?$idlistaUs:header("Location: listaUs.php");
        }
        public function editarUs($id,$nombre,$apellidos,$email){
            $ideditarUs=$this->model->editarUsuarios($id,$nombre,$apellidos,$email);
            return($ideditarUs!=false)?header("Location: listaUs.php"):header("Location:crear.php");
        }
        public function eliminarUs($id){
            $ideliminarUs=$this->model->eliminarUsuarios($id);
            return($ideliminarUs!=false)?header("Location: listaUs.php"):false;
        }
        /**Productos */
        public function registroProd($codigo,$nombre,$precio,$stock){
            $idRegistrarprod=$this->model->registroProductos($codigo,$nombre, $precio,$stock);
            return ($idRegistrarprod!=false)?header("Location: visualizar.php?id=".$idRegistrarprod):header("Location:crear.php");
        }
        public function show($id){
            $id=$this->model->show($id);
            return ($id!=false)?$id:header("Location: crear.php");
        }
        public function mostrarProd(){
            $idmostrarprod=$this->model->listaProductos();
            return ($idmostrarprod!=false)?$idmostrarprod:header("Location: crear.php");
        }
        public function editarProd($id,$codigo,$nombre,$precio,$stock){
            $ideditarprod=$this->model->editarProductos($id,$codigo,$nombre,$precio,$stock);
            return ($ideditarprod!=false)?header("Location: listaProd.php"):header("Location: listaProd");
        }
        public function eliminarProd($id){
            $ideliminarprod=$this->model->eliminarProductos($id);
            return($ideliminarprod!=false)?header("Location: listaProd.php"):header("Location: listaProd");;
        }
    }
?>