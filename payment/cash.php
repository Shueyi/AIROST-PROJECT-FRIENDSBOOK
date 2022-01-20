<?php
//read
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "airost_project";

    $date=$_POST['date'];
	$timeslot=$_POST['timeslot'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $amount=$_POST['amt'];
    $pay_to='FriendsBook Sdn Bhd';

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $sql = "INSERT payment(date,timeslot,email,phone,amount,pay_to) VALUES('$date','$timeslot','$email','$phone','$amount','$pay_to')";

    $result = mysqli_query($conn, $sql);

    header ("Location: cardpayment.php");

	
?>
 
 
