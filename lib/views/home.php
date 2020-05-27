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

    <link rel="stylesheet" href="style.css">
</head>
<body>


<h1>Darwin Art Company<h1/>

<?php
  if (is_authenticated()){
      $lname = getUserLName();

    echo "<h2>Welcome back, $lname</h2> ";
  }
  echo "<h4>Here are our current artworks.</h4>";
?>

<table border ="1" cellpadding = "5" cellspacing= "5" align="center">
<tr>
  <th>ID</th>
  <th>Name</th>
  <th>Price</th>
  <th>Size</th>
  <th>Image</th>
</tr>

<?php foreach($artworks as $data){
  $image = $data['ProductImage'];
?>
  <tr>
    <td><?php echo $data['ProductID']; ?></td>
    <td><?php echo $data['ProductName']; ?></td>
    <td><?php echo "$", $data['ProductPrice']; ?></td>
    <td><?php echo $data['ProductSize']; ?></td>
    <td><img src =<?php echo "../" . "../" . "$image" ?>  width="150" height="200"></td> <!--echo $data['ProductImage']-->
  </tr>
<?php
}
?>
</table>


<?php

//old code
//if(!empty($artworks)){
  //  foreach($artworks as $artwork){
  //    $ProductID = htmlspecialchars($artwork['ProductID']);
  //    $ProductName = htmlspecialchars($artwork['ProductName']);
  //    $ProductDesc = htmlspecialchars($artwork['ProductDesc']);
  //    $ProductPrice = htmlspecialchars($artwork['ProductPrice']);
  //    $ProductCategory = htmlspecialchars($artwork['ProductCategory']);
  //    $ProductSize = htmlspecialchars($artwork['ProductSize']);
  //    $ProductImage = htmlspecialchars($artwork['ProductImage']);


//}
//}
  //    echo "<li>{$ProductID},{$ProductName}, {$ProductPrice}, {$ProductSize}, {$ProductImage}</li>";


 //?>



 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 </body>
 </html>
