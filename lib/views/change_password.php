<h1>Change password</h1>
<h2>
<?php
$access = FALSE;
if (!$access && !empty($name)){
  echo "Sorry $name, function not available";
} else{
  if(!empty($name)){
    echo $name;
  }

} ?>
</h2>
<div>

<!--
<form action="/change/<?php //if(!empty($user_id))echo $user_id?>" method='POST'>
 <input type='hidden' name='_method' value='put' />
 <?php
	//require PARTIALS."/form.old-password.php";
	//require PARTIALS."/form.password.php";
	//require PARTIALS."/form.password-confirm.php";
 ?>
 <input type='submit' value='Update' />
</form>
</div>
-->
