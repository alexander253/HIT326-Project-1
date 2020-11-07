<style media="screen">
  input,textarea,select{
    width: 350px;
  }


</style>



<h1>Add a Rubbish Item</h1>
<div>
<form action='/addrubbish_item' method='POST'>
 <input type='hidden' name='_method' value='post' />


 <label for="type"><h3>Choose a Classification:</h3></label> <br>
 <select name="type" id="type">
   <option value="Recycle">Recycle</option>
   <option value="Commingled">Commingled</option>
   <option value="General Waste">General Waste</option>
 </select> <br><br>

 <label for='name'><h3>Name of Item</h3></label>
 <input type='text' id='name' name='name' /> <br>

 <label for='desc'><h3>Description</h3></label> <br>
 <textarea rows="5" type='text' id='desc' name='desc'></textarea>


<!--
<label for="cate">Category:</label>
<select name="cate" id="cate">
  <option value="Common">Common</option>
  <option value="Rare">Rare</option>
  <option value="Ulra Rare">Ultra Rare</option>
</select> <br>

<label for="size">Size:</label>
<select name="size" id="size">
  <option value="Small">Small</option>
  <option value="Medium">Medium</option>
  <option value="Large">Large</option>
  <option value="Extra Large">Extra Large</option>
</select>
-->

 <input type='submit' value='Add Waste Item' />
</form>
</div>
