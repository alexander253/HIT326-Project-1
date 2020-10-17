<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  min-width: 200px;
  max-width: 200px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

.small{
  min-width: 50px;
  max-width: 50px;
}

h4{
  text-align: left;
}

.info_card{
  -webkit-box-shadow: 9px 11px 13px 2px rgba(0,0,0,0.54);
  -moz-box-shadow: 9px 11px 13px 2px rgba(0,0,0,0.54);
  box-shadow: 9px 11px 13px 2px rgba(0,0,0,0.54);
}

</style>


<?php
echo "<h1>Leader Board</h1>";

  //Print the list of account details
 if(!empty($list)){
   foreach($list As $detail){
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
     $rank++;


   echo "

   <div class='info_card' style='background-color:rgb(50, 41, 91);'>
     <h3>{$fname}&nbsp;{$lname}</h3>
     <h4>Rank: {$rank}</h4>
     <h4>Points: {$points}</h4>
     <h4>Email: {$email}</h4>
     </div>

   "



   ;


 }
}

 else{
   echo "<h2>Something went wrong</h2>";}

 ?>
