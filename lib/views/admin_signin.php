<head>
  <link rel="../css/login.css" href="/css/master.css">
</head>

<h1>Admin Sign in</h1>

<div class="container" >
      <div style="min-width:100%;">
        <div>
          <div class="card-body">
             <form class="form-signin" action='/admin_signin' method='POST'>
              <input type='hidden' name='_method' value='post' />
            <div class="form-group">
                <label for="text" style="color: black;">Email address</label>
                <input type="text" id='name' name='name' class="form-control" placeholder="Email address" required autofocus>
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
            <a href='/signin' style="color: #007a87; font-size: 15px;">User sign in</a>

        </div>
      </div>
    </div>
  </div>
