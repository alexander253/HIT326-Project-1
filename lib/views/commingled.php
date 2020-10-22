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

.top_nav{
  text-align: center;
}
.top_nav h4{
  float: left;
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

</style>
<div class="top_nav">
  <a href="/recycle"><h4 class="top_nav_card" style="background-color: green;">Recycle&nbsp;</h4></a>
  <a href="/general"><h4 style="background-color: red;" class="top_nav_card">General&nbsp;</h4></a>
  <a href="/commingled"><h4 style="background-color: orange;" class="top_nav_card">Commingled</h4></a>
</div> <br><br><br>
<h2>Commingled Waste Items</h2>
<form method="post">
<input type="text" name="search" placeholder="Search waste item..">
<input type="submit" name="submit">

</form>

</body>
</html>

<?php

$con = get_db();

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM rubbish WHERE name = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{

    echo "
    <div class='info_card' style='background-color:purple;'>
      <h3>$row->name</h3>
       <p>$row->description</p>
       </div>
    ";

     ?>
<?php
	}


		else{
			echo "
      <div class='info_card' style='background-color:red;'>
            <h3>Waste item does not exist</h3>
             <p>Your searched item may not be in our database</p>
      </div>

             ";
		}
  }

?>
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
