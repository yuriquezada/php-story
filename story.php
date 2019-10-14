<?php include("includes/header.php")?>
<h1>STORY</h1>
<h3>¡Bienvenido! Escoja sus productos</h3>
<div class="container pt-5 ">
  <div class="row">
    <div class="col-9 m-auto bg-success">
      <h3>Lista de Productos</h3>
      <form id="form2" name="form2" method="POST" action="detail.php">
        <div class="form-group row">
          <label class="col-sm-2 col-form-label" for="inputAddress">Zanahoria</label>
          <div class="col-sm-10">
            <input type="number" name="quantity1" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label" for="inputAddress">Cebolla</label>
          <div class="col-sm-10">
            <input type="number" name="quantity2" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label" for="inputAddress">Camote</label>
          <div class="col-sm-10">
            <input type="number" name="quantity3" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label" for="inputAddress">Tomate</label>
          <div class="col-sm-10">
            <input type="number" name="quantity4" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label" for="inputAddress">Papa</label>
          <div class="col-sm-10">
            <input type="number" name="quantity5" class="form-control">
          </div>
        </div>
        <button type="submit" name=submit2 class="btn btn-primary">COMPRAR</button>
      </form>
    </div>
  </div>
</div>

<?php include("includes/footer.php")?>