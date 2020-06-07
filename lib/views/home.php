<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<h1>Darwin Art Company<h1/>
<?php
if (is_authenticated()){
  $lname = getUserLName();
  echo "<h2>Welcome back, $lname</h2>";
}

echo "<h4>Here are our current artworks.</h4>";

?>

<table id ="product">
<tr>
  <th>ID</th>
  <th>Name</th>
  <th>Price</th>
  <th>Size</th>
  <th>Image</th>
  <th>Cart</th>

</tr>

<?php
 if(!empty($artworks)){
   foreach($artworks As $data){
     $ProductID = htmlspecialchars($data['ProductID']);
     $ProductName = htmlspecialchars($data['ProductName']);
     $ProductPrice = htmlspecialchars($data['ProductPrice']);
     $ProductSize= htmlspecialchars($data['ProductSize']);
     $ProductImage = htmlspecialchars($data['ProductImage']);
     $image = $data['ProductImage'];

?>
<form  method='POST'>
  <div class='product'>
         <tr>
           <th><?php echo $data["ProductID"]; ?></th>
           <th><?php echo $data["ProductName"]; ?></th>
           <th>$<?php echo $data["ProductPrice"]; ?></th>
           <th><?php echo $data["ProductSize"]; ?></th>
           <th><img src =<?php echo "../" . "../" . "$image" ?>  width="150" height="200"></th> <!--echo $data['ProductImage']-->
           <input type='hidden' name='shopping' value= "<?php echo $data["ProductID"]?> ">
           <th><input type='submit' class='btn btn-info' value='Add to cart' name='add'></th>
         </tr>

     </div>
</form>

<?php
 }

}
  if(isset($_POST['add'])) {

    $shopping = $_POST['shopping'];
    session_start();
    array_push($_SESSION['cart'],$shopping);
    session_write_close();
    echo '<script>alert("Please check your cart")</script>';
    echo '<script>window.location="/cart"</script>';
  }
?>
</table>

<div id="popup1" class="overlay">
	<div class="popup">
    <form action ="/addReview" method = 'POST'>
      <center>
      <input type="text" id = "key" name="key" id="titleInput" placeholder="Title" required></input>
    </center>
		<a class="close" href="">&times;</a>
        <center>
        <textarea style="height:100px;width:300px;font-size:14pt;" type="text" name="valueInput" id="valueInput" placeholder="Enter text here"></textarea>
      </center>
      <center>
      <input type='submit' value='Complete review' />
    </center>
		</div>
    </form>
	</div>

<h3> Reviews </h3>
<a href = "#popup1"><button class='btn btn-warning'>Write a review</button></a>
<table id="product"
  <tr>
    <th>Title</th>
    <th>Review</th>
  </tr>

  <?php
   if(!empty($reviews)){
     foreach($reviews As $review){
       $Title = htmlspecialchars($review['Title']);
       $Content = htmlspecialchars($review['Review']);

  ?>
  <div class='products'>
         <tr>
           <td><?php echo "$Title"; ?></td>
           <td><?php echo "$Content"; ?></td>
         </tr>

     </div>

  <?php
    }
   }
?>
</table>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 </body>
 </html>
