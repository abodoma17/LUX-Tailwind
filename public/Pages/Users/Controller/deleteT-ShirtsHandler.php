<?php
    $textBoxValue = $_POST["idDelete"];

    $con = mysqli_connect("localhost","root","") or die ("Error: Couldn't connect to srever");
    $db = mysqli_select_db($con,"luxdb")or die ("Error: Couldn't connect to database");

    $query = "DELETE FROM products WHERE id ='$textBoxValue'";

    $result = mysqli_query($con,$query);

    if($result){
        header('Location: ../View/adminT-Shirts.php');
    }  
?>