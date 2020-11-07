<style media="screen">

.rank {
  width: 20px;
}

.points {
  width: 80px;
}


/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;

}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 355px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
  background-color: white;
}

.top_three{
  background-color: white;
}


</style>

<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<div class="dropdown">
  <h1 class="dropbtn" id= "leaderboard_heading"> <span class="glyphicon glyphicon-chevron-down"></span> Leaderboard - 2020</h1>
  <div class="dropdown-content">
    <a href="#"><h1>September</h1></a>
    <a href="#"><h1>October</h1> </a>
    <a href="#"><h1>November</h1> </a>
  </div>
</div>

<td></td>
<form method="post">
<input type="text" name="search" placeholder="search for user">
<input type="submit" name="submit">
</form>


</body>
</html>

<?php

$con = get_db();

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM user WHERE fname = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{

    echo "
       <div class='info_card' style='background-color:purple;'>
         <h3>$row->fname&nbsp;$row->lname</h3>
         <h4>Points: $row->points</h4>
         </div>
    ";

     ?>
<?php
	}


		else{
			echo "
      <div class='info_card' style='background-color:red;'>
            <h3>User does not exist</h3>
             <p>Your searched item may not be in our database</p>
      </div>

             ";
		}
  }

?>

<?php

 echo "
<table>
 <tr class = 'top_three'>
 <td>
 <svg width='2em' height='2em' viewBox='0 0 16 16' class='bi bi-trophy-fill' fill='gold' xmlns='http://www.w3.org/2000/svg'>
   <path fill-rule='evenodd' d='M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5zm.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935z'/>
 </svg>
 </td>



 ";

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



   echo "
      <td class ='rank'>1</td>
       <td>{$fname}</td>
       <td class = 'points'>
       <svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-gem' fill='#007a87' xmlns='http://www.w3.org/2000/svg'>
   <path fill-rule='evenodd' d='M3.1.7a.5.5 0 0 1 .4-.2h9a.5.5 0 0 1 .4.2l2.976 3.974c.149.185.156.45.01.644L8.4 15.3a.5.5 0 0 1-.8 0L.1 5.3a.5.5 0 0 1 0-.6l3-4zm11.386 3.785l-1.806-2.41-.776 2.413 2.582-.003zm-3.633.004l.961-2.989H4.186l.963 2.995 5.704-.006zM5.47 5.495l5.062-.005L8 13.366 5.47 5.495zm-1.371-.999l-.78-2.422-1.818 2.425 2.598-.003zM1.499 5.5l2.92-.003 2.193 6.82L1.5 5.5zm7.889 6.817l2.194-6.828 2.929-.003-5.123 6.831z'/>
       </svg>
       {$points} pts</td>
     </tr>
   "
   ;


 }
}
 echo "
 </tr>

 <tr class = 'top_three'>
 <td>
 <svg width='2em' height='2em' viewBox='0 0 16 16' class='bi bi-trophy-fill' fill='silver' xmlns='http://www.w3.org/2000/svg'>
   <path fill-rule='evenodd' d='M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5zm.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935z'/>
 </svg>
 </td>
";

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



  echo "
    <td class ='rank'>2</td>
      <td>{$fname}</td>
      <td class = 'points'>
      <svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-gem' fill='#007a87' xmlns='http://www.w3.org/2000/svg'>
  <path fill-rule='evenodd' d='M3.1.7a.5.5 0 0 1 .4-.2h9a.5.5 0 0 1 .4.2l2.976 3.974c.149.185.156.45.01.644L8.4 15.3a.5.5 0 0 1-.8 0L.1 5.3a.5.5 0 0 1 0-.6l3-4zm11.386 3.785l-1.806-2.41-.776 2.413 2.582-.003zm-3.633.004l.961-2.989H4.186l.963 2.995 5.704-.006zM5.47 5.495l5.062-.005L8 13.366 5.47 5.495zm-1.371-.999l-.78-2.422-1.818 2.425 2.598-.003zM1.499 5.5l2.92-.003 2.193 6.82L1.5 5.5zm7.889 6.817l2.194-6.828 2.929-.003-5.123 6.831z'/>
      </svg>
      {$points} pts</td>
    </tr>
  "
  ;


}
}

echo "


 </tr>

 <tr class = 'top_three'>

 <td>
 <svg width='2em' height='2em' viewBox='0 0 16 16' class='bi bi-trophy-fill' fill='brown' xmlns='http://www.w3.org/2000/svg'>
   <path fill-rule='evenodd' d='M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5zm.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935z'/>
 </svg>
 </td>
";
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



  echo "
    <td class ='rank'>3</td>
      <td>{$fname}</td>
      <td class = 'points'>
      <svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-gem' fill='#007a87' xmlns='http://www.w3.org/2000/svg'>
  <path fill-rule='evenodd' d='M3.1.7a.5.5 0 0 1 .4-.2h9a.5.5 0 0 1 .4.2l2.976 3.974c.149.185.156.45.01.644L8.4 15.3a.5.5 0 0 1-.8 0L.1 5.3a.5.5 0 0 1 0-.6l3-4zm11.386 3.785l-1.806-2.41-.776 2.413 2.582-.003zm-3.633.004l.961-2.989H4.186l.963 2.995 5.704-.006zM5.47 5.495l5.062-.005L8 13.366 5.47 5.495zm-1.371-.999l-.78-2.422-1.818 2.425 2.598-.003zM1.499 5.5l2.92-.003 2.193 6.82L1.5 5.5zm7.889 6.817l2.194-6.828 2.929-.003-5.123 6.831z'/>
      </svg>
      {$points} pts</td>
    </tr>
  "
  ;


}
}

echo "
 </tr>
 </div>

";
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
      <td class ='rank'></td>
      <td>
      <svg width='1.2em' height='1.2em' viewBox='0 0 16 16' class='bi bi-trophy-fill' fill='black' xmlns='http://www.w3.org/2000/svg'>
        <path fill-rule='evenodd' d='M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5zm.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935z'/>
      </svg>
      </td>
       <td>{$fname}</td>
       <td class = 'points'>
       <svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-gem' fill='#007a87' xmlns='http://www.w3.org/2000/svg'>
   <path fill-rule='evenodd' d='M3.1.7a.5.5 0 0 1 .4-.2h9a.5.5 0 0 1 .4.2l2.976 3.974c.149.185.156.45.01.644L8.4 15.3a.5.5 0 0 1-.8 0L.1 5.3a.5.5 0 0 1 0-.6l3-4zm11.386 3.785l-1.806-2.41-.776 2.413 2.582-.003zm-3.633.004l.961-2.989H4.186l.963 2.995 5.704-.006zM5.47 5.495l5.062-.005L8 13.366 5.47 5.495zm-1.371-.999l-.78-2.422-1.818 2.425 2.598-.003zM1.499 5.5l2.92-.003 2.193 6.82L1.5 5.5zm7.889 6.817l2.194-6.828 2.929-.003-5.123 6.831z'/>
       </svg>
       {$points} pts</td>
     </tr>
   "
   ;


 }
}


echo "
</table>
"
;







 ?>
 <script>
 /* When the user clicks on the button,
 toggle between hiding and showing the dropdown content */
 function test() {
   document.getElementById("myDropdown").classList.toggle("show");
 }

 // Close the dropdown if the user clicks outside of it
 window.onclick = function(e) {
   if (!e.target.matches('.dropbtn')) {
   var myDropdown = document.getElementById("myDropdown");
     if (myDropdown.classList.contains('show')) {
       myDropdown.classList.remove('show');
     }
   }
 }
 </script>
