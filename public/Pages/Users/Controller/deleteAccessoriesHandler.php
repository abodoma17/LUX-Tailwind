<?php
    $textBoxValue = $_POST["idDelete"];

    $con = mysqli_connect("localhost","root","") or die ("Error: Couldn't connect to srever");
    $db = mysqli_select_db($con,"luxdb") or die ("Error: Couldn't connect to Database");

    $query = "DELETE FROM accessories WHERE aID ='$textBoxValue'";

    $result = mysqli_query($con,$query);

    if($result){
        header('Location: ../View/adminAccessories.php');
    }
?>