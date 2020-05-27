<?php

function get_db(){
    $db = null;

    try{
        $db = new PDO('mysql:host=localhost;dbname=test_db', 'root','');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        // notice how we THROW the exception. You can catch this in your controller code in the usual way
        throw new Exception("Something wrong with the database: ".$e->getMessage());
    }
    return $db;

}

function get_artwork(){
   try{
      $db = get_db();
      $query = "SELECT ProductID, ProductName, ProductPrice, ProductSize, ProductImage FROM ProductDetails";
      $statement = $db->query($query);
      $statement -> execute();
      $artworks = $statement->fetchall(PDO::FETCH_ASSOC);
      return $artworks;
   }

   catch(PDOException $e){
      throw new Exception($e->getMessage());
      return "";
      }
}


/* Other functions can go below here */

function sign_up($first_name, $last_name, $title, $email, $email_confirm, $password, $password_confirm, $address, $city, $state, $country, $post_code, $phone){
   try{
     $db = get_db();

     if (validate_emails($email,$email_confirm) && validate_passwords($password, $password_confirm)){//validate_lname($db,$last_name) && validate_emails($email,$email_confirm)
          $salt = generate_salt();
          $password_hash = generate_password_hash($password,$salt);
          $query = "INSERT INTO CustomerDetails (CustFName, CustLName, CustTitle, CustEmail, Cust_hashed_Password, Cust_salt, CustAddress, CustCity, CustState, CustCountry, CustPostCode, CustPhone) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
          if($statement = $db->prepare($query)){
             $binding = array($first_name, $last_name, $title, $email, $password_hash, $salt, $address, $city, $state, $country, $post_code, $phone);
             if(!$statement -> execute($binding)){
                 throw new Exception("Could not execute query.");
             }
          }
          else{
            throw new Exception("Could not prepare statement.");

          }
     }
     else{
        throw new Exception("Invalid data.");
     }


   }
   catch(Exception $e){
       throw new Exception($e->getMessage());
   }

}

function getUserEmail(){
   $email="";
   session_start();
   if(!empty($_SESSION["email"])){
      $email = $_SESSION["email"];
   }
   session_write_close();
   return $email;
}

function getUserLName(){
   $email="";
   $lname="";
   session_start();
   if(!empty($_SESSION["email"])){
      $email = $_SESSION["email"];
   }
   session_write_close();

   if(empty($email)){
     throw new Exception("User has no email");
   }

   try{
      $db = get_db();
      $query = "SELECT CustLName FROM CustomerDetails WHERE CustEmail=?";
      if($statement = $db->prepare($query)){
         $binding = array($email);
         if(!$statement -> execute($binding)){
                 throw new Exception("Could not execute query.");
         }
         else{
            $result = $statement->fetch(PDO::FETCH_ASSOC);
            $lname = $result['CustLName'];
         }
      }
      else{
            throw new Exception("Could not prepare statement.");
      }

   }
   catch(Exception $e){
      throw new Exception($e->getMessage());
   }
   return $lname;
}

function sign_in($email,$password){
   try{
      $db = get_db();
      $query = "SELECT CustEmail, Cust_salt, Cust_hashed_Password FROM CustomerDetails WHERE CustEmail=?";
      if($statement = $db->prepare($query)){
         $binding = array($email);
         if(!$statement -> execute($binding)){
                 throw new Exception("Could not execute query.");
         }
         else{
            $result = $statement->fetch(PDO::FETCH_ASSOC);
            $salt = $result['Cust_salt'];
            $hashed_password = $result['Cust_hashed_Password'];
            if(generate_password_hash($password,$salt) !== $hashed_password){
                throw new Exception("Account does not exist!");
            }
            else{
               $email = $result["CustEmail"];
               set_authenticated_session($email,$hashed_password);
            }
         }
      }
      else{
            throw new Exception("Could not prepare statement.");
      }

   }
   catch(Exception $e){
      throw new Exception($e->getMessage());
   }
}

function admin_sign_in($admin, $password){
  try{
    if ($admin && $password){
      if ($admin === "admin" && $password === "Admin"){
        set_admin_authenticated_session($admin, $password);
      }
      else{
      throw new Exception("Wrong credentials entered, please enter correct credentials");
      }
    }
    else{
      throw new Exception("Fields are left empty, please fill all fields");
    }
  }
  catch(Exception $e){
    throw new Exception($e->getMessage());
  }
}

function is_db_empty(){
   $is_empty = false;
   try{
      $db = get_db();
      $query = "SELECT * FROM CustomerDetails";
      if($statement = $db->prepare($query)){
	       $id=1;
         $binding = array($id);
         if(!$statement -> execute($binding)){
                 throw new Exception("Could not execute query.");
         }
         else{
            $result = $statement->fetch(PDO::FETCH_ASSOC);
            if(empty($result)){
	          $is_empty = true;
            }
         }
      }
      else{
            throw new Exception("Could not prepare statement.");
      }

   }
   catch(Exception $e){
      throw new Exception($e->getMessage());
   }
   return $is_empty;

}

function set_authenticated_session($email,$password_hash){
      session_start();

      //Make it a bit harder to session hijack
      session_regenerate_id(true);

      $_SESSION["email"] = $email;
      $_SESSION["hash"] = $password_hash;
      session_write_close();
}

function set_admin_authenticated_session($admin,$password){
      session_start();

      //Make it a bit harder to session hijack
      session_regenerate_id(true);

      $_SESSION["admin"] = $admin;
      $_SESSION["password"] = $password;
      session_write_close();
}

function generate_password_hash($password,$salt){
      return hash("sha256", $password.$salt, false);
}

function generate_salt(){
    $chars = "0123456789ABCDEF";
    return str_shuffle($chars);
}

function validate_emails($email, $email_confirm){

   if($email === $email_confirm && validate_email($email)){
      return true;
   } else{
      return false;
   }

}

function validate_email($email){
  //Does it fit emails category
  return true;
}

function validate_passwords($password, $password_confirm){

   if($password === $password_confirm && validate_password($password)){
      return true;
   }
   return false;
}

function validate_password($password){
  //Does the password pass the strong password tests
  return true;
}


function is_authenticated(){
    $email = "";
    $hash="";

    session_start();
    if(!empty($_SESSION["email"]) && !empty($_SESSION["hash"])){
       $email = $_SESSION["email"];
       $hash = $_SESSION["hash"];
    }
    session_write_close();

    if(!empty($email) && !empty($hash)){

        try{
           $db = get_db();
           $query = "SELECT Cust_hashed_Password FROM CustomerDetails WHERE CustEmail=?";
           if($statement = $db->prepare($query)){
             $binding = array($email);
             if(!$statement -> execute($binding)){
                return false;
             }
             else{
                 $result = $statement->fetch(PDO::FETCH_ASSOC);
                 if($result['Cust_hashed_Password'] === $hash){
                   return true;
                 }
             }
           }

        }
        catch(Exception $e){
           throw new Exception("Authentication not working properly. {$e->getMessage()}");
        }

    }
    return false;

}

function is_admin_authenticated(){
  $admin ="";
  $password = "";

  session_start();
  if(!empty($_SESSION["admin"]) && !empty($_SESSION["password"])){
     $admin = $_SESSION["admin"];
     $password = $_SESSION["password"];
  }
  session_write_close();

  if(!empty($admin) && !empty($password)){

      try{
         if($admin === "admin" && $password === "Admin"){
           return true;
         }
       }

      catch(Exception $e){
         throw new Exception("Authentication not working properly. {$e->getMessage()}");
      }
  } else{
      return false;
  }
}

function sign_out(){
    session_start();
    if(!empty($_SESSION["email"]) && !empty($_SESSION["hash"])){
       $_SESSION["email"] = "";
       $_SESSION["hash"] = "";
       $_SESSION = array();
       session_destroy();
    }

    else if(!empty($_SESSION["admin"]) && !empty($_SESSION["password"])){
      $_SESSION["admin"] = "";
      $_SESSION["password"] = "";
      $_SESSION = array();
      session_destroy();
    }
    session_write_close();
}


function change_password($user_Email, $old_pw_input, $new_pw, $pw_confirm){
  session_start();
  if(!empty($_SESSION["email"]) && !empty($_SESSION["hash"])){
    $old_pw = $_SESSION["hash"];
    $email = $_SESSION["email"];
  }
  session_write_close();

  if ($old_pw === $old_pw_input){
    if ($new_pw === $pw_confirm){
      $db = get_db();
      $salt = generate_salt();
      $new_password_hash = generate_password_hash($new_pw,$salt);
      $query = "UPDATE CustomerDetails SET (Cust_hashed_Password, Cust_salt) VALUES (?,?)";
      if($statement = $db->prepare($query)){
           $binding = array($new_password_hash, $salt);
          if(!$statement -> execute($binding)){
              throw new Exception("Could not execute query.");
          }
    }

    }
  }
}

function addProduct($productName, $productPrice, $productSize, $productImgPath){
  try{
    $db = get_db();

    if ($productName && $productPrice && $productSize && $productImgPath) {
         $query = "INSERT INTO ProductDetails (ProductName, ProductPrice, ProductSize, ProductImage) VALUES (?,?,?,?)";
         if($statement = $db->prepare($query)){
            $binding = array($productName, $productPrice, $productSize, $productImgPath);
            if(!$statement -> execute($binding)){
                throw new Exception("Could not execute query.");
            }
         }
         else{
           throw new Exception("Could not prepare statement.");

         }
    }
    else{
       throw new Exception("Invalid data.");
    }


  }
  catch(Exception $e){
      throw new Exception($e->getMessage());
  }
}
