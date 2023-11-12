<?php
    session_start();
    include('server.php');

    $errors = array();

    if(isset($_POST['reg_user'])){
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);

        if($password_1 != $password_2){
            array_push($errors,"The two passwords don't match");
        }

        $user_check_query = "SELECT * FROM user WHERE username ='$username'";
        $query = mysqli_query($conn,$user_check_query);
        $result = mysqli_fetch_assoc($query);

        if($result){ // if user exists
            if($result['username'] === $username){
                array_push($errors,"Username already exists");
            }
        }

        if(count($errors)==0){
            $password = md5($password_1);

            $sql = "INSERT INTO user (username,password) VALUES ('$username','$password')";
            mysqli_query($conn, $sql);
            
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
            exit();
        } else{
            array_push($errors,"Username already exists");
            $_SESSION['error'] = "Username already exists!!!";
            header ('location: register.php');
            exit();
        }
    }


?>