<style media="screen">
  input,textarea,select{
    width: 350px;

  }
</style>

<h1>Delete a user</h1>
<div>
<form action='/leaderboard' method='POST'>
  <input type='hidden' name='_method' value='delete' />
  <input type='hidden' name='fname' value='<?php echo($fname) ?>' />

 <label for='fname'><h3>User name</h3></label>
 <input type='text' id='fname' name='fname' /> <br>

 <input type="submit" class="btn btn-dark" name="deleteleaderboarduser" value="Delete the user" />

</form>
</div>
