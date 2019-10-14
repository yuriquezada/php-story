<?php include("includes/header.php")?>
<header class="text-center mt-5">
  <h3>Detalle de compra</h3>
</header>
<div class="container pt-5 ">
  <div class="row">
    <div class="col-8 m-auto bg-warning">
      <?php
      if(isset($_POST['submit2'])){
        
         $quantity1=$_POST['quantity1'];
         $quantity2=$_POST['quantity2'];
         $quantity3=$_POST['quantity3'];
         $quantity4=$_POST['quantity4'];
         $quantity5=$_POST['quantity5'];

         $price1=2.3;
         $price2=3.1;
         $price3=2.1;
         $price4=3.5;
         $price5=2.6;

         $subtotal1=$quantity1*$price1;
         $subtotal2=$quantity2*$price2;
         $subtotal3=$quantity3*$price3;
         $subtotal4=$quantity4*$price4;
         $subtotal5=$quantity5*$price5;
      }
      ?>

      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Descripción</th>
            <th scope="col">Precio (x kg)</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Subtotal</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Zanahoria</td>
            <td><?php echo "$price1" ?></td>
            <td><?php echo "$quantity1" ?></td>
            <td><?php echo "$subtotal1" ?></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Cebolla</td>
            <td><?php echo "$price2" ?></td>
            <td><?php echo "$quantity2" ?></td>
            <td><?php echo "$subtotal2" ?></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Camote</td>
            <td><?php echo "$price3" ?></td>
            <td><?php echo "$quantity3" ?></td>
            <td><?php echo "$subtotal3" ?></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Tomate</td>
            <td><?php echo "$price4" ?></td>
            <td><?php echo "$quantity4" ?></td>
            <td><?php echo "$subtotal4" ?></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Camote</td>
            <td><?php echo "$price5" ?></td>
            <td><?php echo "$quantity5" ?></td>
            <td><?php echo "$subtotal5" ?></td>
          </tr>
        </tbody>
        <tbody class="aaaaa">
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <th scope="row">TOTAL</th>
            <td><?php echo $subtotal1+$subtotal2+$subtotal3+$subtotal4+$subtotal5 ?></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php include("includes/footer.php")?>