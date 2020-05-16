<h1> Administration sign in </h1>

<div>
<form action='/adminsignin' method='POST'>
 <input type='hidden' name='_method' value='post' />
 <?php
    require PARTIALS."/form.admin.php";
	  require PARTIALS."/form.password.php";
 ?>
 <input type='submit' value='Admin Sign In' />
</form>
</div>
