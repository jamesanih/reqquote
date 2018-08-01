<?php
    
    include('config.php');
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $response = "";

    $password = password_hash($pass, PASSWORD_BCRYPT);

    $sql = "SELECT * FROM users WHERE `email` = '$email'";
    $query = mysqli_query($connect, $sql);
    
    if(mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);
        $confirm_password = password_verify($pass, $row['password']);
       if($confirm_password) {
            session_start();
           // $name = str_replace(' ',' ' ,$row['name']);
            $_SESSION['name'] = $row['name'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['id'] = $row['id'];
           // print $name;
           echo "OK";
       }else {
           echo "wrong password";
       }
    }else {  
        echo "wrong email" ;
    }
    //echo $password;
    
?>