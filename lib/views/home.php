
<style media="screen">
  h5{
    text-align: center;
  }
</style>

<head>
<meta charset='utf-8' />
<title><?php echo $title ?></title>
<link rel="stylesheet" href="/css/standard.css" />

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/styles.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="manifest" href="manifest.webmanifest">
<meta name="Description" content="CDU">

<?php

echo "<h1>$message</h1>";

if(!empty($_SESSION["email"])){
  echo "<h4></h4>";

}
  else {
    echo "<h5>Sign in to start earning points!</h5>";
  }

  if(!empty($first)){
    foreach($first As $detail){
      $email = htmlspecialchars($detail['email'],ENT_QUOTES, 'UTF-8');
      $fname = htmlspecialchars($detail['fname'],ENT_QUOTES, 'UTF-8');
      $lname = htmlspecialchars($detail['lname'],ENT_QUOTES, 'UTF-8');
      $title= htmlspecialchars($detail['title'],ENT_QUOTES, 'UTF-8');
      $address = htmlspecialchars($detail['address'],ENT_QUOTES, 'UTF-8');
      $city = htmlspecialchars($detail['city'],ENT_QUOTES, 'UTF-8');
      $state = htmlspecialchars($detail['state'],ENT_QUOTES, 'UTF-8');
      $country = htmlspecialchars($detail['country'],ENT_QUOTES, 'UTF-8');
      $postcode = htmlspecialchars($detail['postcode'],ENT_QUOTES, 'UTF-8');
      $phone= htmlspecialchars($detail['phone'],ENT_QUOTES, 'UTF-8');
      $points= htmlspecialchars($detail['points'],ENT_QUOTES, 'UTF-8');

if($_SESSION["email"]==$email){
  echo " <h1>YOU ARE CURRENTLY THE RUBBISH KING
  <svg width='6em' height='6em' viewBox='0 0 16 16' class='bi bi-award' fill='gold' xmlns='http://www.w3.org/2000/svg'>
  <path fill-rule='evenodd' d='M9.669.864L8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193l-1.51-.229L8 1.126l-1.355.702-1.51.229-.684 1.365-1.086 1.072L3.614 6l-.25 1.506 1.087 1.072.684 1.365 1.51.229L8 10.874l1.356-.702 1.509-.229.684-1.365 1.086-1.072L12.387 6l.248-1.506-1.086-1.072-.684-1.365z'/>
  <path d='M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z'/>
</svg>
</h1>

  ";
}
}
}

if(!empty($second)){
  foreach($second As $detail){
    $email = htmlspecialchars($detail['email'],ENT_QUOTES, 'UTF-8');
    $fname = htmlspecialchars($detail['fname'],ENT_QUOTES, 'UTF-8');
    $lname = htmlspecialchars($detail['lname'],ENT_QUOTES, 'UTF-8');
    $title= htmlspecialchars($detail['title'],ENT_QUOTES, 'UTF-8');
    $address = htmlspecialchars($detail['address'],ENT_QUOTES, 'UTF-8');
    $city = htmlspecialchars($detail['city'],ENT_QUOTES, 'UTF-8');
    $state = htmlspecialchars($detail['state'],ENT_QUOTES, 'UTF-8');
    $country = htmlspecialchars($detail['country'],ENT_QUOTES, 'UTF-8');
    $postcode = htmlspecialchars($detail['postcode'],ENT_QUOTES, 'UTF-8');
    $phone= htmlspecialchars($detail['phone'],ENT_QUOTES, 'UTF-8');
    $points= htmlspecialchars($detail['points'],ENT_QUOTES, 'UTF-8');

if($_SESSION["email"]==$email){
echo " <h1>YOU ARE CURRENTLY THE RUBBISH KNIGHT


<svg width='6em' height='6em' viewBox='0 0 16 16' class='bi bi-award' fill='silver' xmlns='http://www.w3.org/2000/svg'>
<path fill-rule='evenodd' d='M9.669.864L8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193l-1.51-.229L8 1.126l-1.355.702-1.51.229-.684 1.365-1.086 1.072L3.614 6l-.25 1.506 1.087 1.072.684 1.365 1.51.229L8 10.874l1.356-.702 1.509-.229.684-1.365 1.086-1.072L12.387 6l.248-1.506-1.086-1.072-.684-1.365z'/>
<path d='M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z'/>
</svg>
</h1>

";
}
}
}

if(!empty($third)){
  foreach($third As $detail){
    $email = htmlspecialchars($detail['email'],ENT_QUOTES, 'UTF-8');
    $fname = htmlspecialchars($detail['fname'],ENT_QUOTES, 'UTF-8');
    $lname = htmlspecialchars($detail['lname'],ENT_QUOTES, 'UTF-8');
    $title= htmlspecialchars($detail['title'],ENT_QUOTES, 'UTF-8');
    $address = htmlspecialchars($detail['address'],ENT_QUOTES, 'UTF-8');
    $city = htmlspecialchars($detail['city'],ENT_QUOTES, 'UTF-8');
    $state = htmlspecialchars($detail['state'],ENT_QUOTES, 'UTF-8');
    $country = htmlspecialchars($detail['country'],ENT_QUOTES, 'UTF-8');
    $postcode = htmlspecialchars($detail['postcode'],ENT_QUOTES, 'UTF-8');
    $phone= htmlspecialchars($detail['phone'],ENT_QUOTES, 'UTF-8');
    $points= htmlspecialchars($detail['points'],ENT_QUOTES, 'UTF-8');

if($_SESSION["email"]==$email){
echo " <h1>YOU ARE CURRENTLY THE RUBBISH WARRIOR


<svg width='6em' height='6em' viewBox='0 0 16 16' class='bi bi-award' fill='brown' xmlns='http://www.w3.org/2000/svg'>
<path fill-rule='evenodd' d='M9.669.864L8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193l-1.51-.229L8 1.126l-1.355.702-1.51.229-.684 1.365-1.086 1.072L3.614 6l-.25 1.506 1.087 1.072.684 1.365 1.51.229L8 10.874l1.356-.702 1.509-.229.684-1.365 1.086-1.072L12.387 6l.248-1.506-1.086-1.072-.684-1.365z'/>
<path d='M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z'/>
</svg>
</h1>

";
}
}
}

 ?>

 <section class="callaction">
   	<div class="container">
   		<div class="row">
   			<div class="col-lg-12">
   				<div class="overview">
   				</div>
   			</div>
   		</div>
   	</div>
   	</section>




     <section id="wastesorting">
       <div class="container">
         <div class="row">
           <div class="col-md-12">
             <div class="cardContainer">
               <div class="card" style="background-color:rgb(50, 41, 91);">
                 <h2><span class="glyphicon glyphicon-info-sign"></span></h2>
                 <p>Info on Waste Management</p>
               </div>
               <div class="card" style="background-color:rgb(207, 41, 91);">
                 <a href="/map/map"><h2><span class="glyphicon glyphicon-map-marker"></span></h2>
                 <p>Nearest Bins</p></a>
               </div>
               <div class="card" style="background-color:rgb(224, 214, 7);">
                 <a href="/rubbish_items">
                 <h2><span class="glyphicon glyphicon-trash"></span></h2>
                 <p>Waste Classification</p></a>
               </div>
               <div class="card" style="background-color:rgb(153, 29, 224);">
                 <a href="/leaderboard"><h2><span class="glyphicon glyphicon-equalizer"></span></h2>
                 <p>Leaderboard</p></a>
               </div>
                <input type="file" accept="image/*" capture="camera">
           </div>
         </div>
       </div>
     </div>
     </section>
