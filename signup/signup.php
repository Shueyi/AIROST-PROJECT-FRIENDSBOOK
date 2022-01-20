<?php
session_start();

  include("../signin/dbh.php");
  include("../signin/function.php");

  //if something was posted
  if($_SERVER['REQUEST_METHOD'] === "POST")
   {
      //collect data from POST variable (refer down below the form)
      $fullname= $_POST["fullname"];
      $email= $_POST["email"];
      $username= $_POST["username"];
      $password= $_POST["password"];

      //to check if whether input(form) is empty
      if(!empty($fullname) && !empty($email) && !empty($username) && !empty($password))
      {

        //save input to database
        $sql= "INSERT sign_in( fullname, email, username, password) VALUES( '$fullname', '$email', '$username', '$password')";
        $result= mysqli_query($conn, $sql);

      
        header("Location: ../signin/signin.php");
        }
        else{
          echo "Please enter some valid information";
          exit();
        }
        
      }
         
?>


<!doctype html>
<html lang="en">
  <head>
    <title>Sign Up</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="signup.css">
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

    <div>
        <form method= "post"  id= "signupBox">
          <h1>Sign Up</h1>
          <p1>Create your free account now</p1><br>
            <label for= "fullname" >Full name: </label>
            <input type= "text" class= "signUpInput" id= "fullname" name= "fullname" placeholder= "Enter your fullname"  required ><br>

            <label for= "email">Email: </label>
            <input type= "text" class= "signUpInput" id= "email" name= "email" placeholder= "Enter your email" required><br>

            <label for= "username">Username: </label>
            <input type= "text" class= "signUpInput" id= "username" name= "username" placeholder= "Enter your username" required><br>

            <label for= "password" >Password: </label>
            <input type= "password" class= "signUpInput" id= "password" name= "password" placeholder= "Enter your password"  required ><br>

            <label for= "show">Show password </label>
            <input type= "checkbox" id= "show" name= "show" onclick= visibility()><br>

            <input type= "submit" id= "submit" name= "submit" ><br>

            <a href= "../signin/signin.php">Already have an account?</a>
            

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