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

.top_nav_card{

  border-radius: 5px;
  border-width: 2px;
  margin-right: 8px;
  margin-bottom:10px;
  padding: 10px;
  padding-top: 15px;
  padding-bottom: 15px;
  background-color: white;


}

.top_nav{
  text-align: center;
}
.top_nav h4{
  float: left;
}


</style>
<div class="top_nav">
  <a href="/recycle"><h4 class="top_nav_card" style="background-color: green;">Recycle&nbsp;</h4></a>
  <a href="/general"><h4 style="background-color: red;" class="top_nav_card">General&nbsp;</h4></a>
  <a href="/commingled"><h4 style="background-color: orange;" class="top_nav_card">Commingled</h4></a>
</div> <br><br><br>
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
