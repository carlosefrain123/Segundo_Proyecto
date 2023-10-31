<?php
  session_start();
  require_once('C:/xampp/htdocs/proyectb/includes/header.php');
?>

<form class="container-fluid" method="post" action="guardar.php">
  <h1 class="text-center">Agregar Producto</h1>
  <div class="mb-3">
    <label for="codigo" class="form-label">Código de barras:</label>
    <input name="codigo" type="text" class="form-control" required id="codigo" aria-describedby="codigo">
  </div>
  <div class="mb-3">
    <label for="nombre" class="form-label">Nombre:</label>
    <input name="nombre" type="text" class="form-control" required id="nombre" aria-describedby="nombre">
  </div>
  <div class="mb-3">
    <label for="precio" class="form-label">Precio:</label>
    <input name="precio" type="number" class="form-control" required id="precio" aria-describedby="precio">
  </div>
  <div class="mb-3">
    <label for="stock" class="form-label">Stock:</label>
    <input name="stock" type="number" class="form-control" required id="stock" aria-describedby="stock">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

<?php
    require_once('C:/xampp/htdocs/proyectb/includes/footer.php');
?>