<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  min-width: 100px;
  max-width: 100px;
  text-align: left;
  padding: 8px;
}

th {
  background-color: orange;
}

tr:nth-child(even) {
  background-color: #dddddd;
}



</style>


<?php

echo "<h1>$message</h1>";




echo "

<table>
<tr>
  <th>Commingled</th>
</tr>


"

;


 //Print the list of products
 if(!empty($list)){
   foreach($list As $product){
     $id = htmlspecialchars($product['id'],ENT_QUOTES, 'UTF-8');
     $type = htmlspecialchars($product['type'],ENT_QUOTES, 'UTF-8');
     $desc = htmlspecialchars($product['description'],ENT_QUOTES, 'UTF-8');

   if($type == "Commingled"){
     echo "

       <tr>
         <td>{$desc}</td>
      </tr>

     ";
 }
}
}


echo "

<tr>
  <th>Recycle</th>
</tr>";

if(!empty($list)){
  foreach($list As $product){
    $id = htmlspecialchars($product['id'],ENT_QUOTES, 'UTF-8');
    $type = htmlspecialchars($product['type'],ENT_QUOTES, 'UTF-8');
    $desc = htmlspecialchars($product['description'],ENT_QUOTES, 'UTF-8');

  if($type == "Recycle"){
    echo "
      <tr>
        <td>{$desc}</td>
      </tr>
    ";
}
}
}

echo "
<tr>
  <th>General</th>
</tr>
"
;

if(!empty($list)){
  foreach($list As $product){
    $id = htmlspecialchars($product['id'],ENT_QUOTES, 'UTF-8');
    $type = htmlspecialchars($product['type'],ENT_QUOTES, 'UTF-8');
    $desc = htmlspecialchars($product['description'],ENT_QUOTES, 'UTF-8');

  if($type == "General Waste"){
    echo "
      <tr>
        <td>{$desc}</td>
      </tr>
    ";
}
}
}

echo "
</table>";





 ?>
