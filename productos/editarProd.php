<?php
session_start();
require_once("C:/xampp/htdocs/proyectb/includes/header.php");
require_once("C:/xampp/htdocs/proyectb/controller/controller.php");
$obj = new controller();
$dato = $obj->show($_GET['id']);
?>
<main>
    <form action="editarP.php" method="post">
        <div class="mb-3 row">
            <label for="email" class="col-sm-2 col-form-label">ID</label>
            <div class="col-sm-10">
                <input name="id" type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?=$dato[0]?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="codigo" class="col-sm-2 col-form-label">Código</label>
            <div class="col-sm-10">
                <input name="codigo" type="text" class="form-control" id="codigo" value="<?=$dato[1]?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
                <input name="nombre" type="text" class="form-control" id="nombre" value="<?=$dato[2]?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="precio" class="col-sm-2 col-form-label">Precio</label>
            <div class="col-sm-10">
                <input name="precio" type="text" class="form-control" id="precio" value="<?=$dato[3]?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="stock" class="col-sm-2 col-form-label">Stock</label>
            <div class="col-sm-10">
                <input name="stock" type="text" class="form-control" id="stock" value="<?=$dato[4]?>">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</main>
<?php
require_once("C:/xampp/htdocs/proyectb/includes/footer.php");
?>