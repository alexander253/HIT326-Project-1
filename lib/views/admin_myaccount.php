<style media="screen">
  h3, h5, h4{
    text-align: center;
  }

  .account_tab{
    text-align: left;
  }

.profile_img{
  width: 100px;
  position: relative;
  bottom: -100px;

}

.profile_background{
  background-color: #B8CCC2;
  height: 200px;
  position: relative;
  text-align: center;
}

</style>

<h4>Admin Account</h4>
<div class="profile_background">
<img class = 'profile_img 'src='https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Circle-icons-profile.svg/200px-Circle-icons-profile.svg.png' alt='profile img'>
</div>
<?php
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

   echo "
 <h3>{$fname} {$lname} </h3>
<h5>{$email}</h5>



<h1><svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-gem' fill='#007a87' xmlns='http://www.w3.org/2000/svg'>
<path fill-rule='evenodd' d='M3.1.7a.5.5 0 0 1 .4-.2h9a.5.5 0 0 1 .4.2l2.976 3.974c.149.185.156.45.01.644L8.4 15.3a.5.5 0 0 1-.8 0L.1 5.3a.5.5 0 0 1 0-.6l3-4zm11.386 3.785l-1.806-2.41-.776 2.413 2.582-.003zm-3.633.004l.961-2.989H4.186l.963 2.995 5.704-.006zM5.47 5.495l5.062-.005L8 13.366 5.47 5.495zm-1.371-.999l-.78-2.422-1.818 2.425 2.598-.003zM1.499 5.5l2.92-.003 2.193 6.82L1.5 5.5zm7.889 6.817l2.194-6.828 2.929-.003-5.123 6.831z'/>
</svg>{$points}pts</h1>


<a href= '/signout'><h3><button type='button' class='btn btn-primary'><a href= '/signup'><p>Sign out</p></button> </h3></a>

   "
   ;



 }
}

 else{
   echo "<h2>You are signed in as Admin</h2>
   <button type='button' class='btn btn-primary'><a href= '/signout'><p>Sign out</p></a></button>



   ";


 }

 ?>
