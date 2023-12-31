<?php 
session_start();
require "includes/header.php"; 
if(isset($_SESSION['nombre'])&&isset($_SESSION['apellidos'])){
  header('Location: index.php');
}
?>

<main class="form-signin w-50 m-auto">
  <form method="post" action="entrar.php">
    <!-- <img class="mb-4 text-center" src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
    <h1 class="h3 mt-5 fw-normal text-center">Please sign in</h1>

    <div class="form-floating mb-2">
      <input name="email" type="email" class="form-control" required id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating mb-2">
      <input name="password" type="password" class="form-control" required id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <h6 class="mt-3">Don't have an account  <a href="register.php">Create your account</a></h6>
  </form>
</main>
<?php require "includes/footer.php"; ?>
