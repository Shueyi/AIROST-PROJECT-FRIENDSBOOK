<?php
    
    function check_signin($conn)
    {
        //if there is the session variable in our session
        if(isset($_SESSION["session_id"]))
        {
            //id is set as session variable
            $id= $_SESSION["session_id"];
            $query= "SELECT * FROM sign_in WHERE id ='$session_id' limit 1"; //limit is used to constrain the number of rows return by the SELECT statement

            $result= mysqli_query($conn, $query);

            //to collect user's data 
            if($result && mysqli_num_rows($result)> 0)
            {
                $user_data= mysqli_fetch_assoc($result);
                return $user_data;
            }
        }
        header("Location: ../signin/signin.php");
        exit();

    }
    
   
?>