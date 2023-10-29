<?php 
require "includes/header.php"; 
if (isset($_POST['submit'])) {
  if (($_POST['nombres']="")||empty($_POST['aepllidos']="")||empty($_POST['email']="")||empty($_POST['password']="")) {
    echo "Por favor complete los datos";
  }else{
    require_once("C:/xampp/htdocs/proyectb/controller/controller.php");
    $obj=new controller();
  }
}
?>
<main class="form-signin w-50 m-auto">
  <form method="POST" action="registrar.php">

    <h1 class="h3 mt-5 fw-normal text-center">REGISTRARSE</h1>

    <div class="row">
    <div class="col-md-6 mb-2">
        <div class="form-floating">
          <input name="nombres" type="text" class="form-control" required id="nombres" placeholder="Nombre">
          <label for="nombres" class="form-label">Nombre</label>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-floating">
          <input name="apellidos" type="text" class="form-control" required id="apellidos" placeholder="Apellidos">
          <label for="apellidos" class="form-label">Apellidos</label>
        </div>
      </div>
    </div>
    <div class="form-floating mb-2">
      <input name="email" type="email" class="form-control" required id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput" class="form-label">Email address</label>
    </div>

    <div class="form-floating mb-2">
      <input name="password" type="password" class="form-control" required id="floatingPassword" placeholder="Password">
      <label for="floatingPassword" class="form-label">Password</label>
    </div>

    <button name="submit" class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
    <h6 class="mt-3">Already have an account? <a href="login.php">Login</a></h6>

  </form>
</main>
<?php require "includes/footer.php"; ?>