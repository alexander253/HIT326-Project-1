<?php
echo "<h1>$message</h1>";
 //Print the list of account details
 if(!empty($list)){
   foreach($list As $detail){
     $email = htmlspecialchars($detail['email'],ENT_QUOTES, 'UTF-8');
     $fname = htmlspecialchars($detail['fname'],ENT_QUOTES, 'UTF-8');
     $lname = htmlspecialchars($detail['lname'],ENT_QUOTES, 'UTF-8');
     $points = htmlspecialchars($detail['points'],ENT_QUOTES, 'UTF-8');
     $title= htmlspecialchars($detail['title'],ENT_QUOTES, 'UTF-8');
     $address = htmlspecialchars($detail['address'],ENT_QUOTES, 'UTF-8');
     $city = htmlspecialchars($detail['city'],ENT_QUOTES, 'UTF-8');
     $state = htmlspecialchars($detail['state'],ENT_QUOTES, 'UTF-8');
     $country = htmlspecialchars($detail['country'],ENT_QUOTES, 'UTF-8');
     $postcode = htmlspecialchars($detail['postcode'],ENT_QUOTES, 'UTF-8');
     $phone= htmlspecialchars($detail['phone'],ENT_QUOTES, 'UTF-8');

   echo "<ul>
   <li>Email: {$email}</li>
   <li>First Name: {$fname}</li>
   <li>Last Name: {$lname}</li>
   <li>Points: {$points}</li>
   </ul>";


 }
}

 else{
   echo "<h2>You are not signed in yet</h2>";}

 ?>

 <div class="blue">
  <a href= "/signup"><p>Sign up here</p></a>
  <a href= "/signin"><p>Sign in here</p></a>
  <a href= "/admin_signin"><p>Admin sign in here</p></a>
  <a href= "/signout"><p>Sign out here</p></a>
 </div>
