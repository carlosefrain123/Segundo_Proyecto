<?php
session_start();
require_once("C:/xampp/htdocs/proyectb/includes/header.php");
require_once("C:/xampp/htdocs/proyectb/controller/controller.php");
$obj = new controller();
$dato = $obj->mostrarProd();
?>
<table class="table container-fluid">
    <thead>
        <tr>
            <th>ID</th>
            <th>Código de Barra</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Funciones</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($dato) : ?>
            <?php foreach($dato as $row): ?>
                <tr>
                    <td><?= $row[0] ?></td>
                    <td><?= $row[1] ?></td>
                    <td><?= $row[2] ?></td>
                    <td><?= $row[3] ?></td>
                    <td><?= $row[4] ?></td>
                    <td><a href="visualizar.php?id=<?= $row[0] ?>" class="btn btn-success">Vista</a></td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </tbody>
</table>
<?php
require_once("C:/xampp/htdocs/proyectb/includes/footer.php");
?>