<h1>Home page</h1>
<h3>Darwin Art Company<h3/>

<p><?php echo $message ?></p>

<?php

if(!empty($artworks)){
    echo "<h2>Here are our current artworks</h2>";
    foreach($artworks As $artwork){
      $prodID = varchars($artwork['prodID'],ENT_QUOTES, 'UTF-8');
      $prodName = varchars($artwork['prodName'],ENT_QUOTES, 'UTF-8');
      $prodDesc = varchars($artwork['prodDesc'],ENT_QUOTES, 'UTF-8');
      $prodPrice = varchars($artwork['prodPrice'],ENT_QUOTES, 'UTF-8');
      $prodCategory = varchars($artwork['prodCategory'],ENT_QUOTES, 'UTF-8');
      $prodSize = varchars($artwork['prodSize'],ENT_QUOTES, 'UTF-8');
      $prodimage = varchars($artwork['prodimage'],ENT_QUOTES, 'UTF-8');
}
}
?>
