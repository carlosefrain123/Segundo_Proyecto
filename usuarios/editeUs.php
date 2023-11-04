<?php
require_once("C:/xampp/htdocs/proyectb/controller/controller.php");
$obj=new controller();
$obj->editarUs($_POST['id'],$_POST['nombre'],$_POST['apellidos'],$_POST['email']);
?>