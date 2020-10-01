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

</style>


<?php
echo "<h1>Leader Board</h1>";


 echo "<table>
   <tr>
     <th class = 'small'>Rank</th>
     <th class = 'small'>Points</th>
     <th>Email</th>
     <th>First Name</th>
     <th>Last Name</th>

   </tr>
 </table>";
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

   <table>

     <tr>
       <td class = 'small'>{$rank}</td>
       <td class = 'small'>{$points}</td>
       <td>{$email}</td>
       <td>{$fname}</td>
       <td>{$lname}</td>
     </tr>
   </table>


   "



   ;


 }
}

 else{
   echo "<h2>Something went wrong</h2>";}

 ?>
