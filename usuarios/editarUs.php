<?php
session_start();
require_once("C:/xampp/htdocs/proyectb/includes/header.php");
require_once("C:/xampp/htdocs/proyectb/controller/controller.php");
$obj = new controller();
$dato = $obj->showUs($_GET['id']);
?>
<main>
    <form action="editeUs.php" method="post">
        <h1 class="text-center">Editar Usuario</h1>
        <div class="mb-3 row">
            <label for="email" class="col-sm-2 col-form-label">ID</label>
            <div class="col-sm-10">
                <input name="id" type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?=$dato[0]?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="codigo" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
                <input name="nombre" type="text" class="form-control" id="codigo" value="<?=$dato[1]?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nombre" class="col-sm-2 col-form-label">Apellidos</label>
            <div class="col-sm-10">
                <input name="apellidos" type="text" class="form-control" id="nombre" value="<?=$dato[2]?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="precio" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input name="email" type="text" class="form-control" id="precio" value="<?=$dato[3]?>">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</main>
<?php
require_once("C:/xampp/htdocs/proyectb/includes/footer.php");
?>