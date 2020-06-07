<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-light">
  <h3 class="title2">Shopping Cart Details</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <th width="30%">Product Name</th>
                <th width="10%">Price</th>
                <th width="12%">Size</th>
                <th width="20%">Image</th>
            </tr>
  <?php
  if(!empty($_SESSION["cart"])){
    session_start();
    $total = 0;
    foreach($_SESSION['cart'] as $select=>$val){
      $db = get_db();
      $query = "SELECT ProductName, ProductPrice, ProductSize, ProductImage FROM ProductDetails where ProductID = ? ";
      $ProductID= $val;
      if($statement = $db->prepare($query)){
        $binding = array($val);
      $statement -> execute($binding);
      $artworks = $statement->fetchall(PDO::FETCH_ASSOC);

   }

   foreach($artworks As $data){
     $ProductName = htmlspecialchars($data['ProductName']);
     $ProductPrice = htmlspecialchars($data['ProductPrice']);
     $ProductSize= htmlspecialchars($data['ProductSize']);
     $ProductImage = htmlspecialchars($data['ProductImage']);
     $image = $data['ProductImage'];

   }

  ?>
    <tr>
      <td><?php echo $data['ProductName'] ?></td>
      <td>$<?php echo $data['ProductPrice'] ?></td>
      <td><?php echo $data['ProductSize'] ?></td>
      <td><img src =<?php echo "../" . "../" . "$image" ?>  width="150" height="200"></td>
      <!--<td><a href="/cart action=delete&id=<<?php //echo $data["ProductID"]; ?>" class="btn btn-danger" name='delete' onclick="return confirm('Are you sure?')"<span class="text-danger">DELETE</span></a></td>    </tr>-->
    <?php
    $total = $total + $data['ProductPrice'];}
    ?>
    <form action='/cart' method='POST'>
    <tr>
        <td colspan="2" align="right">Total</td>
        <th align="right">$ <?php echo number_format($total, 2); ?></th>
          <input type='hidden' name='_method' value='post' />
          <th><input type='submit' class='btn btn-success' name='checkout'value='Checkout' onclick="return confirm('Please confirm your purchase')"  /><br>
          <a href="/clearCart" action=delete class="btn btn-danger" name='Clear' onclick="return confirm('Are you sure you want to clear the cart?')" <span class="text-danger">Clear cart</span></a></th>
   </form>
   </tr>

    <?php
  } else{echo "Your cart is empty, go to home page to start shopping NOW!";}
    ?>

    <?php
    if (isset($_GET["action"])){
           if ($_GET["action"] == "delete"){
             echo"HEY";
             exit();
                 resetCart();
                 redirect_to("/cart");
          }
        }
    ?>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
