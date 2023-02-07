<?php

session_start();
include("../config/dbcon.php");

if(isset($_POST["login-btn"])){
    $username = mysqli_real_escape_string($con, $_POST["username"]);
    $password = mysqli_real_escape_string($con, $_POST["password"]);

    $login_query = "SELECT * FROM users WHERE username='$username' AND password='$password' ";
    $login_query_run = mysqli_query($con, $login_query);

    if(mysqli_num_rows($login_query_run) > 0){
        $_SESSION['auth'] = true;

        $userdata = mysqli_fetch_array($login_query_run);
        $username = $userdata['username'];
        $password = $userdata['password'];

        $_SESSION['auth_user'] = [
            'username' => $username,
            'password' => $password
        ];
        
        header("Location: ../panel/index.php");

    }else{
        header("Location: ../login.php");
    }
}

?>