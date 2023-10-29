<?php
session_start();
require "includes/header.php";
if(isset($_SESSION['nombre'])&&isset($_SESSION['apellidos'])){
    echo "Hola " . $_SESSION['nombre']." ".$_SESSION['apellidos'];
  }else{
    header("Location: login.php");
  }

/**if (isset($_SESSION['nombre'])) {
    echo "Hola" . $_SESSION['nombre'];
} else {
    echo "Lo siento";
} */
?>
<?php require "includes/footer.php"; ?>