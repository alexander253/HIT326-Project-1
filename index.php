<?php
/* SET to display all warnings in development. Comment next two lines out for production mode*/
ini_set('display_errors','On');
error_reporting(E_ERROR | E_PARSE);

/* Set the path to the Application folder */
DEFINE("LIB",$_SERVER['DOCUMENT_ROOT']."/lib/");

/* SET VIEWS path */
DEFINE("VIEWS",LIB."views/");
DEFINE("PARTIALS",VIEWS."/partials");


# Paths to actual files
DEFINE("MODEL",LIB."/model.php");
DEFINE("APP",LIB."/application.php");

# Define a layout
DEFINE("LAYOUT","standard");

# This inserts our application code which handles the requests and other things
require APP;
$messages = array();


/* Here is our Controller code i.e. API if you like.  */
/* The following are just examples of how you might set up a basic app with authentication */


get("/",function($app){
   $app->force_to_http("/");
   $app->set_message("title","Home");
   require MODEL;
   $app ->set_message("artworks", get_artwork());
   $app->render(LAYOUT,"home");
});


get("/admin",function($app){
  $app->force_to_http("/admin");
  $app->set_message("title","Administrater");
  require MODEL;
  $app ->set_message("artworks", get_artwork());
  $app->render(LAYOUT,"admin");
});



get("/signin",function($app){
   $app->force_to_http("/signin");
   $app->set_message("title","Sign in");
   require MODEL;
   try{
     if(is_authenticated()){
        $app->set_flash("You are already signed in, please sign out before signing in again.");
        $app->redirect_to("/");
     }
     else if(is_admin_authenticated()){
       $app->set_flash("You are signed in as a admin, please sign out before signin in again.");
       $app->redirect_to("/admin");
     }
   }
   catch(Exception $e){
       $app->set_message("error",$e->getMessage($app));
   }
   $app->render(LAYOUT,"signin");
});

get("/admin_signin",function($app){
   $app->force_to_http("/admin_signin");
   $app->set_message("title","Administrater sign in");
   require MODEL;
   try{
     if(is_authenticated()){
        $app->set_flash("error","You do not have permission to access this page");
        $app->redirect_to("/");
     }
     else if(is_admin_authenticated()){
       $app->redirect_to("/admin");
     }
   }
   catch(Exception $e){
       $app->set_message("error",$e->getMessage($app));
   }
   $app->render(LAYOUT,"admin_signin");
});

get("/signup",function($app){
    $app->force_to_http("/signup");
    require MODEL;
    $messages["title"]="Sign up";
    $is_authenticated=false;
    $is_admin_authenticated = false;
    $is_db_empty=false;
    try{
       $is_authenticated = is_authenticated();
       $is_admin_authenticated = is_admin_authenticated();
       $is_db_empty = is_db_empty();
    }
    catch(Exception $e){
       $app->set_flash("We have a problem with DB. The gerbils are working on it.");
       $app->redirect_to("/");
    }

    if($is_authenticated){
        $app->set_flash("You are signed in as a user! Please sign out before signing up!");
        $app->redirect_to("/");
    }
    else if($is_admin_authenticated){
      $app->set_flash("You are signed in as a admin, please sign out to sign up users");
      $app->redirect_to("/admin");
    }
    //else if(!$is_authenticated && $is_db_empty){
       //$app->set_message("error","You are the SUPER USER. This account cannot be deleted. You are the boss. The only way to clear the SUPER USER from the database is to DROP the entire table. Please sign in after you have finished signing up.");
    //}
    //else{
       //$app->set_flash("You are not authorised to access this resource yet. I'm gonna tell your mum if you don't sign in.");
       //$app->redirect_to("/signin");
    //}
   $app->set_message("title","Sign up");
   $app->render(LAYOUT,"signup");
});

get("/change",function($app){
   $app->force_to_http("/change");
   $app->set_message("title","Change password");
   require MODEL;
   $lname="";
   try{
      if(is_authenticated()){
        try{
           $lname = getUserLName();
           $app->set_message("name",$lname);
           $email = getUserEmail();
           $app->set_message("Email",$email);
        }
        catch(Exception $e){
            $app->set_message("error","Error with retrieving name");
        }
      }
      else{
          $app->set_flash("You are not authorised to do this.");
          $app->redirect_to("/");
      }
   }
   catch(Exception $e){
       $app->set_message("error",$e->getMessage());
   }
   $app->render(LAYOUT,"change_password");
});


get("/signout",function($app){
   // should this be GET or POST or PUT?????
   $app->force_to_http("/signout");
   require MODEL;
   if(is_authenticated() || is_admin_authenticated()){
      try{
         sign_out();
         $app->set_flash("You are now signed out.");
         $app->redirect_to("/");
      }
      catch(Exception $e){
        $app->set_flash("Something wrong with the sessions.");
        $app->redirect_to("/");
     }
   }
   else{
        $app->set_flash("You can't sign out if you are not signed in!");
        $app->redirect_to("/signin");
   }



});


post("/signup",function($app){
    require MODEL;
    try{
        if(!is_authenticated()){
          $first_name = $app->form('fname');
          $last_name = $app->form('lname');
          $title = $app->form('title');
          $email = $app->form('email');
          $email_confirm = $app->form('email_confirm');
          $pw = $app->form('password');
          $pw_confirm = $app->form('password-confirm');
          $address = $app->form('address');
          $city = $app->form('city');
          $state = $app->form('state');
          $country = $app->form('country');
          $post_code = $app->form('postcode');
          $phone = $app->form('phone');

          if($first_name && $last_name && $title && $email && $email_confirm && $pw && $pw_confirm && $address && $city && $state && $country && $post_code && $phone){
              try{
                sign_up($first_name, $last_name, $title, $email, $email_confirm, $pw, $pw_confirm, $address, $city, $state, $country, $post_code, $phone);
                $app->set_flash("You are signed up, sign in here!");//htmlspecialchars($app->form('fname'))."
                $app->redirect_to("/signup");
             }
             catch(Exception $e){
                  $app->set_flash($e->getMessage());
                  $app->redirect_to("/signup");
             }
          }
          else{
             $app->set_flash("You are not signed up. Try again and don't leave any fields blank.");
             $app->redirect_to("/signup");
          }
          $app->redirect_to("/signup");
        }
        else{
           $app->set_flash("You are not authorised to access this resource");
           $app->redirect_to("/");
        }

    }
    catch(Exception $e){
         $app->set_flash($e.getMessage());
         $app->redirect_to("/");


    }
});

post("/addProduct", function($app){
  require MODEL;
  try{
    if(is_admin_authenticated()){
      $productName = $app->form('pName');
      $productPrice = $app->form('price');
      $productSize = $app->form('size');
      $imgName = pathinfo($_FILES['image']['name'], PATHINFO_FILENAME);

      $target_dir = "uploads/";
      $target_file = $target_dir . basename($_FILES["image"]["name"]);
      $uploadOk = 1;

      $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
      $check = getimagesize($_FILES["image"]["tmp_name"]);
      $extension = image_type_to_extension($check[2]);

      if ($extension === ".jpeg"){
        $extension = ".jpg";
      }
      
      if ($check !== false){
        $uploadOk = 1;
      } else {
        $uploadOk = 0;
      }

      if (file_exists($target_file)) {
        $app->set_flash("Sorry, file already exists");
        $uploadOk = 0;
      }

      if ($uploadOk === 1){
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        $productImgPath = "$target_dir" . "$imgName" . "$extension";
        addProduct($productName, $productPrice, $productSize, $productImgPath);
      }

    } else {
      $app->set_flash("You are not signed in as admin");
      $app->redirect_to("/admin");
    }
  }
  catch(Exception $e){
       $app->set_flash($e->getMessage());
       $app->redirect_to("/admin");
     }
  $app->redirect_to("/admin");
});

post("/signin",function($app){
  $email = $app->form('email');
  $password = $app->form('password');
  if($email && $password){
    require MODEL;
    try{
       sign_in($email,$password);
    }
    catch(Exception $e){
      $app->set_flash("Could not sign you in. Try again. {$e->getMessage()}");
      $app->redirect_to("/signin");
    }
  }
  else{
       $app->set_flash("Something wrong with email or password. Try again.");
       $app->redirect_to("/signin");
  }
  $app->set_flash("Lovely, you are now signed in!");
  $app->redirect_to("/");
});

post("/adminsignin",function($app){
  $admin = $app->form('admin');
  $password = $app->form('password');
  if($admin && $password){
    require MODEL;
    try{
       admin_sign_in($admin,$password);
    }
    catch(Exception $e){
      $app->set_flash("Could not sign you in. Try again. {$e->getMessage()}");
      $app->redirect_to("/admin_signin");
    }
  }
  else{
       $app->set_flash("Invalid credentials, try again");
       $app->redirect_to("/admin_signin");
  }
  $app->set_flash("Welcome admin");
  $app->redirect_to("/admin");
});

put("/change",function($app){
  // Not complete because can't handle complex routes like /change/23
  $email = getUserEmail();
  $oldPassword = $app->form('old-Password');
  $password = $app->form('password');
  $pwConfirm = $app->form('password-confirm');
  change_password($email, $oldPassword, $password, $pwConfirm);
  $app->set_flash("Password is changed");
  $app->redirect_to("/");
});

# The Delete call back is left for you to work out

delete("/user",function($app){
  $app->set_flash("user has been deleted");
  $app->redirect_to("/");

});

// New. If it get this far then page not found
resolve();
