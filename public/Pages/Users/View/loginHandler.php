<?php

    $con = mysqli_connect("localhost","root","") or die ("Error: Couldn't connect to srever");
    $db = mysqli_select_db($con,"luxdb") or die ("Error: Couldn't connect to Database");

    $username= mysqli_real_escape_string($con,$_POST["username"]); //sql injection protected
    $password = mysqli_real_escape_string($con,$_POST["password"]); //sql injection protected

    $login = "SELECT username,password FROM users WHERE username='$username' and password='$password' ";

    $result = mysqli_query($con,$login);
    $count = mysqli_num_rows($result);

    if($count==1){

        session_start();
        $_SESSION["loggedAdmin"]=$username;
        header('Location: adminFunc.php');


    }else {

        header('Location: admin.php');
    }
?>