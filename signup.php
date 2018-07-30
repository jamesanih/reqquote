<?php
    include('config.php');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $password = password_hash($pass, PASSWORD_BCRYPT);


    //check if email already exist
    $email_sql = "SELECT * FROM users WHERE `email` = '$email'";
    $email_query = mysqli_query($connect, $email_sql);
    
    if(mysqli_num_rows($email_query) > 0){
        echo "Email already exist";
    }else {
        $sql = "INSERT into `users` (`name`, `email`, `password`) VALUE ('".$name."', '".$email."', '".$password."')";
        $query = mysqli_query($connect, $sql);
        if($query) {
            session_start();
            $username =  $name = str_replace(' ',' ' ,$name);
            $_SESSION['name'] = $username;
            $_SESSION['email'] = $email;
            echo "OK";
            //echo $password;
        } else {
            echo "not created";
        }

    }
    

    
    
   
?>