<?php
    require_once("C:/xampp/htdocs/proyectb/controller/controller.php");
    $obj=new controller();
    $obj->registrar($_POST['nombres'],$_POST['apellidos'],$_POST['email'],$_POST['password']);
?>