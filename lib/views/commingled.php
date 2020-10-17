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

.info_card{
  -webkit-box-shadow: 9px 11px 13px 2px rgba(0,0,0,0.54);
-moz-box-shadow: 9px 11px 13px 2px rgba(0,0,0,0.54);
box-shadow: 9px 11px 13px 2px rgba(0,0,0,0.54);
}


</style>
<h2>Commingled Waste Items</h2>
<?php
if(!empty($list)){
  foreach($list As $product){
    $id = htmlspecialchars($product['id'],ENT_QUOTES, 'UTF-8');
    $type = htmlspecialchars($product['type'],ENT_QUOTES, 'UTF-8');
    $name = htmlspecialchars($product['name'],ENT_QUOTES, 'UTF-8');
    $desc = htmlspecialchars($product['description'],ENT_QUOTES, 'UTF-8');

  if($type == "Commingled"){
    echo "
    <div class='info_card' style='background-color:orange;'>
      <h3>{$name}</h3>
       <p>{$desc}</p>
        </div>
    ";
}
}
}
?>
