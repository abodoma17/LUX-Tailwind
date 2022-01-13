<?php

    $userName= $_POST["userName"];
    $password = $_POST["password"]

    $con = mysqli_connect("localhost","root","") or die ("Error: Couldn't connect to srever");
    $db = mysqli_select_db($con,"luxdb") or die ("Error: Couldn't connect to Database");;

    $login = "SELECT userName,password FROM admin WHERE userName='$userName' and password='$password' ";

    $result = mysqli_query($con,$login);
    $count = mysqli_num_rows(result);

    if($count==1){

        session_start();
        $_SESSION["loggedAdmin"]=$userName;
        header('Location: adminFunc.php');


    }else {

        echo "INVALID EMAIL OR PASSWORD";
    }






?>