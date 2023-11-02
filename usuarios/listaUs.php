<?php
session_start();
require_once("C:/xampp/htdocs/proyectb/includes/header.php");
require_once("C:/xampp/htdocs/proyectb/controller/controller.php");
$obj = new controller();
$dato = $obj->listaUs();
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
            <?php if ($dato) : ?>
                <?php foreach ($dato as $row) : ?>
                    <tr>
                        <td><?= $row[0] ?></td>
                        <td><?= $row[1] ?></td>
                        <td><?= $row[2] ?></td>
                        <td><?= $row[3] ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</main>
<?php
require_once("C:/xampp/htdocs/proyectb/includes/footer.php");
?>