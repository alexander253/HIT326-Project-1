<style>

</style>
<h1>Sign Up</h1>
<div class="container" >
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5" >
          <div class="card-body">
            <form action='/signup' method='POST'>
             <input type='hidden' name='_method' value='post' />
             <?php
                require PARTIALS."/form.fname.php";
                require PARTIALS."/form.lname.php";
                require PARTIALS."/form.email.php";
	            require PARTIALS."/form.password.php";
	            require PARTIALS."/form.password-confirm.php";
             ?>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" value="Sign up">Sign up</button>
              </form>
              </br>
              <a href='/signin' style="color: #007a87; font-size: 15px;">Already have an account?</a>

        </div>
      </div>
    </div>
  </div>
