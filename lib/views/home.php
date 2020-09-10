<?php
echo "<h1>$message</h1>";

if(!empty($_SESSION["email"])){
  echo "<h4>You are currently signed in as:</h4>";
  echo $_SESSION['email'];
}
  else {
    echo "You are not signed in, sign in or sign up to to start earning points";}


 ?>

 <section class="callaction">
   	<div class="container">
   		<div class="row">
   			<div class="col-lg-12">
   				<div class="overview">
             <h5>Weclome! CDU students and staff</h5>
   					<p>This app is designed to help CDU Casuarina Campus to better manage waste. In order to do so,
             we need you to participate in better waste management practices. </p>
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
                 <h2><span class="glyphicon glyphicon-star"></span></h2>
                 <p>Info on Waste Management</p>
               </div>
               <div class="card" style="background-color:rgb(207, 41, 91);">
                 <h2><span class="glyphicon glyphicon-heart"></span></h2>
                 <p>Nearest Bins</p>
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
           </div>
         </div>
       </div>
     </div>
