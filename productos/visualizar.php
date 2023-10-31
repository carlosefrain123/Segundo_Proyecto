<?php
session_start();
require_once("C:/xampp/htdocs/proyectb/includes/header.php");
require_once("C:/xampp/htdocs/proyectb/controller/controller.php");
$obj = new controller();
$dato = $obj->show($_GET['id']);
?>
<main>
    <table class="table container-fluid">
        <thead>
            <tr>
                <th>ID</th>
                <th>Código de Barra</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $dato[0] ?></td>
                <td><?= $dato[1] ?></td>
                <td><?= $dato[2] ?></td>
                <td><?= $dato[3] ?></td>
                <td><?= $dato[4] ?></td>
            </tr>
        </tbody>
    </table>
</main>
<?php
require_once("C:/xampp/htdocs/proyectb/includes/footer.php");
?>