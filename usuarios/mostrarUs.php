<?php
session_start();
require_once("C:/xampp/htdocs/proyectb/includes/header.php");
require_once("C:/xampp/htdocs/proyectb/controller/controller.php");
$obj = new controller();
$dato = $obj->showUs($_GET['id']);
?>
<h1 class="text-center">Lista de Usuarios</h1>
<main>
    <table class="table container-fluid">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $dato[0] ?></td>
                <td><?= $dato[1] ?></td>
                <td><?= $dato[2] ?></td>
                <td><?= $dato[3] ?></td>
            </tr>
        </tbody>
    </table>
</main>
<?php
require_once("C:/xampp/htdocs/proyectb/includes/footer.php");
?>