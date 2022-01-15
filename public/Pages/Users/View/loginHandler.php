<?php

    $con = mysqli_connect("localhost","root","") or die ("Error: Couldn't connect to srever");
    $db = mysqli_select_db($con,"luxdb") or die ("Error: Couldn't connect to Database");

    $username= mysqli_real_escape_string($con,$_POST["username"]);
    $password = mysqli_real_escape_string($con,$_POST["password"]);

    $login = "SELECT * FROM users";

    $result = mysqli_query($con,$login);
    $count = mysqli_num_rows($result);
    $row = mysqli_fetch_array($result);
    $username1 = $row["username"];
    $password1 = $row["password"];
    if($username == $username1 && password_verify($password, $password1))
    {
        session_start();
        $_SESSION["loggedAdmin"]=$username;
        header('Location: adminFunc.php');
    }
    else
    {
        header('Location: admin.php');
    }
?>