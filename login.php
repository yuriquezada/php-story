<?php include("includes/header.php")?>
<div class="container pt-5">
  <div class="row">
    <div class="col-sm-4 m-auto">
      <form id="form1" name="form1" method="post" action="validar.php">
        <h2>Iniciar sesión</h2>
        <div class="form-group">
          <label for="exampleInputUser">Usuario</label>
          <input type="text" name="user" class="form-control" id="exampleInputUser" placeholder="Enter user">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Contraseña</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>

<?php include("includes/footer.php")?>