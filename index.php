<?php
session_start();
require "includes/header.php";
echo "Hola " . $_SESSION['nombre']." ".$_SESSION['apellidos'];
/**if (isset($_SESSION['nombre'])) {
    echo "Hola" . $_SESSION['nombre'];
} else {
    echo "Lo siento";
} */
?>
<?php require "includes/footer.php"; ?>