<style media="screen">

body  
{  
    margin: 0;  
    padding: 0;  
    background-color: #B8CCC2;
    font-family: 'Arial';  
}  
  h1{
    text-align: center;
    padding: 20px;  
    color: #277582;  

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
  width: 100px;
  margin-bottom: 1rem;


}

.adminpassword{
  display: block;
  width: 100px;
  margin-bottom: 1rem;



}

.container{
   width: 382px;  
   overflow: hidden;  
   margin: auto;  
   margin: 20 0 0 450px;  
   padding: 80px;  
   background: #007a87;  
   border-radius: 15px ;  

}

.user p{
    color: white;  

}

@media screen and (max-width:768px) {
  .container {
    width: 100%;
 margin-left: 10px;
            margin-right: 10px;
  }

  .adminname{
  display: block;
  width: 100px;
  margin-bottom: 1rem;


}

.adminpassword{
  display: block;
  width: 100px;
  margin-bottom: 1rem;

}

</style>
<h1>Admin sign in</h1>


<div class="container" >
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

            </form>
            </div>
            <div class="user">
                <a href= "/signin"><p>User sign in here</p></a>
            </div>
  </div>
