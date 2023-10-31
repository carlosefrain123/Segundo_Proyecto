<?php
session_start();
require_once("C:/xampp/htdocs/proyectb/includes/header.php");
require_once("C:/xampp/htdocs/proyectb/controller/controller.php");
$obj = new controller();
$dato = $obj->show($_GET['id']);
?>
<main>
    <h1 class="text-center">Visualizar Producto</h1>
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
                <td>
                    <a href="listaProd.php" class="btn btn-success">Volver</a>
                    <a href="editarProd.php?id=<?= $dato[0] ?>" class="btn btn-primary">Editar</a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $dato[0] ?>">
                        Eliminar
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal<?= $dato[0] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">¿Desea Eliminar el Producto?</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    El producto eliminado, ya no podrá ser recuperado
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancelar</button>
                                    <a type="button" class="btn btn-danger" href="eliminarP.php?id=<?= $dato[0] ?>">Eliminar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</main>
<?php
require_once("C:/xampp/htdocs/proyectb/includes/footer.php");
?>