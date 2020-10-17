<style media="screen">
  form, h2, input .bttn {
    text-align: center;
  }
</style>

<?php
echo "<h1>Claim points from Commingled bin</h1>";
 //Print the list of account details
 if(!empty($list)){
   foreach($list As $detail){
     $points = htmlspecialchars($detail['points'],ENT_QUOTES, 'UTF-8');
          $fname = htmlspecialchars($detail['fname'],ENT_QUOTES, 'UTF-8');


   echo "
   <h2>My Points: {$points}</h2>
   ";


 }
}

 else{
   echo "<h2>Something went wrong</h2>";}

 ?>

 <form action='/addpoints_comm' method='POST'>
  <input type='hidden' name='_method' value='post' />

  <svg width='10em' height='10em' viewBox='0 0 16 16' class='bi bi-gem' fill='#007a87' xmlns='http://www.w3.org/2000/svg'>
<path fill-rule='evenodd' d='M3.1.7a.5.5 0 0 1 .4-.2h9a.5.5 0 0 1 .4.2l2.976 3.974c.149.185.156.45.01.644L8.4 15.3a.5.5 0 0 1-.8 0L.1 5.3a.5.5 0 0 1 0-.6l3-4zm11.386 3.785l-1.806-2.41-.776 2.413 2.582-.003zm-3.633.004l.961-2.989H4.186l.963 2.995 5.704-.006zM5.47 5.495l5.062-.005L8 13.366 5.47 5.495zm-1.371-.999l-.78-2.422-1.818 2.425 2.598-.003zM1.499 5.5l2.92-.003 2.193 6.82L1.5 5.5zm7.889 6.817l2.194-6.828 2.929-.003-5.123 6.831z'/>
  </svg>
   <input class = "bttn" type='submit' value='+Claim Points' />
 </form>
