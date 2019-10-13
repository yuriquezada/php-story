<?php include("includes/header.php")?>
<div class="container pt-5">
  <div class="row">
    <div class="col-sm-4 m-auto">
      <form id="form1" name="form1" method="post" action="validar.php">
        <h2>Login</h2>
        <div class="form-group">
          <label for="exampleInputUser">User</label>
          <input type="text" name="user" class="form-control" id="exampleInputUser" placeholder="Enter user">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>

<?php include("includes/footer.php")?>