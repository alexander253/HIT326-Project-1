
<?php
echo "<h1>Leader Board</h1>";


 echo "<table>
   <tr>
     <th>Rank</th>
     <th>Name</th>
     <th>Points</th>
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
     <td>{$rank}</td>
       <td>{$fname}</td>
       <td>{$points}</td>
     </tr>
   </table>


   "



   ;


 }
}






 else{
   echo "<h2>Something went wrong</h2>";}



 ?>
