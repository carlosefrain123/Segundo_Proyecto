<?php
    require_once("C:/xampp/htdocs/proyectb/model/model.php");
    $obj=new model();
    $obj->entrarUsuarios($_POST['email'],$_POST['password']);
?>