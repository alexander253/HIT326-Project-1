<style media="screen">
  input,textarea,select{
    width: 350px;

  }
</style>

<h1>Delete a Rubbish Item</h1>
<div>
<form action='/rubbish_items' method='POST'>
  <input type='hidden' name='_method' value='delete' />
  <input type='hidden' name='rubbish_id' value='<?php echo($name) ?>' />


 <!-- <label for="type"><h3>Choose a Classification:</h3></label> <br>
<select name="type" id="type">
   <option value="Recycle">Recycle</option>
   <option value="Commingled">Commingled</option>
   <option value="General Waste">General Waste</option>
 </select> <br><br>
-->
 <label for='name'><h3>Name of Item</h3></label>
 <input type='text' id='name' name='name' /> <br>

 <input type="submit" class="btn btn-dark" name="deleterubbish" value="Delete rubbish" />

</form>
</div>
