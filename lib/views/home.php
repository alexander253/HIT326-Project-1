
<style media="screen">
  h5, #scan{
    text-align: center;
  }

.center {
margin: auto;
width: 50%;
}

.card{
  -webkit-box-shadow: 9px 11px 13px 2px rgba(0,0,0,0.54);
-moz-box-shadow: 9px 11px 13px 2px rgba(0,0,0,0.54);
box-shadow: 9px 11px 13px 2px rgba(0,0,0,0.54);
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
//if signed in no message else message to sign in
if(!empty($_SESSION["email"])){
  echo "<h4></h4>";}

  else {
    echo "<h5>Sign in to start earning points!</h5>";

}
?>
<?php


//get a title depending on how many points

if(!empty($first)){
  foreach($first As $detail){
    $email = htmlspecialchars($detail['email'],ENT_QUOTES, 'UTF-8');
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




if(!empty($list)){
  foreach($list As $detail){
    $email = htmlspecialchars($detail['email'],ENT_QUOTES, 'UTF-8');
    $points= htmlspecialchars($detail['points'],ENT_QUOTES, 'UTF-8');



    //RUBBISH ROOKIE between 10-20 pts
      if($_SESSION["email"]==$email & $points>10 & $points<20){
      echo " <h1>You are a: <br> Rubbish Rookie <br>
      <svg width='4em' height='4em' viewBox='0 0 16 16' class='bi bi-trophy' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
        <path fill-rule='evenodd' d='M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5zm.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935zM3.504 1c.007.517.026 1.006.056 1.469.13 2.028.457 3.546.87 4.667C5.294 9.48 6.484 10 7 10a.5.5 0 0 1 .5.5v2.61a1 1 0 0 1-.757.97l-1.426.356a.5.5 0 0 0-.179.085L4.5 15h7l-.638-.479a.501.501 0 0 0-.18-.085l-1.425-.356a1 1 0 0 1-.757-.97V10.5A.5.5 0 0 1 9 10c.516 0 1.706-.52 2.57-2.864.413-1.12.74-2.64.87-4.667.03-.463.049-.952.056-1.469H3.504z'/>
      </svg>
      </h1>";
    }

    //TURTlE SAVER between 20-30 pts
    if($_SESSION["email"]==$email & $points>20 & $points<30){
    echo " <h1>You are a: <br> Turtle Saver <br>
    <svg width='4em' height='4em' viewBox='0 0 16 16' class='bi bi-shield-shaded' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
      <path fill-rule='evenodd' d='M5.443 1.991a60.17 60.17 0 0 0-2.725.802.454.454 0 0 0-.315.366C1.87 7.056 3.1 9.9 4.567 11.773c.736.94 1.533 1.636 2.197 2.093.333.228.626.394.857.5.116.053.21.089.282.11A.73.73 0 0 0 8 14.5c.007-.001.038-.005.097-.023.072-.022.166-.058.282-.111.23-.106.525-.272.857-.5a10.197 10.197 0 0 0 2.197-2.093C12.9 9.9 14.13 7.056 13.597 3.159a.454.454 0 0 0-.315-.366c-.626-.2-1.682-.526-2.725-.802C9.491 1.71 8.51 1.5 8 1.5c-.51 0-1.49.21-2.557.491zm-.256-.966C6.23.749 7.337.5 8 .5c.662 0 1.77.249 2.813.525a61.09 61.09 0 0 1 2.772.815c.528.168.926.623 1.003 1.184.573 4.197-.756 7.307-2.367 9.365a11.191 11.191 0 0 1-2.418 2.3 6.942 6.942 0 0 1-1.007.586c-.27.124-.558.225-.796.225s-.526-.101-.796-.225a6.908 6.908 0 0 1-1.007-.586 11.192 11.192 0 0 1-2.417-2.3C2.167 10.331.839 7.221 1.412 3.024A1.454 1.454 0 0 1 2.415 1.84a61.11 61.11 0 0 1 2.772-.815z'/>
      <path d='M8 2.25c.909 0 3.188.685 4.254 1.022a.94.94 0 0 1 .656.773c.814 6.424-4.13 9.452-4.91 9.452V2.25z'/>
    </svg>
    </h1>";
  }

  //FOREST GUARDIAN between 30-40 pts
  if($_SESSION["email"]==$email & $points>30 & $points<40){
  echo " <h1>You are a: <br> Forest Guardian <br>
  <svg width='4em' height='4em' viewBox='0 0 16 16' class='bi bi-shield-shaded' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
    <path fill-rule='evenodd' d='M5.443 1.991a60.17 60.17 0 0 0-2.725.802.454.454 0 0 0-.315.366C1.87 7.056 3.1 9.9 4.567 11.773c.736.94 1.533 1.636 2.197 2.093.333.228.626.394.857.5.116.053.21.089.282.11A.73.73 0 0 0 8 14.5c.007-.001.038-.005.097-.023.072-.022.166-.058.282-.111.23-.106.525-.272.857-.5a10.197 10.197 0 0 0 2.197-2.093C12.9 9.9 14.13 7.056 13.597 3.159a.454.454 0 0 0-.315-.366c-.626-.2-1.682-.526-2.725-.802C9.491 1.71 8.51 1.5 8 1.5c-.51 0-1.49.21-2.557.491zm-.256-.966C6.23.749 7.337.5 8 .5c.662 0 1.77.249 2.813.525a61.09 61.09 0 0 1 2.772.815c.528.168.926.623 1.003 1.184.573 4.197-.756 7.307-2.367 9.365a11.191 11.191 0 0 1-2.418 2.3 6.942 6.942 0 0 1-1.007.586c-.27.124-.558.225-.796.225s-.526-.101-.796-.225a6.908 6.908 0 0 1-1.007-.586 11.192 11.192 0 0 1-2.417-2.3C2.167 10.331.839 7.221 1.412 3.024A1.454 1.454 0 0 1 2.415 1.84a61.11 61.11 0 0 1 2.772-.815z'/>
    <path d='M8 2.25c.909 0 3.188.685 4.254 1.022a.94.94 0 0 1 .656.773c.814 6.424-4.13 9.452-4.91 9.452V2.25z'/>
  </svg>
  </h1>";
  }

  //EARTH SAVIOUR between 30-40 pts
  if($_SESSION["email"]==$email & $points>40){
  echo " <h1>You are an: <br> Earth Saviour <br>
  <svg width='4em' height='4em' viewBox='0 0 16 16' class='bi bi-shield-shaded' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
    <path fill-rule='evenodd' d='M5.443 1.991a60.17 60.17 0 0 0-2.725.802.454.454 0 0 0-.315.366C1.87 7.056 3.1 9.9 4.567 11.773c.736.94 1.533 1.636 2.197 2.093.333.228.626.394.857.5.116.053.21.089.282.11A.73.73 0 0 0 8 14.5c.007-.001.038-.005.097-.023.072-.022.166-.058.282-.111.23-.106.525-.272.857-.5a10.197 10.197 0 0 0 2.197-2.093C12.9 9.9 14.13 7.056 13.597 3.159a.454.454 0 0 0-.315-.366c-.626-.2-1.682-.526-2.725-.802C9.491 1.71 8.51 1.5 8 1.5c-.51 0-1.49.21-2.557.491zm-.256-.966C6.23.749 7.337.5 8 .5c.662 0 1.77.249 2.813.525a61.09 61.09 0 0 1 2.772.815c.528.168.926.623 1.003 1.184.573 4.197-.756 7.307-2.367 9.365a11.191 11.191 0 0 1-2.418 2.3 6.942 6.942 0 0 1-1.007.586c-.27.124-.558.225-.796.225s-.526-.101-.796-.225a6.908 6.908 0 0 1-1.007-.586 11.192 11.192 0 0 1-2.417-2.3C2.167 10.331.839 7.221 1.412 3.024A1.454 1.454 0 0 1 2.415 1.84a61.11 61.11 0 0 1 2.772-.815z'/>
    <path d='M8 2.25c.909 0 3.188.685 4.254 1.022a.94.94 0 0 1 .656.773c.814 6.424-4.13 9.452-4.91 9.452V2.25z'/>
  </svg>
  </h1>";
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
                 <a href="/info"><h2><span class="glyphicon glyphicon-info-sign"></span></h2>
                 <p>Info on Waste Management</p></a>
               </div>


               <!--
               <div class="card" style="background-color:rgb(153, 29, 2);">
                <h2><span class="glyphicon glyphicon-camera"></span></h2>

                <div class="center">
                 <p><button id= "scan" style="display:block;width:120px; height:30px;" onclick="document.getElementById('getFile').click()"><p style="color: black">Scan QR Code</button><p>
                <input type='file' id="getFile" style="display:none">
                    </div>

                    </div>
                  -->

                  <div class="card" style="background-color:rgb(153, 29, 2);">
                    <a href="/howtopoints"><h2><span class="glyphicon glyphicon-star"></span></h2>
                    <p>How to earn points</p></a>
                  </div>



               <div class="card" style="background-color:rgb(207, 41, 91);">
                 <a href="/map_main"><h2><span class="glyphicon glyphicon-map-marker"></span></h2>
                 <p>Nearest Bins</p></a>
               </div>
               <div class="card" style="background-color:rgb(224, 214, 7);">
                 <a href="/all_rubbish">
                 <h2><span class="glyphicon glyphicon-trash"></span></h2>
                 <p>Waste Classification</p></a>
               </div>
               <div class="card" style="background-color:rgb(153, 29, 224);">
                 <a href="/leaderboard"><h2><span class="glyphicon glyphicon-equalizer"></span></h2>
                 <p>Leaderboard</p></a>
               </div>

               <div class="card" style="background-color:rgb(193, 29, 2);">
                 <a href="/quiz"><h2><span class="glyphicon glyphicon-question-sign"></span></h2>
                 <p>Quiz</p></a>
               </div>
           </div>
         </div>
       </div>
     </div>
     </section>


