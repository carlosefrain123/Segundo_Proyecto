<?php
    require_once("C:/xampp/htdocs/proyectb/controller/controller.php");
    $obj=new controller();
    $obj->registroProd($_POST['codigo'],$_POST['nombre'],$_POST['precio'],$_POST['stock'])
?>