<?php
session_start();

  include("../signin/dbh.php");
  include("../signin/function.php");


  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
   //collect data from POST variable (refer down below the form)
   $username= $_POST["username"];
   $password= $_POST["password"];
  
   if(!empty($username) && !empty($password))
   {
    //read from db
    $sql= "SELECT * FROM sign_in WHERE username= '$username' AND password= '$password' limit 1 ";
    $result= mysqli_query($conn, $sql);

    if($result)
    {
      if($result && mysqli_num_rows($result) > 0)
      {
        $user_data= mysqli_fetch_assoc($result);

          if($user_data["password"] === $password)
          {
             $_SESSION["session_id"]= $user_data['id'];
             header("Location: ../website/index2.php");
            exit();
          } 
        }
      }
      echo "Wrong username or password";
    }
      else
        {
          echo "invalid input";
        }
  }
                 
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Sign In </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="signin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
    
  </head>

  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <header>

    <!--nav bar-->
    <a href="#" class="logo"><i class="fas fa-book-reader "></i>FriendsBook</a>

    <div id="menu-bar" class="fas fa-bars"></div>

    <nav class="navbar">
    <a href="../website/index.html">Home</a>
    <a href="../website/index.html">Popular</a>
    <a href="#review">Book now</a>
    <a href="../signup/signup.php" style="border:2px solid #ff3838;color:#ff3838; border-radius: 5px;padding: 0 1rem 0 1rem;">Sign up</a>
    </nav>

    </header>
      <div>
        <form method= "post" id= "signinBox">
          <h1>Sign In to Book Now</h1>
          <p1>More than 500 professionals from different fields are there for you 24/7 </p1><br><br>
            <label for= "username">Username </label> <br>
            <input type= "text" class= "signInInput" id= "username" name= "username" placeholder= "Enter your username"  required><br><br>

            <label for= "password">Password </label> <br>
            <input type= "password" class= "signInInput" id= "password" name= "password"  placeholder= "Enter your pasword"   required ><br>
            <i class= "fa fa-eye"></i>

            <label for= "show">Show password </label>
            <input type= "checkbox" id= "show" name= "show" onclick= visibility()>

            <input type= "submit" id= "submit" name= "submit" value="Sign In " ><br><br>

            <p2>Do not have an account yet?<a href= "../signup/signup.php" class= "askSignUp" id= "signUpLink"> Create a free account</a></p2>
            



      </div>

        <script>
            function visibility(){
            var x= document.getElementById("password")

            if(x.type ==="password"){
                x.type= "text";
            }

            else{
                x.type= "password";
            }

            }
        </script>
      
  </body>
</html>