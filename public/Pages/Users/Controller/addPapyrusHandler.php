<?php
    $nameInput = $_POST["nameInput"];
    $descriptionInput = $_POST["descriptionInput"];
    $priceInput = $_POST["priceInput"];
    $bgInput = $_POST["bgInput"];
    $weightInput = $_POST["weightInput"];
    $widthInput = $_POST["widthInput"];
    $heightInput = $_POST["heightInput"];
    $image1input = $_POST["image1input"];
    $image2 = $_POST["image2"];

    $con = mysqli_connect("localhost","root","") or die ("Error: Couldn't connect to srever");
    $db = mysqli_select_db($con,"luxdb") or die ("Error: Couldn't connect to Database");

    $query = "INSERT INTO products(name,description,price,bg,weight,width,height,image1,image2,cID) value ('$nameInput','$descriptionInput','$priceInput','$bgInput','$weightInput','$widthInput','$heightInput','$image1input','$image2',4)";

    $result = mysqli_query($con,$query);

    if($result){
        header('Location: ../View/adminPapyrus.php');
    }  
?>