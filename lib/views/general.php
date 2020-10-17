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


tr:nth-child(even) {
  background-color: white;
}


h2{
  text-align: center;
}


</style>
<h2>General Waste Items</h2>

<?php
if(!empty($list)){
  foreach($list As $product){
    $id = htmlspecialchars($product['id'],ENT_QUOTES, 'UTF-8');
    $type = htmlspecialchars($product['type'],ENT_QUOTES, 'UTF-8');
    $name = htmlspecialchars($product['name'],ENT_QUOTES, 'UTF-8');
    $desc = htmlspecialchars($product['description'],ENT_QUOTES, 'UTF-8');

  if($type == "General Waste"){
    echo "
    <div class='info_card' style='background-color:rgb(153, 29, 2);'>
      <h3>{$name}</h3>
       <p>{$desc}</p>
       </div>
    ";
}
}
}
?>
