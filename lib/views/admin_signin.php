<style media="screen">

body {
  font-family: Arial;
}
  h1{
    text-align: center;
  }

.form-signin label{
  margin: 5px 10px 5px 0;
    display: inline-block;




}
.form-signin input {
  vertical-align: middle;
  margin: 5px 10px 5px 0;
  padding: 10px;
  background-color: #fff;
  border: 1px solid #ddd;
}

.form-signin button {
  padding: 10px 20px;
  background-color: dodgerblue;
  border: 1px solid #ddd;
  color: white;
  cursor: pointer;
}

.form-signin button:hover {
  background-color: royalblue;
}

@media (max-width: 800px) {
  .form-signin input {
    margin: 10px 0;
  }
  
  .form-signin {
    flex-direction: column;
    align-items: stretch;
  }
}

.adminname{
    display: block;

  margin-left: auto;
  margin-right: auto;
  width: 100px;
  margin-bottom: 1rem;


}

.adminpassword{
    display: block;

  margin-left: auto;
  margin-right: auto;
  width: 100px;
  margin-bottom: 1rem;



}

.adminbody{
  background-color: #B8CCC2;
  height: 300px;
  position: relative;
  text-align: center;
  margin-left: auto;
    margin-right: auto;

}

</style>
<h1>Admin sign in</h1>

<body>
<div class="container" >
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5" >
          <div class="adminbody">
            <form class="form-signin" action='/admin_signin' method='POST'>
              <input type='hidden' name='_method' value='post' />

              <div class="adminname">
                <label for='name'>Name</label>
                <input type="text" id='name' name='name' class="form-control" required autofocus>
              </div>

              <div class="adminpassword">
                <label for="password">Password</label>
                <input type="password" id='password' name='password' class="form-control" required>
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" value="Sign in">Sign in</button>
              <hr class="my-4">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

<div class="">
  <a href= "/signin"><p>User sign in here</p></a>

</div>
</body>