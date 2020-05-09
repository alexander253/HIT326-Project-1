<h1>Change password</h1>
<h2>User name goes here</h2>
<div>
<!-- Think about the action? Perhaps it could be something like this "?user/6" which a bit more RESTful. -->
<form action='?change' method='POST'>
 <input type='hidden' name='_method' value='put' />
 <?php
	require PARTIALS."/form.old-password.php";
	require PARTIALS."/form.password.php";
	require PARTIALS."/form.password-confirm.php";
 ?>
 <input type='submit' value='Update' />
</form>
</div>
