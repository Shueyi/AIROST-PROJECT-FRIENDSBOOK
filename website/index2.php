<?php
session_start();

    include("../signin/dbh.php");
    //include("../signin/function.php");
  
    //to check if the user really signin before enterring index page
    //call from function.php
   //$user_data= check_signin($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to FriendsBook</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
<!-- header section starts  -->

<header>

    <a href="#" class="logo"><i class="fas fa-book-reader "></i>FriendsBook</a>

    <div id="menu-bar" class="fas fa-bars"></div>

    <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#speciality">Speciality</a>
       <!--<a href="#popular">Popular</a>-->
        <a href="#popular">Book now</a>
        <a href="#contact">Contact Us</a>
        <a href="../signout/signout.php" style="border:2px solid #ff3838;color:#ff3838; border-radius: 5px;padding: 0 1rem 0 1rem;">Sign Out</a> 
    </nav>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>Powerful Digital Consultations with FriendsBook.</h3>
        <p>Your Powerful Digital Team</p>
        <p>We have what you need, Trust Us:</p>
          <ul style="font-size: 1.5rem">
            <li> <i>24/7 stand-by booking system</i></li>
            <li> <i>More than 500 professionals from different fields are awaiting </i></li>
            <li> <i>Reasonable pricing <b>(RM 50 per hour)</b></i> </li>
            <li> <i>Protected conversation guaranteed</i> </li>
          </ul>
        <a href="#popular" class="btn" >Order now</a>
    </div>

    <div class="image">
        <img src="images/book.jpg" alt="">
    </div>

</section>

<!-- home section ends -->

<!-- speciality section starts  -->

<section class="speciality" id="speciality">

    <h1 class="heading"> Our <span>Speciality</span> </h1>
    <h1 style="text-align: center; font-size: 2.5rem"> <span><i>What are the things that we can solve for you?</i></span> </h1><br>

    <div class="box-container">

        <div class="box">
            <img class="image" src="images/cook2.jpg" alt="">
            <div class="content">
                <img src="images/cook1.png" style="height: 5rem; width: 5rem" alt="">
                <h3>Cooking</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa tenetur voluptates aperiam tempore libero labore aut.</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="images/cam2.jpg" alt="">
            <div class="content">
                <img src="images/cam1.png" style="height: 5rem; width: 5rem" alt="">
                <h3>Photography</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa tenetur voluptates aperiam tempore libero labore aut.</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="images/math2.jpg" alt="">
            <div class="content">
                <img src="images/math1.png" style="height: 5rem; width: 5rem" alt="">
                <h3>Algorithms</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa tenetur voluptates aperiam tempore libero labore aut.</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="images/micro2.jpg" alt="">
            <div class="content">
                <img src="images/micro1.png" style="height: 5rem; width: 5rem" alt="">
                <h3>Medicine</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa tenetur voluptates aperiam tempore libero labore aut.</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="images/tool2.jpg" alt="">
            <div class="content">
                <img src="images/tool1.png"style="height: 5rem; width: 5rem"  alt="">
                <h3>Tools</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa tenetur voluptates aperiam tempore libero labore aut.</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="images/movcam2.jpg" alt="">
            <div class="content">
                <img src="images/movcam1.png" style="height: 5rem; width: 5rem" alt="">
                <h3>Movies</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa tenetur voluptates aperiam tempore libero labore aut.</p>
            </div>
        </div>

    </div>

</section>

<!-- speciality section ends -->

<!-- popular section starts  -->

<section class="popular" id="popular">

    <h1 class="heading"> Most <span>Popular</span> Professionals </h1>

    <div class="box-container">

        <div class="box">
            <span class="price"> RM 50 / hour</span>
            <img src="images/pop1.jpg" alt="">
            <h3>Conan Edogawa</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
                <i class="far fa-star"></i>
                <p>(45k+)</p>
            </div>
            <a href="../payment/payment.php" class="btn">Order now</a>
        </div>
        <div class="box">
            <span class="price"> RM 50 / hour </span>
            <img src="images/pop2.jpg" alt="">
            <h3>Harry Potter</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <p>(9k+)</p>
            </div>
            <a href="../payment/payment.php" class="btn">Order now</a>
        </div>
        <div class="box">
            <span class="price"> RM 50 / hour </span>
            <img src="images/pop3.jpg" alt="">
            <h3 >Lady Gaga</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <p>(5k+)</p>
            </div>
            <a href="../payment/payment.php"class="btn">Order now</a>
        </div>
        <div class="box">
            <span class="price"> RM 50 / hour </span>
            <img src="images/pop4.jpg" alt="">
            <h3>Gordan Ramsay</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <p>(80k+)</p>
            </div>
            <a href="../payment/payment.php" class="btn">Order now</a>
        </div>
        <div class="box">
            <span class="price"> RM 50 / hour </span>
            <img src="images/pop5.jpg" alt="">
            <h3>Jack Sparrow</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
                <i class="far fa-star"></i>
                <p>(33k+)</p>
            </div>
            <a href="../payment/payment.php"class="btn">Order now</a>
        </div>
        <div class="box">
            <span class="price"> RM 50 / hour </span>
            <img src="images/pop6.png" alt="">
            <h3>Dora</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
                <i class="far fa-star"></i>
                <p>(10k+)</p>
            </div>
            <a href="../payment/payment.php" class="btn">Order now</a>
        </div>

    </div>
    <p style="text-align: right; font-size: 4rem ; color: gray; font-family: Arial, Helvetica, sans-serif;"><i>More is coming...</i></p>

</section>

<section class="order" id="contact">

    <h1 class="heading"> <span>Contact</span> Us </h1>

    <div class="row">
        
        <div class="image">
            <img src="images/contact.jpg" alt="">
        </div>

        <form action="">

            <div class="inputBox">
                <input type="text" placeholder="Name">
                <input type="email" placeholder="Email">
            </div>

            <div class="inputBox">
                <input type="text" placeholder="Contact No."> 
                <select >
                    <option selected>Choose one</option>
                    <option>Feedback</option>
                    <option>Question</option>
                    <option>Other</option>
                </select>
           </div>

            <textarea placeholder="Type your words here" name="" id="" cols="30" rows="10"></textarea>

            <input type="submit" value="Submit" class="btn">

        </form>

    </div>

</section>

<!-- order section ends -->

<!-- footer section  -->

<section class="footer">

    <div class="share">
        <a href="https://www.facebook.com/" class="btn" target="_blank">Facebook</a>
        <a href="https://www.instagram.com/" class="btn" target="_blank">Instagram</a>
    </div>

    <h1 class="credit"> FriendsBook <span> </span> |  <span> </span>  2021</h1>

</section>

<!-- scroll top button  -->
<a href="#home" class="fas fa-angle-up" id="scroll-top"></a>

loader  
<div class="loader-container">
    <img src="images/welcome-banner.gif" alt="">
</div>


















<!-- custom js file link  -->
<script src="script.js"></script>


</body>
</html>