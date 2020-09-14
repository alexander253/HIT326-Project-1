<head>
  <link rel="../css/login.css" href="/css/master.css">
</head>

<h1>Sign in</h1>

<div class="container" >
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5" >
          <div class="card-body">
            <form class="form-signin" action='/signin' method='POST'>
              <input type='hidden' name='_method' value='post' />

              <div class="form-label-group">
                <input type="email" id='name' name='name' class="form-control" placeholder="Email address" required autofocus>
                <label for='name'>Email address</label>
              </div>

              <div class="form-label-group">
                <input type="password" id='password' name='password' class="form-control" placeholder="Password" required>
                <label for="password">Password</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" value="Sign in">Sign in</button>
              <hr class="my-4">
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
