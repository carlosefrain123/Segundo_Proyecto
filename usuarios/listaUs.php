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
                <th>Función</th>
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
                        <td>
                            <a class="btn btn-primary" href="mostrarUs.php?id=<?= $row[0] ?>">Ver</a>
                            <a class="btn btn-success" href="editarUs.php?id=<?= $row[0] ?>">Editar</a>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $row[0] ?>">
                                Eliminar
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal<?= $row[0] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">¿Desea Eliminar el Usuario?</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            El usuario eliminado, ya no podrá ser recuperado
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancelar</button>
                                            <a type="button" class="btn btn-danger" href="eliminarP.php?id=<?= $row[0] ?>">Eliminar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</main>
<?php
require_once("C:/xampp/htdocs/proyectb/includes/footer.php");
?>