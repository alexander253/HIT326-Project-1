<head>
  <link rel="../css/login.css" href="/css/master.css">
</head>

<h1>Sign in</h1>

<div class="container" >
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5" >
          <div class="card-body">
            <form class="form-signin" action='/signin' method='POST'>
              <input type='hidden' name='_method' value='post' />
              <div class="form-group">
                <label for="email" style="color: black;">Email address</label>
                <input type="email" id='name' name='name' class="form-control" placeholder="Email address" required autofocus>
              </div>
               <div class="form-group">
                <label for="password" style="color: black;">Password</label>
                <input type="password" id='password' name='password' class="form-control" placeholder="Password" required>
               </div>
              </br>
              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1" style="color: black;">Remember password</label>
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" value="Sign in">Sign in</button>
              <hr class="my-4">
            </form>

            <a href='/signup' style="color: #007a87; font-size: 15px;">New user?</a>
            <a href='/admin_signin' style="color: #a90329; font-size: 15px; float: right;">Admin sign in</a>

        </div>
      </div>
    </div>
  </div>
